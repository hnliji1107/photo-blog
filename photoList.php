<?php
	require('public.php');

	$albumId = $_GET['albumId'];
	$result = selectSql('albums','album_cover','album_id='.$albumId);
	if($result['state'] == 1){
		$rows = mysql_fetch_assoc($result['msg']);
		$albumCover = $rows['album_cover'] == ''? getAlbumCover($albumId,$defaultAlbumCover,$uploadImgPath) : $uploadImgPath.'75_75_'.$rows['album_cover'];
		$srcFile = $albumCover;
		$dstFile = str_replace('tmp','smTmp',$srcFile);
		thumbnails($srcFile,$dstFile,75,75);
		$albumCover = $dstFile;
	}

	if(!empty($albumId) && !empty($albumCover)){
		//输出相册名
		$result = selectSql('albums','album_name,album_desc,user_id','album_id='.$albumId);
		if($result['state'] == 1){
			$rows = mysql_fetch_assoc($result['msg']);
			$smarty->assign('albumName',$rows['album_name']);
			$smarty->assign('albumDesc',$rows['album_desc']);

			$authorId = $rows['user_id'];
			$smarty->assign('authorId',$authorId);

			if($authorId == $userId){
				$smarty->assign('isAuthor',true);
			}

			$result = selectSql('users','user_name,user_avatar','user_id='.$authorId);
			if($result['state'] == 1){
				$rows = mysql_fetch_assoc($result['msg']);
				$smarty->assign('authorName',$rows['user_name']);
				$smarty->assign('authorAvatar',$rows['user_avatar'] == ''? $defaultAvatar : $avatarPath.$rows['user_avatar']);
			}
			
		}

		//输出照片信息
		if(!empty($albumId)){
			$result = selectSql('photos','photo_id,photo_name,photo_desc','album_id='.$albumId);
			if($result['state'] === 1){
				$photoInfoArr = array();
				while($rows = mysql_fetch_assoc($result['msg'])){
					$pattern = "/(.+).(jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF)$/";
					preg_match($pattern,$rows['photo_name'],$matches);
					
					$photoInfoArr[] = array(
						'id' => $rows['photo_id'],
						'name' => $matches[1],
						'path' => $thumImgPath.'200_'.$matches[0],
						'description' => $rows['photo_desc'],
						'photoComments' => getComments($rows['photo_id'],$defaultAvatar,$avatarPath)
					);
					//新上传的图片生成缩略图
		
			    	$srcFile = iconv('utf-8','gb2312',$uploadImgPath.$matches[0]);
			    	$dstFile = iconv('utf-8','gb2312',$thumImgPath.'200_'.$matches[0]);
			    	thumbnails($srcFile,$dstFile,200,'');
				}
			}
			$smarty->assign('photoInfoArr',$photoInfoArr);
		}

		$smarty->assign('userId',$userId);
		$smarty->assign('userName',$userName);
		$smarty->assign('albumId',$albumId);
		$smarty->assign('albumCover',$albumCover);
		$smarty->assign('cssFileName','photoList');
		$smarty->display('photoList.tpl');
	}

	if(!empty($_POST['albumId']) && !empty($_POST['act']) && $_POST['act'] == 'delAlbum'){
		$albumId = $_POST['albumId'];
		$result = selectSql('photos','photo_id','album_id='.$albumId);
		if($result['state'] == 1){
			//删除文件夹里的图片
			while($rows = mysql_fetch_array($result['msg'])){
				deletePhoto($rows['photo_id']);
			}
		}

		//删除照片数据表中数据
		$result = deleteSql('photos','album_id='.$albumId);
		if($result['state'] == 0){
			echo json_encode(array('state'=>0,'msg'=>'删除失败'));
			return false;
		}
		//删除相册数据表中数据
		$result = deleteSql('albums','album_id='.$albumId);
		if($result['state'] == 0){
			echo json_encode(array('state'=>0,'msg'=>'删除失败'));
			return false;
		}

		echo json_encode(array('state'=>1,'msg'=>'删除成功'));

		return false;
	}
?>	