<?php
	require('libs/Smarty.class.php');
	$smarty = new Smarty();
	session_start();

	//生成缩略图
	function thumbnails($srcFile,$dstFile,$maxWidth,$maxHeight){
		ini_set('memory_limit', '-1'); //没有最大内存限制
		set_time_limit(0); //设置无超时

		$pattern = "/(.+).(jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF)$/";
		preg_match($pattern,$srcFile,$matches);
		$type = strtolower($matches[2]);
		$type = ($type=='jpg')? 'jpeg' : $type;
		  

		list($srcPicW, $srcPicH) = @getimagesize($srcFile);

		if(!empty($maxHeight)){
			// 缩略图尺寸(按固定大小)
			if($srcPicW > $maxWidth){
				$dstPicW = $maxWidth;
			}
			else{
				$dstPicW = $srcPicW;
			}
			if($srcPicH > $maxHeight){
				$dstPicH = $maxHeight;
			}
			else{
				$dstPicH = $srcPicH;
			}
		}
		else{
			// 缩略图尺寸(按比例)
			if($srcPicW > $maxWidth){
				$percent = $maxWidth/$srcPicW;
				$dstPicW = $srcPicW * $percent;
				$dstPicH = $srcPicH * $percent;
			}
			else{
				$dstPicW = $srcPicW;
				$dstPicH = $srcPicH;
			}
		}
		
		  
		//缩略图在画布中显示的坐标  
		$dstPicX = 0;  
		$dstPicY = 0;  
		  
		//原图裁切的坐标  
		$srcPicX = 0;  
		$srcPicY = 0;   
		
		// 加载图像
		switch($type){
			case 'jpeg': {
				$srcIm = @imagecreatefromjpeg($srcFile);
			}
			break;
			case 'gif': {
				$srcIm = @imagecreatefromgif($srcFile);
			}
			break;
			case 'png': {
				$srcIm = @imagecreatefrompng($srcFile);
			}
		}
		  
		$dstIm = @imagecreatetruecolor($dstPicW, $dstPicH);
		  
		// 调整大小  
		@imagecopyresized($dstIm,$srcIm,$dstPicX,$dstPicY,$srcPicX,$srcPicY,$dstPicW,$dstPicH,$srcPicW,$srcPicH);
		  
		//另存为自定义的文件
		switch($type){
			case 'jpeg': {
				@imagejpeg($dstIm,$dstFile,100);
			}
			break;
			case 'gif': {
				@imagegif($dstIm,$dstFile,100);
			}
			break;
			case 'png': {
				@imagepng($dstIm,$dstFile,9);
			}
		}
		  
		//释放内存  
		@imagedestroy($dstIm);  
		@imagedestroy($srcIm);  
	}

	if(isset($_SESSION['userId'])){
		$userId = $_SESSION['userId'];
	}

	if(isset($_SESSION['userName'])){
		$userName = $_SESSION['userName'];
	}

	//设置数据库信息
	$host = 'localhost';
	$db_user = 'root';
	$db_password = '';
	$db_name = 'photoShare';

	/**连接数据库**/
	$con = mysql_connect($host,$db_user,$db_password);
	if(!$con){
		die('database connect failure!');
	}

	/**选择数据库**/
	mysql_select_db($db_name,$con);
	mysql_query("set names utf8");//设定字符集
	date_default_timezone_set(PRC);//更正8个小时时差

	//读取数据库记录
	function selectSql($table,$fields,$condition){
		if($condition){
			$select = 'SELECT '.$fields.' FROM '.$table.' WHERE '.$condition;
		}
		else{
			$select = 'SELECT '.$fields.' FROM '.$table;
		}
		
		if(!$result = mysql_query($select)){
			return array('state'=>0,'msg'=>mysql_error());
		}
		else{
			return array('state'=>1,'msg'=>$result);
		}
	}

	//插入数据库记录
	function insertSql($table,$fields,$fieldVals){
		$insert = 'INSERT INTO '.$table.' ( '.$fields.' ) VALUES ( '.$fieldVals.' )';

		if(!mysql_query($insert)){
			return array('state'=>0,'msg'=>mysql_error());
		}
		else{
			return array('state'=>1,'msg'=>'INSERT SUCCESS');
		}
	}

	//更新数据库记录
	function updateSql($table,$fieldStr,$condition){
		if($condition){
			$update = 'UPDATE '.$table.' SET '.$fieldStr.' WHERE '.$condition;
		}
		else{
			$update = 'UPDATE '.$table.' SET '.$fieldStr;
		}

		if(!mysql_query($update)){
			return array('state'=>0,'msg'=>mysql_error());
		}
		else{
			return array('state'=>1,'msg'=>'UPDATE SUCCESS');
		}
	}

	//删除数据库记录
	function deleteSql($table,$condition){
		if($condition){
			$delete = 'DELETE FROM '.$table.' WHERE '.$condition;
		}
		else{
			$delete = 'DELETE FROM '.$table;
		}

		if(!mysql_query($delete)){
			return array('state'=>0,'msg'=>mysql_error());
		}
		else{
			return array('state'=>1,'msg'=>'DELETE SUCCESS');
		}
	}

	//上传文件夹路径
	$uploadImgPath = 'tmp/';
	//缩略图文件夹路径
	$thumImgPath = 'smTmp/';
	//头像保存路径
	$avatarPath = 'avatar/';

	//默认相册封面
	$defaultAlbumCover = 'images/default_set_photo.gif';
	//默认头像路径
	$defaultAvatar = $avatarPath.'avatar.gif';

	//获取相册封面
	function getAlbumCover($albumId,$defaultAlbumCover,$uploadImgPath){
		$result = selectSql('photos','photo_name','album_id='.$albumId);
		if($result['state'] == 1){
			if(@mysql_num_rows($result['msg']) == 0){
				return $defaultAlbumCover;
			}
			else{
				$rows = @mysql_fetch_assoc($result['msg']);
				return $uploadImgPath.$rows['photo_name'];
			}
		}
	}

	//获取相册照片数
	function getPhotoNum($albumId){
		$result = selectSql('photos','photo_id','album_id='.$albumId);
		if($result['state'] == 1){
			return mysql_num_rows($result['msg']);
		}
		else{
			return 0;
		}
	}

	//删除文件夹中照片
	function deletePhoto($photoId){
		$result = selectSql('photos','photo_name','photo_id='.$photoId);
		if($result['state'] == 1){
			$rows = mysql_fetch_assoc($result['msg']);
			//删除实际图
			@unlink(dirname(__FILE__).'\\tmp\\'.iconv('utf-8','gb2312',$rows['photo_name']));
			//删除缩略图
			@unlink(dirname(__FILE__).'\\smTmp\\'.iconv('utf-8','gb2312',$rows['photo_name']));
			@unlink(dirname(__FILE__).'\\smTmp\\'.iconv('utf-8','gb2312','200_'.$rows['photo_name']));
			@unlink(dirname(__FILE__).'\\smTmp\\'.iconv('utf-8','gb2312','240_'.$rows['photo_name']));
			@unlink(dirname(__FILE__).'\\smTmp\\'.iconv('utf-8','gb2312','75_75_'.$rows['photo_name']));
			@unlink(dirname(__FILE__).'\\smTmp\\'.iconv('utf-8','gb2312','25_25_'.$rows['photo_name']));
			@unlink(dirname(__FILE__).'\\smTmp\\'.iconv('utf-8','gb2312','100_100_'.$rows['photo_name']));
			@unlink(dirname(__FILE__).'\\smTmp\\'.iconv('utf-8','gb2312','640_'.$rows['photo_name']));
		}
	}

	//读取某张照片的评论
	function getComments($photoId,$defaultAvatar,$avatarPath){
		$resultComment = selectSql('photoComments','comment_txt,comment_time,commenter_id','photo_id='.$photoId);
		if($resultComment['state'] == 1){
			$photoComments = array();

			while($rowsComment = mysql_fetch_assoc($resultComment['msg'])){
				//根据评论者id读取评论者名字
				$commenterId = $rowsComment['commenter_id'];
				$subResultComment = selectSql('users','user_name,user_avatar','user_id='.$commenterId);
				if($subResultComment['state'] == 1){
					$subRowsComment = mysql_fetch_assoc($subResultComment['msg']);
					$commenterName = $subRowsComment['user_name'];
					$commenterAvatar = $subRowsComment['user_avatar'] == ''? $defaultAvatar : $avatarPath.$subRowsComment['user_avatar'];
				}
				
				$photoComments[] = array(
					'commenterId' => $commenterId,
					'text' => $rowsComment['comment_txt'],
					'time' => $rowsComment['comment_time'],
					'commenterName' => $commenterId == $userId? '你' : $commenterName,
					'commenterAvatar' => $commenterAvatar
				);
			}
		}

		return $photoComments;
	}

	//获取用户头像
	function getAvatar($userId,$defaultAvatar,$avatarPath){
		$result = selectSql('users','user_avatar','user_id='.$userId);
		if($result['state'] == 1){
			$rows = mysql_fetch_assoc($result['msg']);
			return $rows['user_avatar'] == ''? $defaultAvatar : $avatarPath.$rows['user_avatar'];
		}
	}
	
?>