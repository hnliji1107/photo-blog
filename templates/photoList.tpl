<--{include file="header.tpl"}-->
<div id="content">
	<div id="wrapper" class="clearfix block">
		<div class="selfInfor clearfix">
			<a href="myphotos.php?userId=<--{$authorId}-->" class="smavatar">
				<img src="<--{$authorAvatar}-->" authorId="<--{$authorId}-->"></a>
			<div class="left">
				<h1 class="yourAlbum" id="titleName"><a href="albumList.php?userId=<--{$authorId}-->"><--{if $isAuthor}-->你<--{else}--><--{$authorName}--><--{/if}-->的相册</a><strong>/</strong><--{$albumName}--></h1>
			</div>
		</div>
		<div class="albumBar">
			<ul class="albumNav clearfix">
				<--{if $isAuthor}-->
				<li>      
					<a href="albumEdit.php?albumId=<--{$albumId}-->">编辑此相册</a> /
					<a href="javascript:;" class="delAlbum">删除此相册</a>
				</li>
				<--{/if}-->
			</ul>
		</div>

		<div class="block">
			<div class="albumOwner clearfix">
				<a href="#" class="currentAlbum"><img src="<--{$albumCover}-->" class="photo" /> </a>
				<ul class="clearfix">
					<li class="photoTitle"><--{$albumName}--></li>
					<li class="viewBy">( <--{count($photoInfoArr)}-->张照片 )</li>
					<li class="comments"><--{$albumDesc}--></li>
				</ul>
			</div>
			<--{if $photoInfoArr}-->
			<!-- Start相片列表 -->
			<div class="photoColumn clearfix">
			
				<--{section name=one loop=$photoInfoArr}-->
				
				<div class="list">
					<div class="imgBox">
						<a href="photoBrowser.php?photoId=<--{$photoInfoArr[one].id}-->"><img src="<--{$photoInfoArr[one].path}-->" /></a>
					</div>

					<--{if $photoInfoArr[one].description}-->
					<div class="details"><--{$photoInfoArr[one].description}--></div>
					<--{/if}-->

					<--{if $photoInfoArr[one].photoComments}-->
					<div class="statusBar">
						<div class="buttonBar clearfix">
							<div class="collectBtn">
								<span class="collect">评论数</span>
								<span class="collectNum"><--{count($photoInfoArr[one].photoComments)}--></span>
							</div>
						</div>
					</div>
					<--{section name=some loop=$photoInfoArr[one].photoComments}-->
					<div class="note">
						<ul class="clearfix">
							<li class="ownerIco">
								<a href="myPhotos.php?userId=<--{$photoInfoArr[one].photoComments[some].commenterId}-->">
									<img src="<--{$photoInfoArr[one].photoComments[some].commenterAvatar}-->" authorId="<--{$photoInfoArr[one].photoComments[some].commenterId}-->" width="32" height="32" />
								</a>
							</li>
							<li style="width:155px;">
								<div class="overF"><a href="myPhotos.php?userId=<--{$photoInfoArr[one].photoComments[some].commenterId}-->"><--{$photoInfoArr[one].photoComments[some].commenterName}--></a>说</div>
								<div class="overF"><--{$photoInfoArr[one].photoComments[some].text}--></div>
							</li>
						</ul>
					</div>
					<--{/section}-->
					<--{/if}-->
				</div>
				
				<--{/section}-->
		
			</div>
			<!-- End相片列表 -->
			<--{else}-->
			<--{if $isAuthor}-->
			<h3>此相册暂无照片, <a href="upload.php?albumId=<--{$albumId}-->" class="albumId">马上上传</a></h3>
			<--{/if}-->
			<--{/if}-->
		</div>

	</div>
</div>

<input type="hidden" value="<--{$albumId}-->" class="albumId" />

<script src="js/jquery.masonry.js" type="text/javascript"></script>
<script src="js/photoList.js" type="text/javascript"></script>
<--{include file="footer.tpl"}-->