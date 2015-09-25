<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/<--{$cssFileName}-->.css" rel="stylesheet" type="text/css" />
<link type="image/x-icon" href="images/favicon.ico" rel="shortcut icon" />
<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="js/avatarDialog.js" type="text/javascript"></script>
</head>
<body>
<div id="header">
	<div class="blockNav clearfix">
		<ul id="nav" class="clearfix">
			<li><a href="index.php">首页</a></li>
			<--{if $userId}-->
			<li class="aboutMe">
				<a href="personIndex.php" id="menu">关于我</a>
				<span class="tipIco"></span>
				<ul class="son">
					<li><a href="myPhotos.php">我的照片</a></li>
					<li><a href="albumList.php">我的相册</a></li>
					<li><a href="personIndex.php">我的动态</a></li>
					<li><a href="account.php">我的档案</a></li>
					<li><a href="upload.php">上传照片</a></li>
				</ul>
			</li>
			<li><a href="friend.php">朋友</a></li>
			<li><a href="upload.php">上传</a></li>
			<--{/if}-->
		</ul>

		<ul class="loginTip clearfix">
			<--{if $userId}-->
			<li><a href="javascript:;">欢迎您，<--{$userName}--></a></li>
			<li class="exit"><a href="loginOut.php" style="color:#000;">退出</a></li>
			<--{else}-->
			<li class="spacing"><a href="login.php">登陆</a></li>
			<li class="exit"><a href="regist.php">注册</a></li>
			<--{/if}-->
		</ul>
	</div>
</div>
