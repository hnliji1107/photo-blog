<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-05 20:12:20
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156814f954460ea6aa5-96902469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1336219861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156814f954460ea6aa5-96902469',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f954460ee8f7',
  'variables' => 
  array (
    'cssFileName' => 0,
    'userId' => 0,
    'userName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f954460ee8f7')) {function content_4f954460ee8f7($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/<?php echo $_smarty_tpl->tpl_vars['cssFileName']->value;?>
.css" rel="stylesheet" type="text/css" />
<link type="image/x-icon" href="images/favicon.ico" rel="shortcut icon" />
<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="js/avatarDialog.js" type="text/javascript"></script>
</head>
<body>
<div id="header">
	<div class="blockNav clearfix">
		<ul id="nav" class="clearfix">
			<li><a href="index.php">首页</a></li>
			<?php if ($_smarty_tpl->tpl_vars['userId']->value){?>
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
			<?php }?>
		</ul>

		<ul class="loginTip clearfix">
			<?php if ($_smarty_tpl->tpl_vars['userId']->value){?>
			<li><a href="javascript:;">欢迎您，<?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</a></li>
			<li class="exit"><a href="loginOut.php" style="color:#000;">退出</a></li>
			<?php }else{ ?>
			<li class="spacing"><a href="login.php">登陆</a></li>
			<li class="exit"><a href="regist.php">注册</a></li>
			<?php }?>
		</ul>
	</div>
</div>
<?php }} ?>