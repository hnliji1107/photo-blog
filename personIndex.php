<?php
	require('public.php');

	$nowUserId = $_GET['userId'] == ''? $userId : $_GET['userId'];

	if(!empty($_POST['friendId'])){
		$friendId = $_POST['friendId'];
		$addTime = date('Y-m-d H:i:s');

		//检测当前用户是否已是朋友
		$result = selectSql('friends','friend_id','user_id='.$nowUserId);
		if($result['state'] == 1){
			$friendIds = array();
			while($rows = mysql_fetch_assoc($result['msg'])){
				$friendIds[] = $rows['friend_id'];
			}

			if(in_array($friendId,$friendIds)){ //如果已是好友
				echo json_encode(array('state'=>0,'msg'=>'已经是你的好友，加好友失败。'));
			}
			else{ //否则，添加为好友
				$result = insertSql('friends','friend_id,user_id,add_time',"'$friendId','$nowUserId','$addTime'");
				if($result['state'] == 1){
					echo json_encode(array('state'=>1,'msg'=>'加好友成功'));
				}
				else{
					echo json_encode(array('state'=>0,'msg'=>'加好友失败'));
				}
			}
		}

		return false;
	}

	if(!empty($nowUserId)){
		$result = selectSql('albums','album_id','user_id='.$nowUserId);
		if($result['state'] == 1){
			//读取所有相册个数
			$albumNum = mysql_num_rows($result['msg']);
			$smarty->assign('albumNum',$albumNum);
			//读取所有照片个数
			$photoNum = 0;
			while($rows = mysql_fetch_assoc($result['msg'])){
				$albumId = $rows['album_id'];
				$subResult = selectSql('photos','photo_id','album_id='.$albumId);
				if($subResult['state'] == 1){
					$photoNum += mysql_num_rows($subResult['msg']);
				}
			}
			$smarty->assign('photoNum',$photoNum);
		}

		//读取当前用户的头像
		$smarty->assign('userAvatar',getAvatar($nowUserId,$defaultAvatar,$avatarPath));

		if($nowUserId == $userId){
			$smarty->assign('isAuthor',true);
		}

		//读取相册的拥有者
		$result = selectSql('users','user_name','user_id='.$nowUserId);
		if($result['state'] == 1){
			$rows = mysql_fetch_assoc($result['msg']);
			$smarty->assign('authorName',$rows['user_name']);
		}

		//读取被评论的照片
		$result = selectSql('photoComments','*','photoOwner_id='.$nowUserId);
		$photoComments = array();
		while($rows = mysql_fetch_assoc($result['msg'])){
			//读取评论者名字
			$commenterId = $rows['commenter_id'];
			$subResult = selectSql('users','user_name','user_id='.$commenterId);
			if($subResult['state'] == 1){
				$subRows = mysql_fetch_assoc($subResult['msg']);
				$commenterName = $subRows['user_name'];
			}
			//读取评论的照片
			$photoId = $rows['photo_id'];
			$subResult = selectSql('photos','photo_name','photo_id='.$photoId);
			if($subResult['state'] == 1){
				$subRows = mysql_fetch_assoc($subResult['msg']);
				$srcFile = iconv('utf-8','gb2312',$uploadImgPath.$subRows['photo_name']);
				$dstFile = iconv('utf-8','gb2312',$thumImgPath.'75_75_'.$subRows['photo_name']);
				thumbnails($srcFile,$dstFile,75,75);
				$photoName = iconv('gb2312','utf-8',$dstFile);
			}

			$photoComments[] = array(
				'commenterId' => $commenterId,
				'commenterName' => $commenterName,
				'commenterAvatar' => getAvatar($commenterId,$defaultAvatar,$avatarPath),
				'commentTxt' => $rows['comment_txt'],
				'commentTime' => $rows['comment_time'],
				'commentPhoto' => $photoName,
				'photoId' => $photoId
			);
		}

		//谁加我为好友
		$result = selectSql('friends','user_id,add_time','friend_id='.$nowUserId);
		if($result['state'] == 1){
			$whoAddMe = array();
			while($rows = mysql_fetch_assoc($result['msg'])){
				$whoId = $rows['user_id'];
				//添加我为好友的人的名字
				$subResult = selectSql('users','user_name','user_id='.$whoId);
				if($subResult['state'] == 1){
					$subRows = mysql_fetch_assoc($subResult['msg']);
					$whoName = $subRows['user_name'];
				}

				$whoAddMe[] = array(
					'whoId' => $whoId,
					'whoName' => $whoName,
					'addTime' => $rows['add_time'],
					'whoAvatar' => getAvatar($whoId,$defaultAvatar,$avatarPath)
				);
			}

			$smarty->assign('whoAddMe',$whoAddMe);
		}


		//推荐好友
		$result = selectSql('users','user_id,user_name',"user_id NOT IN(SELECT friend_id FROM friends WHERE user_id='$nowUserId') AND user_id<>'$nowUserId'");
		if($result['state'] == 1){
			$otherUserInfoArr = array();
			while($rows = mysql_fetch_assoc($result['msg'])){
				$otherUserInfoArr[] = array(
					'otherUserId' => $rows['user_id'],
					'otherUserName' => $rows['user_name'],
					'otherUserAvatar' => getAvatar($rows['user_id'],$defaultAvatar,$avatarPath)
				);
			}
		}

		//朋友动态
		$friendInfoArr = array();
		$result = selectSql('friends','friend_id','user_id='.$nowUserId);
		if($result['state'] == 1){
			while($rows = mysql_fetch_assoc($result['msg'])){
				$friendId = $rows['friend_id'];
				//朋友名字
				$subResult = selectSql('users','user_name','user_id='.$friendId);
				if($subResult['state'] == 1){
					$subRows = mysql_fetch_assoc($subResult['msg']);
					$friendName = $subRows['user_name'];
				}
				//朋友的所有相册
				$friendPhotoInfoArr = array();
				$uploadTime = '';
				$subResult = selectSql('albums','album_id','user_id='.$friendId);
				if($subResult['state'] == 1){
					while($subRows = mysql_fetch_assoc($subResult['msg'])){
						$albumId = $subRows['album_id'];
						//朋友的所有照片
						$subSubResult = selectSql('photos','photo_id,photo_name,upload_time',"album_id='$albumId' ORDER BY upload_time DESC");
						if($subSubResult['state'] == 1){
							while($subSubRows = mysql_fetch_assoc($subSubResult['msg'])){
								$srcFile = iconv('utf-8','gb2312',$uploadImgPath.$subSubRows['photo_name']);
								$dstFile = iconv('utf-8','gb2312',$thumImgPath.'75_75_'.$subSubRows['photo_name']);
								thumbnails($srcFile,$dstFile,75,75);

								$friendPhotoInfoArr[] = array(
									'photoId' => $subSubRows['photo_id'],
									'photoName' => iconv('gb2312','utf-8',$dstFile)
								);
								$uploadTime = $subSubRows['upload_time'];
							}
						}
					}
				}

				//朋友加谁为好友
				$subResult = selectSql('friends','friend_id,add_time','user_id='.$friendId);
				if($subResult['state'] == 1){
					$meAddWho = array();
					while($subRows = mysql_fetch_assoc($subResult['msg'])){
						$whoId = $subRows['friend_id'];
						//添加我为好友的人的名字
						$subSubResult = selectSql('users','user_name','user_id='.$whoId);
						if($subSubResult['state'] == 1){
							$subSubRows = mysql_fetch_assoc($subSubResult['msg']);
							$whoName = $subSubRows['user_name'];
						}

						$meAddWho[] = array(
							'whoId' => $whoId,
							'whoName' => $whoName,
							'addTime' => $subRows['add_time'],
							'whoAvatar' => getAvatar($whoId,$defaultAvatar,$avatarPath)
						);
					}
				}


				$friendInfoArr[] = array(
					'friendId' => $friendId,
					'friendName' => $friendName,
					'friendAvatar' => getAvatar($friendId,$defaultAvatar,$avatarPath),
					'friendPhotoInfoArr' => $friendPhotoInfoArr,
					'uploadTime' => $uploadTime,
					'meAddWho' => $meAddWho
				);
			}
		}

		//我加谁为好友
		$subResult = selectSql('friends','friend_id,add_time','user_id='.$nowUserId);
		if($subResult['state'] == 1){
			$meAddWho = array();
			while($subRows = mysql_fetch_assoc($subResult['msg'])){
				$whoId = $subRows['friend_id'];
				//添加我为好友的人的名字
				$subSubResult = selectSql('users','user_name','user_id='.$whoId);
				if($subSubResult['state'] == 1){
					$subSubRows = mysql_fetch_assoc($subSubResult['msg']);
					$whoName = $subSubRows['user_name'];
				}

				$meAddWho[] = array(
					'whoId' => $whoId,
					'whoName' => $whoName,
					'addTime' => $subRows['add_time'],
					'whoAvatar' => getAvatar($whoId,$defaultAvatar,$avatarPath)
				);
			}
		}

		//我上传的图片
		//朋友的所有相册
		$mePhotoInfoArr = array();
		$result = selectSql('albums','album_id','user_id='.$nowUserId);
		if($result['state'] == 1){
			while($rows = mysql_fetch_assoc($result['msg'])){
				$albumId = $rows['album_id'];
				//朋友的所有照片
				$subResult = selectSql('photos','photo_id,photo_name,upload_time',"album_id='$albumId' ORDER BY upload_time DESC");
				if($subResult['state'] == 1){
					while($subRows = mysql_fetch_assoc($subResult['msg'])){
						$srcFile = iconv('utf-8','gb2312',$uploadImgPath.$subRows['photo_name']);
						$dstFile = iconv('utf-8','gb2312',$thumImgPath.'75_75_'.$subRows['photo_name']);
						thumbnails($srcFile,$dstFile,75,75);

						$mePhotoInfoArr[] = array(
							'photoId' => $subRows['photo_id'],
							'photoName' => iconv('gb2312','utf-8',$dstFile),
							'uploadTime' => $subRows['upload_time']
						);
					}
				}
			}
		}


		$smarty->assign('mePhotoInfoArr',$mePhotoInfoArr);
		$smarty->assign('meAddWho',$meAddWho);
		$smarty->assign('authorId',$nowUserId);
		$smarty->assign('friendInfoArr',$friendInfoArr);
		$smarty->assign('otherUserInfoArr',$otherUserInfoArr);
		$smarty->assign('photoComments',$photoComments);
		$smarty->assign('userId',$userId);
		$smarty->assign('userName',$userName);
		$smarty->assign('cssFileName','personIndex');
		$smarty->display('personIndex.tpl');
	}

?>	