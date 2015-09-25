<?php
	require('public.php');
	require('unLoginTip.php');
	
	if(!empty($_POST['nameVal'])){
		$album_name = $_POST['nameVal'];
		$album_desc = $_POST['descVal'];
		$create_time = date('Y-m-d H:i:s');

		// $result = selectSql('albums','album_name','user_id='.$userId);

		// $albumNameArr = array();
		// while($row = mysql_fetch_assoc($result['msg'])){
		// 	$albumNameArr[] = $row['album_name'];
		// }

		// if(in_array($album_name,$albumNameArr)){
		// 	echo json_encode(array('state'=>0,'msg'=>'该相册已存在.'));
		// }
		// else{
			$result = insertSql('albums','album_name,album_desc,user_id,create_time',"'$album_name','$album_desc','$userId','$create_time'");
			if($result['state'] === 1){
				echo json_encode(array('state'=>1,'msg'=>'相册创建成功.'));
			}
			else{
				echo json_encode(array('state'=>0,'msg'=>'相册创建失败.'));
			}
		// }

		return false;
	}

	$smarty->assign('userId',$userId);
	$smarty->assign('userName',$userName);
	$smarty->assign('cssFileName','albumCreate');
	$smarty->display('albumCreate.tpl');
?>	