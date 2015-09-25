<--{include file="header.tpl"}-->
<div id="content">

	<div id="wrapper" class="clearfix">

		<div class="top">
			<div class="selfInfor clearfix">
				<a href="myPhotos.php?userId=<--{$authorId}-->"><img src="<--{$userAvatar}-->" authorId="<--{$authorId}-->" width="48" height="48" /></a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;"><--{if $isAuthor}-->你<--{else}--><--{$authorName}--><--{/if}-->的朋友</h1>
					<ul id="sonNav" class="clearfix">
						<li><a href="albumList.php?userId=<--{$authorId}-->">相册</a></li>
						<li><a href="myPhotos.php?userId=<--{$authorId}-->">照片</a></li>
						<li><a href="personIndex.php?userId=<--{$authorId}-->">动态</a></li>
						<li><a href="friend.php?userId=<--{$authorId}-->">朋友</a></li>
						<li class="last"><a href="account.php?userId=<--{$authorId}-->">个人档案</a></li>
					</ul>
				</div>
			</div>
		</div>

		<--{if $friendInfoArr[0].friendPhotoInfoArr}-->
		<div class="bottom">
			<div class="switch">
				<ul class="tabs clearfix">
					<li>每人显示：</li>
					<li><a href="javascript:;">最多显示8张</a></li>
				</ul>
			</div>

			<div class="displayList">
				<--{section name=one loop=$friendInfoArr}-->
				<ul class="friendPhotos clearfix">
					<--{section name=some loop=$friendInfoArr[one].friendPhotoInfoArr}-->
					<--{if $smarty.section.some.iteration < 9}-->
					<li>
						<div class="photo">
							<a href="photoBrowser.php?photoId=<--{$friendInfoArr[one].friendPhotoInfoArr[some].photoId}-->">
								<img src="<--{$friendInfoArr[one].friendPhotoInfoArr[some].photoName}-->" />
							</a>
						</div>
						<div class="owner">
							From <a href="myPhotos.php?userId=<--{$friendInfoArr[one].friendId}-->"><--{$friendInfoArr[one].friendName}--></a>
						</div>
					</li>
					<--{/if}-->
					<--{/section}-->
				</ul>
				<--{/section}-->
			</div>
		</div>
		<--{else}-->
		抱歉，暂无朋友数据
		<--{/if}-->
	</div>
</div>

<script src="js/friend.js" type="text/javascript"></script>
<--{include file="footer.tpl"}-->

