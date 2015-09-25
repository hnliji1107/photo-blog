<?php
	require('public.php');
	
	if (!empty($_FILES)) {
		$tempFile = $_FILES['Filedata']['tmp_name'];
		$targetPath = $_SERVER['DOCUMENT_ROOT'].$_REQUEST['folder'].'/';
		$targetFile =  str_replace('//','/',$targetPath).mktime().'-'.$_FILES['Filedata']['name'];
		
		$fileTypes  = str_replace('*.','',$_REQUEST['fileext']);
		$fileTypes  = str_replace(';','|',$fileTypes);
		$typesArray = split('\|',$fileTypes);
		$fileParts  = pathinfo($_FILES['Filedata']['name']);
		
		if (in_array(strtolower($fileParts['extension']),$typesArray)) {
			if(!is_dir($targetPath)){
				mkdir(str_replace('//','/',$targetPath));
			}
			
			if(!move_uploaded_file($tempFile,iconv('utf-8','gb2312',$targetFile))){
				echo json_encode(array('state'=>0,'msg'=>'上传失败'));
			}
			else{
				$absPath = str_replace('//','/',$targetPath);
				$imgName = str_replace($absPath,'',$targetFile);

				echo json_encode(array('state'=>1,'msg'=>$imgName));
			}
			
		}
		else {
			echo json_encode(array('state'=>0,'msg'=>'无效的文件类型'));
		}
		return false;
	}


	//保存上传图片到数据库中
	if(!empty($_POST['act']) && $_POST['act'] == 'save' && !empty($_POST['fileNameArr']) && !empty($_POST['fileSizeArr']) && !empty($_POST['album_id'])){
		$fileNameArr = $_POST['fileNameArr'];
		$fileSizeArr = $_POST['fileSizeArr'];
		$album_id = $_POST['album_id'];
		$upload_time = date('Y-m-d H:i:s');
		$uploadError = false;
		$uploadErrorFile = array();
		
		for($i=0; $i<count($fileNameArr); $i++){
			$result = insertSql('photos','photo_name,photo_size,album_id,user_id,upload_time',"'$fileNameArr[$i]','$fileSizeArr[$i]','$album_id','$userId','$upload_time'");
			if($result['state'] == 0){
				$uploadError = true;
				$uploadErrorFile[] = $fileNameArr[$i];
			}
		}
		
		if($uploadError){
			$tip = '您有'.count($uploadErrorFile).'张图片没有上传成功，分别是、';
			foreach($uploadErrorFile as $value){
				$tip .= '、'.$value;
			}
			echo json_encode(array('state'=>0,'msg'=>$tip));
		}
		else{
			echo json_encode(array('state'=>1,'msg'=>'恭喜,全部图片上传成功'));
		}

		return false;
    }

    //清空列表时删除文件夹中图片
    if(!empty($_POST['act']) && $_POST['act'] == 'remove' && !empty($_POST['fileNameArr'])){
    	$fileNameArr = $_POST['fileNameArr'];
    	foreach($fileNameArr as $val){
    		@unlink(dirname(__FILE__).'\\tmp\\'.iconv('utf-8','gb2312',$val));
    	}
    	echo json_encode(array('state'=>1,'msg'=>'清空列表成功'));
    	
    	return false;
    }
    
			
    $result = selectSql('albums','album_id,album_name','user_id='.$userId);
    $albumInfoArr = array();
    while($rows = @mysql_fetch_assoc($result['msg'])){
    	$albumInfoArr[] = array(
    		'name' => $rows['album_name'],
    		'id' => $rows['album_id']
    	);
    }
    $smarty->assign('albumInfoArr',$albumInfoArr);

    if(!empty($_GET['albumId'])){
    	$smarty->assign('uploadToSome',true);
    }

	if(isset($userId)){
	    $smarty->assign('userId',$userId);
		$smarty->assign('userName',$userName);
		$smarty->assign('cssFileName','upload');
		$smarty->display('upload.tpl');
	}
	
?>	