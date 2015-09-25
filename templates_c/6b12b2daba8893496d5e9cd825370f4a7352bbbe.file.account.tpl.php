<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-02 14:53:43
         compiled from ".\templates\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56174f9545aa37b449-81108273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b12b2daba8893496d5e9cd825370f4a7352bbbe' => 
    array (
      0 => '.\\templates\\account.tpl',
      1 => 1335700212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56174f9545aa37b449-81108273',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f9545aa42cb6',
  'variables' => 
  array (
    'authorId' => 0,
    'userInfoArr' => 0,
    'isAuthor' => 0,
    'authorName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9545aa42cb6')) {function content_4f9545aa42cb6($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="wrapper" class="clearfix">
		<!-- Start第一层 -->
		<div class="top">
			<div class="selfInfor clearfix">
				<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['userInfoArr']->value['avatar'];?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
" width="48" height="48" /></a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;"><?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>我<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['authorName']->value;?>
<?php }?>的档案</h1>
				</div>
			</div>
		</div>
		<!-- End第一层 -->

		<!-- Start第二层 -->
		<div class="bottom">
			<div class="block">
				<table class="accountEdit" cellspacing="0">
					<tr>
						<th class="accountLeft"><h2>个人头像</h2></th>
						<td class="accountMiddle"><img src="<?php echo $_smarty_tpl->tpl_vars['userInfoArr']->value['avatar'];?>
" alt="头像" width="48" height="48" /></td>
						<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
						<td class="accountRight" align="center"><a href="editInfo.php?act=avatar">修改</a></td>
						<?php }?>
					</tr>
					<tr>
						<th class="accountLeft"><h2>昵称</h2></th>
						<td class="accountMiddle"><?php echo $_smarty_tpl->tpl_vars['userInfoArr']->value['nickName'];?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
						<td class="accountRight" align="center"><a href="editInfo.php?act=nickName">修改</a></td>
						<?php }?>
					</tr>
					<tr>
						<th class="accountLeft"><h2>性别</h2></th>
						<td class="accountMiddle"><?php echo $_smarty_tpl->tpl_vars['userInfoArr']->value['sex'];?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
						<td class="accountRight" align="center"><a href="editInfo.php?act=sex">修改</a></td>
						<?php }?>
					</tr>
					<tr>
						<th class="accountLeft"><h2>电子邮箱</h2></th>
						<td class="accountMiddle"><?php echo $_smarty_tpl->tpl_vars['userInfoArr']->value['email'];?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
						<td class="accountRight" align="center"><a href="editInfo.php?act=email">修改</a></td>
						<?php }?>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
					<tr>
						<th class="accountLeft"><h2>密码</h2></th>
						<td class="accountMiddle"><input type="password" value="<?php echo $_smarty_tpl->tpl_vars['userInfoArr']->value['password'];?>
" disabled="disabled" /></td>
						<td class="accountRight" align="center"><a href="editInfo.php?act=password">修改</a></td>
					</tr>
					<?php }?>
					<tr>
						<th class="accountLeft accountLast"><h2>自我介绍</h2></th>
						<td class="accountMiddle accountLast"><?php echo $_smarty_tpl->tpl_vars['userInfoArr']->value['selfIntro'];?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
						<td class="accountRight accountLast" align="center"><a href="editInfo.php?act=selfintro">修改</a></td>
						<?php }?>
					</tr>
					
				</table>
			</div>
		</div>
		<!-- End第二层 -->
	</div>
</div>
<script src="js/account.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>