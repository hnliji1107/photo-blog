<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-05 18:47:29
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301664f9545aa4cd4b7-24913216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1336214825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301664f9545aa4cd4b7-24913216',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f9545aa56dfb',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9545aa56dfb')) {function content_4f9545aa56dfb($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<h1 id="titleName" class="titleBar" style="margin-bottom:0;">请从此处登陆</h1>

	<div id="wrapper" class="clearfix" style="padding-top:0;">
		<div class="f_r registToolbar">
			<table>
				<tr>
					<td class="name">用户名：</td>
					<td><input type="text" size="30" id="userName" name="userName" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="textDescription"><p>输入一个你已拥有的邮件地址或者用户名.格式如name@example.com</p></td>
				</tr>

				<tr>
					<td class="name">密码：</td>
					<td><input type="password" size="30" id="password" name="password" maxlength="16" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="textDescription"><p>6到16个字符，不区分大小写。</p></td>
				</tr>

				<!-- <tr>
					<td>&nbsp;</td>
					<td class="clearfix">
						<input type="checkbox" name="autoLogin" class="autoLogin" />
						<p class="autoLoginTxt">下次自动登陆</p>
						<a href="#" target="_blank" class="fogot">忘记密码？</a>
					</td>
				</tr> -->

			</table>

			<p class="clearfix btnArea">
				<a href="javascript:;" class="btn btnLeft">登陆</a>
				<a href="regist.php" class="btn btnRight">注册</a>
			</p>

		</div>
	</div>
</div>

<script src="js/login.js" type="text/javascript"></script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>