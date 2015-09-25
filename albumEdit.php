<?php
	require('public.php');
	require('unLoginTip.php');

	$albumId = $_GET['albumId'];
	$result = selectSql('albums','album_cover','album_id='.$albumId);
	if($result['state'] == 1){
		$rows = mysql_fetch_assoc($result['msg']);
		$srcFile = $rows['album_cover'] == ''? getAlbumCover($albumId,$defaultAlbumCover,$uploadImgPath) : $uploadImgPath.$rows['album_cover'];
		$dstFile = $rows['album_cover'] == ''? getAlbumCover($albumId,$defaultAlbumCover,$uploadImgPath) : $thumImgPath.'240_'.$rows['album_cover'];
		thumbnails(iconv('utf-8','gb2312',$srcFile),iconv('utf-8','gb2312',$dstFile),240,'');
	}

	if(!empty($albumId) && !empty($dstFile)){
		$smarty->assign('albumId',$albumId);
		$smarty->assign('albumCover',$dstFile);

		//读取相册信息
		$result = selectSql('albums','album_name,album_desc','album_id='.$albumId);
		if($result['state'] == 1){
			$rows = mysql_fetch_assoc($result['msg']);
			$smarty->assign('albumName',$rows['album_name']);
			$smarty->assign('albumDesc',$rows['album_desc']);
		}

		//读取相册中相片信息
		$result = selectSql('photos','photo_id,photo_name','album_id='.$albumId);
		$photoInfoArr = array();

		if($result['state'] == 1){
			while($rows = mysql_fetch_assoc($result['msg'])){
				$srcFile = $uploadImgPath.$rows['photo_name'];
				$dstFile = $thumImgPath.'25_25_'.$rows['photo_name'];
				thumbnails(iconv('utf-8','gb2312',$srcFile),iconv('utf-8','gb2312',$dstFile),25,25);

				$photoInfoArr[] = array(
					'id' => $rows['photo_id'],
					'name' => $rows['photo_name'],
					'path' => $dstFile
				);
			}

			$smarty->assign('photoInfoArr',$photoInfoArr);
			$smarty->assign('photoNum',mysql_num_rows($result['msg']));
		}

		$smarty->assign('userId',$userId);
		$smarty->assign('userName',$userName);
		$smarty->assign('cssFileName','albumEdit');
		$smarty->display('albumEdit.tpl');	
	}

	if(isset($_POST['albumName']) && isset($_POST['albumId'])){
		$userId = $_SESSION['userId'];
		$albumId = $_POST['albumId'];
		$albumName = $_POST['albumName'];
		$albumDesc = $_POST['albumDesc'];

		// $result = selectSql('albums','album_name','user_id='.$userId);
		// if($result['state'] == 1){
		// 	$albumNameArr = array();
		// 	while($rows = mysql_fetch_assoc($result['msg'])){
		// 		$albumNameArr[] = $rows['album_name'];
		// 	}

		// 	if(in_array($albumName,$albumNameArr)){
		// 		echo json_encode(array('state'=>0,'msg'=>'该相册名已存在.'));
		// 	}
		// 	else{
				//更新相册信息
				$result = updateSql('albums',"album_name='$albumName',album_desc='$albumDesc'","album_id='$albumId'");

				if($result['state'] == 1){
					echo json_encode(array('state'=>1,'msg'=>'编辑成功.'));
				}
				else{
					echo json_encode(array('state'=>0,'msg'=>'编辑失败.'));
				}
		// 	}
		// }
	}

?>	