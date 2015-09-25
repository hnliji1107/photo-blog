<?php
	require('public.php');

	$nowUserId = $_GET['userId'] == ''? $userId : $_GET['userId'];

	if(!empty($nowUserId)){
		//读取用户资料
		$userInfoArr = array();

		$result = selectSql('users','user_name,user_avatar,user_nickName,user_sex,email,user_password,user_selfIntro','user_id='.$nowUserId);
		if($result['state'] == 1){
			$rows = mysql_fetch_assoc($result['msg']);
			$userInfoArr = array(
				'avatar' => $rows['user_avatar'] == ''? $defaultAvatar : $avatarPath.$rows['user_avatar'],
				'nickName' => $rows['user_nickName'] == ''? '暂无' : $rows['user_nickName'],
				'sex' => $rows['user_sex'] == ''? '保密' : $rows['user_sex'],
				'email' => $rows['email'] == ''? '暂无' : $rows['email'],
				'password' => $rows['user_password'],
				'selfIntro' => $rows['user_selfIntro'] == ''? '暂无' : $rows['user_selfIntro']
			);
			
			$smarty->assign('authorId',$nowUserId);
			$smarty->assign('authorName',$rows['user_name']);
		}

		if($nowUserId == $userId){
			$smarty->assign('isAuthor',true);
		}

		$smarty->assign('userInfoArr',$userInfoArr);
		$smarty->assign('userId',$userId);
		$smarty->assign('userName',$userName);
		$smarty->assign('cssFileName','account');
		$smarty->display('account.tpl');
	}
?>	