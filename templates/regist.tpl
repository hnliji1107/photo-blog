<--{include file="header.tpl"}-->
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
<--{include file="footer.tpl"}-->