<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-03 09:23:08
         compiled from ".\templates\editInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125474f9a114f979c49-37935594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1967a679e13d8f6675392ff3dfc351d0d8918217' => 
    array (
      0 => '.\\templates\\editInfo.tpl',
      1 => 1335515406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125474f9a114f979c49-37935594',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f9a114fa2afb',
  'variables' => 
  array (
    'act' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9a114fa2afb')) {function content_4f9a114fa2afb($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="wrapper" class="clearfix">
		<!-- Start第一层 -->
		<div class="top">
			<div class="selfInfor clearfix">
				<a href="#"><img src="images/avatar.gif" alt="你的头像" /></a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;"><span>我的档案</span> / <span class="editTip">修改<?php if ($_smarty_tpl->tpl_vars['act']->value=='avatar'){?>头像<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='nickName'){?>昵称<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='sex'){?>性别<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='email'){?>邮箱<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='password'){?>密码<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='selfintro'){?>自我介绍<?php }?></span></h1>
				</div>
			</div>
		</div>
		<!-- End第一层 -->
		<div class="bottom block clearfix">
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='avatar'){?>
			<form action="editInfo.php?act=avatar" enctype="multipart/form-data" method="POST">
			<div id="nickName">
				<h2>上传新头像：</h2>
				<input type="file" name="newAvatar" id="newAvatar" class="newAvatar" />
				<p class="txt">支持jpg, gif, png格式的图片</p>
				<p><input type="submit" value="保存修改" class="btn nickName saveAvartar" /></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			</form>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='nickName'){?>
			<div id="nickName">
				<h2>输入新的昵称:</h2>
				<input type="text" class="newName" />
				<p><a href="javascript:;" class="btn nickName saveNickName">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='sex'){?>
			<div id="nickName">
				<h2>选择性别:</h2>
				<p class="sexOpt">
					<label><input type="radio" name="sex" value="男" />男</label>
					<label><input type="radio" name="sex" value="女" />女</label>
				</p>
				<p><a href="javascript:;" class="btn nickName saveSex">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='email'){?>
			<div id="nickName">
				<h2>输入新的邮箱:</h2>
				<input type="text" class="newName" />
				<p><a href="javascript:;" class="btn nickName saveEmail">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='password'){?>
			<div id="nickName">
				<h2>输入新密码:</h2>
				<input type="password" class="newName" />
				<p><a href="javascript:;" class="btn nickName savePassword">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='selfintro'){?>
			<div id="nickName">
				<h2>自我介绍:</h2>
				<textarea class="newName textareaStyle"></textarea>
				<p><a href="javascript:;" class="btn nickName saveSelfIntro">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<?php }?>
		</div>
		
	</div>
</div>

<script src="js/editInfo.js" type="text/javascript"></script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>