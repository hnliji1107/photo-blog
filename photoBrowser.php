<?php
	require('public.php');

	if(!empty($_GET['photoId'])){
		$photoId = $_GET['photoId'];
		$result = selectSql('photos','photo_name,album_id,upload_time,edit_name,photo_desc','photo_id='.$photoId);
		if($result['state'] == 1){
			$rows = mysql_fetch_assoc($result['msg']);

			$srcFile = iconv('utf-8','gb2312',$uploadImgPath.$rows['photo_name']);
			$dstFile = iconv('utf-8','gb2312',$thumImgPath.'640_'.$rows['photo_name']);

			//本张照片信息
			$photoInfoArr = array(
				'name' => iconv('gb2312','utf-8',$dstFile),
				'originalImg' => iconv('gb2312','utf-8',$srcFile),
				'albumId' => $rows['album_id'],
				'time' => $rows['upload_time'],
				'editName' => $rows['edit_name'] == ''? $rows['photo_name'] : $rows['edit_name'],
				'photoDesc' => $rows['photo_desc']
			);

			thumbnails($srcFile,$dstFile,640,'');

			$result = selectSql('photos','photo_id,photo_name','album_id='.$photoInfoArr['albumId']);
			if($result['state'] == 1){
				$allPhotoInfoArr = array();
				$i = 0;
				$photoIndex = 0;
				while($rows = mysql_fetch_assoc($result['msg'])){
					$srcFile = iconv('utf-8','gb2312',$uploadImgPath.$rows['photo_name']);
					$dstFile = iconv('utf-8','gb2312',$thumImgPath.'75_75_'.$rows['photo_name']);

					thumbnails($srcFile,$dstFile,75,75);

					//本相册所有照片信息
					$allPhotoInfoArr[] = array(
						'id' => $rows['photo_id'],
						'name' => iconv('gb2312','utf-8',$dstFile),
						'originalImg' => iconv('gb2312','utf-8',$srcFile)
					);
					if($photoId == $rows['photo_id']){
						$photoIndex = $i;
					}
					$i++;
				}

				$smarty->assign('photoIndex',$photoIndex);
				$smarty->assign('prevPhotoId',($allPhotoInfoArr[$photoIndex-1]['id']=='')? $allPhotoInfoArr[count($allPhotoInfoArr)-1]['id'] : $allPhotoInfoArr[$photoIndex-1]['id']);
				$smarty->assign('nextPhotoId',($allPhotoInfoArr[$photoIndex+1]['id']=='')? $allPhotoInfoArr[0]['id'] : $allPhotoInfoArr[$photoIndex+1]['id']);
			}

			$result = selectSql('albums','album_name','album_id='.$photoInfoArr['albumId']);
			if($result['state'] == 1){
				$rows = mysql_fetch_assoc($result['msg']);
				$smarty->assign('albumName',$rows['album_name']);
			}

			$result = selectSql('albums','user_id','album_id='.$photoInfoArr['albumId']);
			if($result['state'] == 1){
				$rows = mysql_fetch_assoc($result['msg']);
				$authorId = $rows['user_id'];
				
				if($authorId == $userId){
					$smarty->assign('isAuthor',true);
				}
				else{
					$result = selectSql('users','user_name','user_id='.$authorId);
					if($result['state'] == 1){
						$rows = mysql_fetch_assoc($result['msg']);
						$smarty->assign('authorName',$rows['user_name']);
					}
				}
			}

			$smarty->assign('authorId',$authorId);

			//读取照片拥有者的头像
			$smarty->assign('authorAvatar',getAvatar($authorId,$defaultAvatar,$avatarPath));
			//读取当前用户的头像
			$smarty->assign('userAvatar',getAvatar($userId,$defaultAvatar,$avatarPath));
			//读取照片评论
			$commentInfoArr = getComments($photoId,$defaultAvatar,$avatarPath);
		}


		$smarty->assign('photoId',$photoId);
		$smarty->assign('userId',$userId);
		$smarty->assign('userName',$userName);
		$smarty->assign('photoInfoArr',$photoInfoArr);
		$smarty->assign('commentInfoArr',$commentInfoArr);
		$smarty->assign('allPhotoInfoArr',$allPhotoInfoArr);
		$smarty->assign('cssFileName','photoBrowser');
		$smarty->display('photoBrowser.tpl');
	}

	if(!empty($_POST['photoId']) && !empty($_POST['act']) && $_POST['act'] == 'delPh'){
		$photoId = $_POST['photoId'];
		//删除文件夹里的图片
		deletePhoto($photoId);

		$result = deleteSql('photos','photo_id='.$photoId);
		if($result['state'] == 1){
			echo json_encode(array('state'=>1,'msg'=>'删除成功.'));
		}
		else{
			echo json_encode(array('state'=>0,'msg'=>'删除失败.'));
		}
		return false;
	}

	if(isset($_POST['editName']) && !empty($_POST['photoId']) && !empty($_POST['act']) && $_POST['act'] == 'editPh'){
		$photoId = $_POST['photoId'];
		$editName = $_POST['editName'];
		$photoDesc = $_POST['photoDesc'];

		$result = updateSql('photos',"edit_name='$editName',photo_desc='$photoDesc'",'photo_id='.$photoId);
		if($result['state'] == 1){
			echo json_encode(array('state'=>1,'msg'=>'编辑成功.'));
		}
		else{
			echo json_encode(array('state'=>0,'msg'=>'编辑失败.'));
		}

		return false;
	}

	if(!empty($_POST['photoId']) && !empty($_POST['act']) && $_POST['act'] == 'setAlbumCover'){
		$photoId = $_POST['photoId'];

		//找出当前照片路径和所属相册id
		$result = selectSql('photos','photo_name,album_id','photo_id='.$photoId);
		if($result['state'] == 1){
			$rows = mysql_fetch_assoc($result['msg']);
			$photoName = $rows['photo_name'];
			$albumId = $rows['album_id'];

			//更新相册封面
			$result = updateSql('albums',"album_cover='$photoName'",'album_id='.$albumId);
			if($result['state'] == 1){
				echo json_encode(array('state'=>1,'msg'=>'设置成功.'));
			}
			else{
				echo json_encode(array('state'=>0,'msg'=>'设置失败.'));
			}
		}

		return false;
	}

	if(!empty($_POST['photoOwnerId']) && !empty($_POST['postText']) && !empty($_POST['act']) && $_POST['act'] == 'addComment'){
		$photoId = $_POST['photoId'];
		$postText = $_POST['postText'];
		$commentTime = date('Y-m-d H:i:s');
		$commenterId = $userId;
		$photoOwnerId = $_POST['photoOwnerId'];

		//添加评论
		$result = insertSql('photoComments','comment_txt,commenter_id,photoOwner_id,photo_id,comment_time',"'$postText','$commenterId','$photoOwnerId','$photoId','$commentTime'");
		if($result['state'] == 1){
			echo json_encode(array('state'=>1,'msg'=>'评论成功.'));
		}
		else{
			echo json_encode(array('state'=>0,'msg'=>'评论失败.'));
		}
		
		return false;
	}

?>	