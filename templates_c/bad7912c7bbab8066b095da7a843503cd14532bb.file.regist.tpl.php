<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-05 18:47:24
         compiled from ".\templates\regist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41834f954b8b3dbf15-88928687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bad7912c7bbab8066b095da7a843503cd14532bb' => 
    array (
      0 => '.\\templates\\regist.tpl',
      1 => 1336214772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41834f954b8b3dbf15-88928687',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f954b8b492d8',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f954b8b492d8')) {function content_4f954b8b492d8($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<h1 id="titleName" class="titleBar" style="margin-bottom:0;">欢迎注册</h1>

	<div id="wrapper" class="clearfix" style="padding-top:0;">
		<div class="f_r registToolbar">
			<table>
				<tr>
					<td class="name"><em>*</em>常用邮件地址：</td>
					<td><input type="text" size="30" id="email" name="email" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="textDescription"><p>输入一个你已拥有的邮件地址，以通过验证完成注册。格式如name@example.com</p></td>
				</tr>

				<tr>
					<td class="name"><em>*</em> 用户名：</td>
					<td><input type="text" size="30" id="userName" name="userName" maxlength="16" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="textDescription"><p>6到16个字符，不区分大小写。</p></td>
				</tr>

				<tr>
					<td class="name"><em>*</em> 设置密码：</td>
					<td><input type="password" size="30" id="password" name="password" maxlength="16" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="textDescription"><p>6到16个字符，不区分大小写。</p></td>
				</tr>

				<tr>
					<td class="name"><em>*</em>确认密码：</td>
					<td><input type="password" size="30" id="repassword" name="repassword" /></td>
				</tr>

				<tr>
					<td>&nbsp;</td>
					<td class="textDescription"><p>再次输入你设置的密码。</p></td>
				</tr>

				<tr>
					<td class="name"><em>*</em>验证码：</td>
					<td class="checkCodeTd">
						<span><input type="text" size="30" id="verificationCode" name="verificationCode" /></span>
						<span class="checkCodeImg"><img src="checkCode.php" height="30" width="128" id="refreshVerCode" /></span>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="textDescription"><p>不区分大小写。看不清楚可以<a href="javascript:;" class="refreshVerCode" >换一个</a></p></td>
				</tr>
			</table>

			<p><a href="javascript:;" class="btn regist">立即注册</a></p>

		</div>
	</div>
</div>

<script type="text/javascript" src="js/regist.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>