<?php
	require('public.php');
	
	$nowUserId = $_GET['userId'] == ''? $userId : $_GET['userId'];

	if(!empty($nowUserId)){
		$photoInfoArr = array();
		$albumInfoArr = array();
		$result = selectSql('albums','album_id,album_name,album_cover','user_id='.$nowUserId);
		if($result['state'] == 1){
			while($rows = mysql_fetch_assoc($result['msg'])){
				$albumId = $rows['album_id'];
				//读取所有相册信息
				$albumInfoArr[] = array(
					'id' => $albumId,
					'name' => $rows['album_name'],
					'photoNum' => getPhotoNum($albumId),
					'cover' => $rows['album_cover'] == ''? getAlbumCover($albumId,$defaultAlbumCover,$uploadImgPath) : $uploadImgPath.$rows['album_cover']
				);

				$subResult = selectSql('photos','photo_id,photo_name,edit_name,photo_desc,upload_time','album_id='.$albumId);
				if($subResult['state'] == 1){
					while($subRows = mysql_fetch_assoc($subResult['msg'])){
						$srcFile = iconv('utf-8','gb2312',$uploadImgPath.$subRows['photo_name']);
				    	$dstFile = iconv('utf-8','gb2312',$thumImgPath.'240_'.$subRows['photo_name']);
				    	//生成缩略图
				    	thumbnails($srcFile,$dstFile,240,'');

				    	//读取所有照片信息
						$photoInfoArr[] = array(
							'id' => $subRows['photo_id'],
							'path' => iconv('gb2312','utf-8',$dstFile),
							'name' => $subRows['edit_name'] == ''? $subRows['photo_name'] : $subRows['edit_name'],
							'description' => $subRows['photo_desc'],
							'uploadTime' => $subRows['upload_time']
						);
					}
				}
			}
		}

		if($nowUserId == $userId){
			$smarty->assign('isAuthor',true);
		}

		//读取相册的拥有者
		$result = selectSql('users','user_name,user_avatar','user_id='.$nowUserId);
		if($result['state'] == 1){
			$rows = mysql_fetch_assoc($result['msg']);
			$smarty->assign('authorName',$rows['user_name']);
			$smarty->assign('authorAvatar',$rows['user_avatar'] == ''? $defaultAvatar : $avatarPath.$rows['user_avatar']);
		}

		$smarty->assign('authorId',$nowUserId);
		$smarty->assign('albumInfoArr',$albumInfoArr);
		$smarty->assign('photoInfoArr',$photoInfoArr);
		$smarty->assign('userId',$userId);
		$smarty->assign('userName',$userName);
		$smarty->assign('cssFileName','myPhotos');
		$smarty->display('myPhotos.tpl');
	}
?>