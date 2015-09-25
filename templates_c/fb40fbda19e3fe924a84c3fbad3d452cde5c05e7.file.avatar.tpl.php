<?php /* Smarty version Smarty 3.1-RC1, created on 2012-04-27 10:59:08
         compiled from ".\templates\avatar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177194f99fff8897ab1-63311167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb40fbda19e3fe924a84c3fbad3d452cde5c05e7' => 
    array (
      0 => '.\\templates\\avatar.tpl',
      1 => 1335495477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177194f99fff8897ab1-63311167',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f99fff891719',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f99fff891719')) {function content_4f99fff891719($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="wrapper" class="clearfix">
		<!-- Start第一层 -->
		<div class="top">
			<div class="selfInfor clearfix">
				<a href="#"><img src="images/avatar.gif" alt="你的头像" /></a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;"><span>我的档案</span> / <span class="editTip">修改头像</span></h1>
				</div>
			</div>
		</div>
		<!-- End第一层 -->
		<div class="bottom block clearfix">
			<div id="uploadAvatar">
				<h2>上传新头像：</h2>
				<input type="file" id="newAvatar" class="newAvatar" />
				<p class="txt">支持jpg, gif, png格式的图片</p>
				<p><a href="javascript:;" class="btn uploadAvatar">上传头像</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
		</div>
		
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>