<--{include file="header.tpl"}-->
<div id="content">
	<div id="wrapper" class="clearfix">
		<div class="top topImg">
			<img src="images/slide_img03.jpg" width="960" height="360" alt="记录生活点滴，分享多彩生活！" />
		</div>
		<--{if $photoInfoArr}-->
		<!-- Start bottom -->
		<div class="bottom">
			<h1 id="titleName">每日精彩推荐</h1>
			<div class="f_r block">
				<!-- Start 相片列表 -->
				<div class="photoColumn clearfix">
					<--{section name=one loop=$photoInfoArr}-->
					<div class="list">
						<div class="imgBox">
							<a href="photoBrowser.php?photoId=<--{$photoInfoArr[one].id}-->"><img src="<--{$photoInfoArr[one].path}-->" /></a>
						</div>

						<div class="note">
							<ul class="clearfix">
								<li class="ownerIco">
									<a href="myPhotos.php?userId=<--{$photoInfoArr[one].authorId}-->">
										<img src="<--{$photoInfoArr[one].authorAvatar}-->" authorId="<--{$photoInfoArr[one].authorId}-->" width="32" height="32" />
									</a>
								</li>
								<li style="width:155px;">
										<div class="overF"><a href="myPhotos.php?userId=<--{$photoInfoArr[one].authorId}-->"><--{if $photoInfoArr[one].authorId == $userId}-->你<--{else}--><--{$photoInfoArr[one].authorName}--><--{/if}--></a>上传</div>
									<div class="overF"><--{$photoInfoArr[one].uploadTime|date_format:'%Y-%m-%d'}--></div>
								</li>
							</ul>
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
				<!-- End 相片列表 -->
			</div>

		</div>
		<!-- End bottom -->
		<--{else}-->
		暂无图片数据
		<--{/if}-->
	</div>
</div>

<script src="js/jquery.masonry.js" type="text/javascript"></script>
<script src="js/index.js" type="text/javascript"></script>

<--{include file="footer.tpl"}-->