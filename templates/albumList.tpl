<--{include file="header.tpl"}-->
<div id="content">
	<div id="wrapper" class="clearfix">
		
		<div class="top">
			<div class="selfInfor clearfix">
				<a href="myPhotos.php?userId=<--{$authorId}-->"><img src="<--{$authorAvatar}-->" authorId="<--{$authorId}-->" width="48" height="48" /></a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;"><--{if $isAuthor}-->你<--{else}--><--{$authorName}--><--{/if}-->的相册</h1>
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

		<--{if $albumInfoArr}-->
		<div class="bottom">
			<div class="f_r">
				<ul class="box">
					<--{section name=one loop=$albumInfoArr}-->
					<li class="albumList">
						<a href="photoList.php?albumId=<--{$albumInfoArr[one].id}-->" class="photoFrame"><img src="<--{$albumInfoArr[one].cover}-->" /></a>
						<a href="photoList.php?albumId=<--{$albumInfoArr[one].id}-->" class="albumName"><--{$albumInfoArr[one].name}--></a>
						<p><span><--{$albumInfoArr[one].photoNum}--></span>张照片<--{if $isAuthor}--> | <a href="albumEdit.php?albumId=<--{$albumInfoArr[one].id}-->">编辑</a><--{/if}--></p>
					</li>
					<--{/section}-->
				</ul>
			</div>

			<--{if $isAuthor}-->
			<div class="f_l">
				<h2 class="public"> >> <a href="albumCreate.php">新建相册</a></h2>
			</div>
			<--{/if}-->
		</div>
		<--{else}-->
		暂无相册数据
		<--{/if}-->

	</div>
</div>

<script src="js/albumList.js" type="text/javascript"></script>
<--{include file="footer.tpl"}-->