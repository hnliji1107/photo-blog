<?php /* Smarty version Smarty 3.1-RC1, created on 2012-04-27 11:20:05
         compiled from ".\templates\nickName.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227714f9788cd25d742-41870628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07e26d9addf3b18a0f986193ca0a6a819332fcb3' => 
    array (
      0 => '.\\templates\\nickName.tpl',
      1 => 1335496797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227714f9788cd25d742-41870628',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f9788cd2eccf',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9788cd2eccf')) {function content_4f9788cd2eccf($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="wrapper" class="clearfix">
		<!-- Start第一层 -->
		<div class="top">
			<div class="selfInfor clearfix">
				<a href="#"><img src="images/avatar.gif" alt="你的头像" /></a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;"><span>我的档案</span> / <span class="editTip">修改昵称</span></h1>
				</div>
			</div>
		</div>
		<!-- End第一层 -->
		<div class="bottom block clearfix">
			<div id="nickName">
				<h2>上传/修改头像：</h2>
				<input type="file" id="newAvatar" class="newAvatar" />
				<p class="txt">支持jpg, gif, png格式的图片</p>
				<p><a href="javascript:;" class="btn nickName">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<div id="nickName">
				<h2>输入新的昵称:</h2>
				<input type="tetx" class="newName" />
				<p><a href="javascript:;" class="btn nickName">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<div id="nickName">
				<h2>选择性别:</h2>
				<input type="tetx" class="newName" />
				<p><a href="javascript:;" class="btn nickName">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<div id="nickName">
				<h2>输入新的邮箱:</h2>
				<input type="tetx" class="newName" />
				<p><a href="javascript:;" class="btn nickName">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<div id="nickName">
				<h2>输入新的昵称:</h2>
				<input type="tetx" class="newName" />
				<p><a href="javascript:;" class="btn nickName">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<div id="nickName">
				<h2>输入原密码:</h2>
				<input type="tetx" class="newName" />
				<h2>输入新密码:</h2>
				<input type="tetx" class="newName" />
				<p><a href="javascript:;" class="btn nickName">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<div id="nickName">
				<h2>填写/修改自我介绍:</h2>
				<textarea class="newName"></textarea>
				<p><a href="javascript:;" class="btn nickName">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
		</div>
		
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>