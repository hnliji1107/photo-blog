<--{include file="header.tpl"}-->
<div id="content">

	<div id="wrapper" class="clearfix">

		<div class="top">
			<div class="selfInfor clearfix">
				<a href="myPhotos.php?userId=<--{$authorId}-->">
					<img src="<--{$authorAvatar}-->" authorId="<--{$authorId}-->" width="48" height="48" />
				</a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;">
						<--{if $isAuthor}-->你<--{else}--><--{$authorName}--><--{/if}-->的照片
						<span class="state"><--{count($photoInfoArr)}-->张照片</span>
					</h1>
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

		<--{if $photoInfoArr}-->
		<div class="bottom clearfix">
			<div class="f_r">
				<--{section name=one loop=$photoInfoArr}-->
				<div class="myPhoto">
					<div class="descName">
						<div class="photoName"><--{$photoInfoArr[one].name}--></div>
					</div>

					<div class="displayImg">
						<a href="photoBrowser.php?photoId=<--{$photoInfoArr[one].id}-->"><img src="<--{$photoInfoArr[one].path}-->" /></a>
					</div>

					<div class="descriptionBar">
						<--{$photoInfoArr[one].description}-->
					</div>

					<div class="dateTime">
						上传于
						<span><--{$photoInfoArr[one].uploadTime|date_format:'%Y-%m-%d'}--></span>
					</div>
				</div>
				<--{/section}-->
			</div>

			<div class="f_l">
				<div class="albumList">
					<ul class="album">
						<--{section name=one loop=$albumInfoArr}-->
						<li class="clearfix">
							<div class="albumCover">
								<a href="photoList.php?albumId=<--{$albumInfoArr[one].id}-->"><img src="<--{$albumInfoArr[one].cover}-->" width="75" height="75" /></a>
							</div>
							<div class="albumSet">
								<div class=""><a href="photoList.php?albumId=<--{$albumInfoArr[one].id}-->" title="<--{$albumInfoArr[one].name}-->"><--{$albumInfoArr[one].name}--></a></div>
								<div class="photoNum"><strong><--{$albumInfoArr[one].photoNum}--></strong>张照片</div>
								<--{if $isAuthor}-->
								<div class="reEdit"><a href="albumEdit.php?albumId=<--{$albumInfoArr[one].id}-->">编辑</a></div>
								<--{/if}-->
							</div>
						</li>
						<--{/section}-->
					</ul>
				</div>
			</div>
		</div>
		<--{else}-->
		<p>抱歉，暂无照片。</p>
		<--{/if}-->
	</div>
</div>

<script src="js/jquery.masonry.js" type="text/javascript"></script>
<script src="js/myPhotos.js" type="text/javascript"></script>
<--{include file="footer.tpl"}-->

