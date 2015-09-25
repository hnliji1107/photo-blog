<?php
require('public.php');

set_time_limit(0); //防止下载超时

//附件下载
if (!empty($_GET['photoId'])) {
	$photoId = $_GET['photoId'];
	$result = selectSql('photos','photo_name','photo_id='.$photoId);
	if($result['state'] == 1){
		$rows = mysql_fetch_assoc($result['msg']);
		$photoName = iconv('utf-8','gb2312',$rows['photo_name']);
	}
	
	//下载文件大小
	$physicalpath = dirname(__FILE__).'\\tmp\\'.$photoName; //文件物理位置
	$filesize = filesize($physicalpath);

	
	//下载文件类型
	$pattern = "/.+\.([a-zA-Z]+)$/";
	preg_match_all($pattern,$photoName,$matches);
	
	header("Content-Type: application/force-download/".$matches[1][0]); //强制弹出保存对话框
	header("Pragma: no-cache"); // 缓存
	header("Expires: 0");
	header("Content-Transfer-Encoding: binary"); //发送数据方式
	Header("Content-Length: ".$filesize); //文件大小
	header('Content-Disposition: attachment; filename="'.$photoName.'"'); //文件名
	
	echo file_get_contents($uploadImgPath.$photoName); //下载
	
}
	
?>