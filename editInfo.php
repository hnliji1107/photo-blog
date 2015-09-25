<?php
	require('public.php');
	require('unLoginTip.php');

	function editText($filed,$value,$userId){
		$result = updateSql('users',"$filed='$value'",'user_id='.$userId);
		if($result['state'] == 1){
			echo json_encode(array('state'=>1,'msg'=>'保存成功'));
		}
		else{
			echo json_encode(array('state'=>0,'msg'=>'保存失败'));
		}
	}

	if(!empty($_GET['act'])){
		$act = $_GET['act'];

		//上传头像
		if(!empty($_FILES)){
			$tempFile = $_FILES['newAvatar']['tmp_name'];
			$saveName = mktime().'-'.$_FILES['newAvatar']['name'];
			$targetFile = $avatarPath.$saveName;

			if(!move_uploaded_file($tempFile,iconv('utf-8','gb2312',$targetFile))){
				echo "<script>alert('保存失败');</script>";
			}
			else{
				//读取出原来头像，删除
				$result = selectSql('users','user_avatar','user_id='.$userId);
				if($result['state'] == 1){
					$rows = mysql_fetch_assoc($result['msg']);
					@unlink(dirname(__FILE__).'\\avatar\\'.iconv('utf-8','gb2312',$rows['user_avatar']));
				}

				//保存数据到数据库
				$result = updateSql('users',"user_avatar='$saveName'",'user_id='.$userId);
				if($result['state'] == 1){
					echo "<script>alert('保存成功');</script>";
				}
				else{
					echo "<script>alert('保存失败');</script>";
				}
			}
		}
		
		$smarty->assign('act',$act);
		$smarty->assign('userId',$userId);
		$smarty->assign('userName',$userName);
		$smarty->assign('cssFileName','editInfo');
		$smarty->display('editInfo.tpl');
	}

	//修改昵称
	if(!empty($_POST['nickName'])){
		$nickName = $_POST['nickName'];
		editText('user_nickName',$nickName,$userId);
		return false;
	}
	//修改性别
	if(!empty($_POST['sex'])){
		$sex = $_POST['sex'];
		editText('user_sex',$sex,$userId);
		return false;
	}
	//修改邮箱
	if(!empty($_POST['email'])){
		$sex = $_POST['email'];
		editText('email',$sex,$userId);
		return false;
	}
	//修改密码
	if(!empty($_POST['password'])){
		$password = md5($_POST['password']);
		editText('user_password',$password,$userId);
		return false;
	}
	//修改自我简介
	if(!empty($_POST['selfIntro'])){
		$selfIntro = $_POST['selfIntro'];
		editText('user_selfIntro',$selfIntro,$userId);
		return false;
	}

?>