<?php
	require('public.php');/*引用smarty模板类，已提取放到以public.php的文件中*/
	
	if(!empty($_POST['userName']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['verificationCode'])){
		$userName = $_POST['userName'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$verificationCode = $_POST['verificationCode'];
		$verificationCode = strtoupper($verificationCode);//把用户输入的验证码转化为大写
		$registTime = date('Y-m-d H:i:s');
		
		$result = selectSql('users','user_name','');

		$userNameArr = array();
		while($row = @mysql_fetch_assoc($result['msg'])){
			$userNameArr[] = $row['user_name'];
		}

		if(in_array($userName,$userNameArr)){
			echo json_encode(array('state'=>0,'msg'=>'该用户名已被占用.'));
		}
		else{
			$saveCode = $_SESSION['checkCode'];
			if($saveCode == $verificationCode){
				$result = insertSql('users','user_name,email,user_password,regist_time',"'$userName','$email','$password','$registTime'");
				if($result['state'] === 1){
					echo json_encode(array('state'=>1,'msg'=>'恭喜，注册成功.'));
					$_SESSION['userName'] = $userName;
					$_SESSION['userId'] = mysql_insert_id();
				}
				else{
					echo json_encode(array('state'=>0,'msg'=>'抱歉，注册失败.'));
				}
			}
			else{
				echo json_encode(array('state'=>0,'msg'=>'验证码输入错误.'));
			}
			
		}

		return false;
	}

	$smarty->assign('cssFileName','style');
	$smarty->display('regist.tpl');
?>	