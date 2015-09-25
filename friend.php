<?php
	require('public.php');

	$nowUserId = $_GET['userId'] == ''? $userId : $_GET['userId'];

	if(!empty($nowUserId)){
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
				$subResult = selectSql('albums','album_id','user_id='.$friendId);
				if($subResult['state'] == 1){
					while($subRows = mysql_fetch_assoc($subResult['msg'])){
						$albumId = $subRows['album_id'];
						//朋友的所有照片
						$subSubResult = selectSql('photos','photo_id,photo_name,upload_time',"album_id='$albumId' ORDER BY upload_time DESC");
						if($subSubResult['state'] == 1){
							while($subSubRows = mysql_fetch_assoc($subSubResult['msg'])){
								$srcFile = iconv('utf-8','gb2312',$uploadImgPath.$subSubRows['photo_name']);
								$dstFile = iconv('utf-8','gb2312',$thumImgPath.'100_100_'.$subSubRows['photo_name']);
								thumbnails($srcFile,$dstFile,100,100);

								$friendPhotoInfoArr[] = array(
									'photoId' => $subSubRows['photo_id'],
									'photoName' => iconv('gb2312','utf-8',$dstFile)
								);
							}
						}
					}
				}

				$friendInfoArr[] = array(
					'friendId' => $friendId,
					'friendName' => $friendName,
					'friendAvatar' => getAvatar($friendId,$defaultAvatar,$avatarPath),
					'friendPhotoInfoArr' => $friendPhotoInfoArr,
				);
			}
		}

		if($nowUserId == $userId){
			$smarty->assign('isAuthor',true);
		}

		//读取相册的拥有者
		$result = selectSql('users','user_name','user_id='.$nowUserId);
		if($result['state'] == 1){
			$rows = mysql_fetch_assoc($result['msg']);
			$smarty->assign('authorName',$rows['user_name']);
		}


		$smarty->assign('authorId',$nowUserId);
		$smarty->assign('friendInfoArr',$friendInfoArr);
		$smarty->assign('userAvatar',getAvatar($nowUserId,$defaultAvatar,$avatarPath));
		$smarty->assign('userId',$userId);
		$smarty->assign('userName',$userName);
		$smarty->assign('cssFileName','friend');
		$smarty->display('friend.tpl');
	}

?>