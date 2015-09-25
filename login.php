<?php
	require('public.php');/*引用smarty模板类，已提取放到以public.php的文件中*/

	if(!empty($_POST['userName']) && !empty($_POST['password'])){
		$userName = $_POST['userName'];
		$password = md5($_POST['password']);

		$result = selectSql('users','user_id',"user_name='$userName' AND user_password='$password'");

		if($result['state'] == 1){
			if(mysql_num_rows($result['msg']) == 1){
				$rows = mysql_fetch_assoc($result['msg']);
				$_SESSION['userName'] = $userName;
				$_SESSION['userId'] = $rows['user_id'];
				echo json_encode(array('state'=>1,'msg'=>'恭喜，登录成功.'));
			}
			else{
				echo json_encode(array('state'=>0,'msg'=>'抱歉，登录失败.'));
			}
		}
		else{
			echo json_encode(array('state'=>0,'msg'=>'抱歉，登录失败.'));
		}

		return false;
	}

	$smarty->assign('cssFileName','login');
	$smarty->display('login.tpl');
?>	