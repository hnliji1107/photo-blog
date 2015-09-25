<--{include file="header.tpl"}-->
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

<--{include file="footer.tpl"}-->