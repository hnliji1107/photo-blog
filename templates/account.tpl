<--{include file="header.tpl"}-->
<div id="content">
	<div id="wrapper" class="clearfix">
		<!-- Start第一层 -->
		<div class="top">
			<div class="selfInfor clearfix">
				<a href="myPhotos.php?userId=<--{$authorId}-->"><img src="<--{$userInfoArr.avatar}-->" authorId="<--{$authorId}-->" width="48" height="48" /></a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;"><--{if $isAuthor}-->我<--{else}--><--{$authorName}--><--{/if}-->的档案</h1>
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
						<td class="accountMiddle"><img src="<--{$userInfoArr.avatar}-->" alt="头像" width="48" height="48" /></td>
						<--{if $isAuthor}-->
						<td class="accountRight" align="center"><a href="editInfo.php?act=avatar">修改</a></td>
						<--{/if}-->
					</tr>
					<tr>
						<th class="accountLeft"><h2>昵称</h2></th>
						<td class="accountMiddle"><--{$userInfoArr.nickName}--></td>
						<--{if $isAuthor}-->
						<td class="accountRight" align="center"><a href="editInfo.php?act=nickName">修改</a></td>
						<--{/if}-->
					</tr>
					<tr>
						<th class="accountLeft"><h2>性别</h2></th>
						<td class="accountMiddle"><--{$userInfoArr.sex}--></td>
						<--{if $isAuthor}-->
						<td class="accountRight" align="center"><a href="editInfo.php?act=sex">修改</a></td>
						<--{/if}-->
					</tr>
					<tr>
						<th class="accountLeft"><h2>电子邮箱</h2></th>
						<td class="accountMiddle"><--{$userInfoArr.email}--></td>
						<--{if $isAuthor}-->
						<td class="accountRight" align="center"><a href="editInfo.php?act=email">修改</a></td>
						<--{/if}-->
					</tr>
					<--{if $isAuthor}-->
					<tr>
						<th class="accountLeft"><h2>密码</h2></th>
						<td class="accountMiddle"><input type="password" value="<--{$userInfoArr.password}-->" disabled="disabled" /></td>
						<td class="accountRight" align="center"><a href="editInfo.php?act=password">修改</a></td>
					</tr>
					<--{/if}-->
					<tr>
						<th class="accountLeft accountLast"><h2>自我介绍</h2></th>
						<td class="accountMiddle accountLast"><--{$userInfoArr.selfIntro}--></td>
						<--{if $isAuthor}-->
						<td class="accountRight accountLast" align="center"><a href="editInfo.php?act=selfintro">修改</a></td>
						<--{/if}-->
					</tr>
					
				</table>
			</div>
		</div>
		<!-- End第二层 -->
	</div>
</div>
<script src="js/account.js" type="text/javascript"></script>
<--{include file="footer.tpl"}-->