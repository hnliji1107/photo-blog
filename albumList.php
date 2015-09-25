<?php
	require('public.php');
	
	$nowUserId = $_GET['userId'] == ''? $userId : $_GET['userId'];

	if(!empty($nowUserId)){

		//获取相册信息
		$result = selectSql('albums','album_id,album_name,album_cover','user_id='.$nowUserId);
		if($result['state'] == 1){
			$albumInfoArr = array();
			while($rows = mysql_fetch_assoc($result['msg'])){
				$srcFile = $rows['album_cover'] == ''? getAlbumCover($rows['album_id'],$defaultAlbumCover,$uploadImgPath) : $uploadImgPath.$rows['album_cover'];
				$dstFile = $rows['album_cover'] == ''? getAlbumCover($rows['album_id'],$defaultAlbumCover,$uploadImgPath) : $thumImgPath.'75_75_'.$rows['album_cover'];
				thumbnails(iconv('utf-8','gb2312',$srcFile),iconv('utf-8','gb2312',$dstFile),75,75);

				$albumInfoArr[] = array(
					'id' => $rows['album_id'],
					'name' => $rows['album_name'],
					'cover' => $dstFile,
					'photoNum' => getPhotoNum($rows['album_id'])
				);
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
		$smarty->assign('userId',$userId);
		$smarty->assign('userName',$userName);
		$smarty->assign('albumInfoArr',$albumInfoArr);
		$smarty->assign('cssFileName','albumList');
		$smarty->display('albumList.tpl');
	}

?>	