<--{include file="header.tpl"}-->
<div id="content">
	<div id="wrapper" class="clearfix">
		<!-- Start第一层 -->
		<div class="top">
			<div class="selfInfor clearfix">
				<a href="#"><img src="images/avatar.gif" alt="你的头像" /></a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;"><span>我的档案</span> / <span class="editTip">修改<--{if $act == 'avatar'}-->头像<--{else if $act == 'nickName'}-->昵称<--{else if $act == 'sex'}-->性别<--{else if $act == 'email'}-->邮箱<--{else if $act == 'password'}-->密码<--{else if $act == 'selfintro'}-->自我介绍<--{/if}--></span></h1>
				</div>
			</div>
		</div>
		<!-- End第一层 -->
		<div class="bottom block clearfix">
			<--{if $act == 'avatar'}-->
			<form action="editInfo.php?act=avatar" enctype="multipart/form-data" method="POST">
			<div id="nickName">
				<h2>上传新头像：</h2>
				<input type="file" name="newAvatar" id="newAvatar" class="newAvatar" />
				<p class="txt">支持jpg, gif, png格式的图片</p>
				<p><input type="submit" value="保存修改" class="btn nickName saveAvartar" /></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			</form>
			<--{/if}-->
			<--{if $act == 'nickName'}-->
			<div id="nickName">
				<h2>输入新的昵称:</h2>
				<input type="text" class="newName" />
				<p><a href="javascript:;" class="btn nickName saveNickName">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<--{/if}-->
			<--{if $act == 'sex'}-->
			<div id="nickName">
				<h2>选择性别:</h2>
				<p class="sexOpt">
					<label><input type="radio" name="sex" value="男" />男</label>
					<label><input type="radio" name="sex" value="女" />女</label>
				</p>
				<p><a href="javascript:;" class="btn nickName saveSex">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<--{/if}-->
			<--{if $act == 'email'}-->
			<div id="nickName">
				<h2>输入新的邮箱:</h2>
				<input type="text" class="newName" />
				<p><a href="javascript:;" class="btn nickName saveEmail">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<--{/if}-->
			<--{if $act == 'password'}-->
			<div id="nickName">
				<h2>输入新密码:</h2>
				<input type="password" class="newName" />
				<p><a href="javascript:;" class="btn nickName savePassword">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<--{/if}-->
			<--{if $act == 'selfintro'}-->
			<div id="nickName">
				<h2>自我介绍:</h2>
				<textarea class="newName textareaStyle"></textarea>
				<p><a href="javascript:;" class="btn nickName saveSelfIntro">保存修改</a></p>
				<p class="txt">或者<a href="account.php">返回您的档案页面</a></p>
			</div>
			<--{/if}-->
		</div>
		
	</div>
</div>

<script src="js/editInfo.js" type="text/javascript"></script>

<--{include file="footer.tpl"}-->