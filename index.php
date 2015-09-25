<?php
	require('public.php');

	$uresult = selectSql('users','user_id','1=1');
	$photoInfoArr = array();

	if($uresult['state'] == 1){
		while($urows = mysql_fetch_assoc($uresult['msg'])){
			$uuserId = $urows['user_id'];
			//推荐每个用户的5张照片信息
			$result = selectSql('photos','photo_id,photo_name,photo_desc,album_id,upload_time',"user_id='$uuserId' ORDER BY upload_time DESC LIMIT 5");
			if($result['state'] === 1){
				while($rows = mysql_fetch_assoc($result['msg'])){
					$albumId = $rows['album_id'];
					//根据相册id找到用户id
					$subResult = selectSql('albums','user_id','album_id='.$albumId);
					if($subResult['state'] == 1){
						$subRows = mysql_fetch_assoc($subResult['msg']);
						$authorId = $subRows['user_id'];
						//根据用户id找到用户name
						$subSubResult = selectSql('users','user_name,user_avatar','user_id='.$authorId);
						if($subSubResult['state'] == 1){
							$subSubRows = mysql_fetch_assoc($subSubResult['msg']);
							$authorName = $subSubRows['user_name'];
							$authorAvatar = $subSubRows['user_avatar'] == ''? $defaultAvatar : $avatarPath.$subSubRows['user_avatar'];
						}
					}
					

					$pattern = "/(.+).(jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF)$/";
					preg_match($pattern,$rows['photo_name'],$matches);

					$photoInfoArr[] = array(
						'id' => $rows['photo_id'],
						'name' => $matches[1],
						'path' => $thumImgPath.'200_'.$matches[0],
						'description' => $rows['photo_desc'],
						'uploadTime' => $rows['upload_time'],
						'authorName' => $authorName,
						'authorId' => $authorId,
						'authorAvatar' => $authorAvatar,
						'photoComments' => getComments($rows['photo_id'],$defaultAvatar,$avatarPath)
					);
					//新上传的图片生成缩略图
			    	$srcFile = iconv('utf-8','gb2312',$uploadImgPath.$matches[0]);
			    	$dstFile = iconv('utf-8','gb2312',$thumImgPath.'200_'.$matches[0]);
			    	thumbnails($srcFile,$dstFile,200,'');
				}
			}
		}
	}


	$smarty->assign('userId',$userId);
	$smarty->assign('userName',$userName);
	$smarty->assign('photoInfoArr',$photoInfoArr);
	$smarty->assign('cssFileName','style');
	$smarty->display('index.tpl');
?>	