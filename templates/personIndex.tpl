<--{include file="header.tpl"}-->
<div id="content">

	<div id="wrapper" class="clearfix">

		<div class="f_r">
			<div class="sonNav">
				<ul class="xTabs clearfix">
					<li><a href="javascript:;" class="current"><--{if $isAuthor}-->我<--{else}--><--{$authorName}--><--{/if}-->的动态</a></li>
					<--{if $isAuthor}-->
					<li><a href="javascript:;">朋友动态</a></li>
					<li><a href="javascript:;">你可能感兴趣的人</a></li>
					<--{/if}-->
				</ul>
			</div>

			<!--Start 我的动态 -->
			<ul class="Dynamic">
				<--{if $photoComments || $whoAddMe}-->
				<--{section name=one loop=$photoComments}-->
				<li class="details clearfix">
					<div class="ownerIco">
						<a href="myPhotos.php?userId=<--{$photoComments[one].commenterId}-->"><img src="<--{$photoComments[one].commenterAvatar}-->" authorId="<--{$photoComments[one].commenterId}-->" width="24" height="24" /></a>
					</div>
					<div class="ownerDynamic">
						<div class="description clearfix">
							<span class="otherInfo"><a href="myPhotos.php?userId=<--{$photoComments[one].commenterId}-->"><--{$photoComments[one].commenterName}--></a>评论了<--{if $isAuthor}-->我<--{else}-->他<--{/if}-->的照片:</span>
							<span class="date"><--{$photoComments[one].commentTime}--></span>
						</div>

						<ul class="photos clearfix">
							<li><a href="photoBrowser.php?photoId=<--{$photoComments[one].photoId}-->"><img src="<--{$photoComments[one].commentPhoto}-->" /></a></li>
							<li class="photoDesc"><--{$photoComments[one].commentTxt}--></li>
						</ul>
					</div>
				</li>
				<--{/section}-->
				<--{section name=one loop=$whoAddMe}-->
				<li class="details clearfix">
					<div class="ownerIco">
						<a href="myPhotos.php?userId=<--{$whoAddMe[one].whoId}-->"><img src="<--{$whoAddMe[one].whoAvatar}-->" authorId="<--{$whoAddMe[one].whoId}-->" width="24" height="24" /></a>
					</div>
					<div class="ownerDynamic">
						<div class="description clearfix">
							<span class="otherInfo"><--{if $whoAddMe[one].whoId == $userId}-->你<--{else}--><a href="myPhotos.php?userId=<--{$whoAddMe[one].whoId}-->"><--{$whoAddMe[one].whoName}--></a><--{/if}-->添加<--{if $isAuthor}-->我<--{else}-->他<--{/if}-->为好友</span>
							<span class="date"><--{$whoAddMe[one].addTime}--></span>
						</div>
					</div>
				</li>
				<--{/section}-->
				<--{if !$isAuthor}-->
				<--{section name=one loop=$meAddWho}-->
				<li class="details clearfix">
					<div class="ownerIco">
						<a href="myPhotos.php?userId=<--{$authorId}-->"><img src="<--{$userAvatar}-->" authorId="<--{$authorId}-->" width="24" height="24" /></a>
					</div>
					<div class="ownerDynamic">
						<div class="description clearfix">
							<span class="otherInfo">他添加<--{if $meAddWho[one].whoId == $userId}-->你<--{else}--><a href="myPhotos.php?userId=<--{$meAddWho[one].whoId}-->"><--{$meAddWho[one].whoName}--></a><--{/if}-->为好友</span>
							<span class="date"><--{$meAddWho[one].addTime}--></span>
						</div>
					</div>
				</li>
				<--{/section}-->

				<--{if $mePhotoInfoArr}-->
				<li class="details clearfix">
					<div class="ownerIco">
						<a href="myPhotos.php?userId=<--{$authorId}-->"><img src="<--{$userAvatar}-->" authorId="<--{$authorId}-->" width="24" height="24" /></a>
					</div>
					<div class="ownerDynamic">
						<div class="description clearfix">
							<span class="otherInfo">他上传了<--{count($mePhotoInfoArr)}-->张照片:</span>
							<span class="date"><--{$mePhotoInfoArr[0].uploadTime}--></span>
						</div>
						<ul class="photos clearfix">
							<--{section name=one loop=$mePhotoInfoArr}-->
							<--{if $smarty.section.one.iteration < 6}-->
							<li><a href="photoBrowser.php?photoId=<--{$mePhotoInfoArr[one].photoId}-->"><img src="<--{$mePhotoInfoArr[one].photoName}-->" /></a></li>
							<--{/if}-->
							<--{/section}-->
						</ul>
					</div>
				</li>
				<--{/if}-->

				<--{/if}-->
				<--{else}-->
				暂无最新动态
				<--{/if}-->
			</ul>
			<!--End 我的动态 -->

	
			<!--Start 朋友的动态 -->
			<ul class="Dynamic" style="display:none;">
				<--{if $friendInfoArr}-->
				<--{section name=one loop=$friendInfoArr}-->
				<--{if $friendInfoArr[one].friendPhotoInfoArr}-->
				<li class="details clearfix">
					<div class="ownerIco">
						<a href="myPhotos.php?userId=<--{$friendInfoArr[one].friendId}-->"><img src="<--{$friendInfoArr[one].friendAvatar}-->" authorId="<--{$friendInfoArr[one].friendId}-->" width="24" height="24" /></a>
					</div>
					<div class="ownerDynamic">
						<div class="description clearfix">
							<span class="otherInfo"><a href="myPhotos.php?userId=<--{$friendInfoArr[one].friendId}-->"><--{$friendInfoArr[one].friendName}--></a>上传了<--{count($friendInfoArr[one].friendPhotoInfoArr)}-->张照片:</span>
							<span class="date"><--{$friendInfoArr[one].uploadTime}--></span>
						</div>

						<ul class="photos clearfix">
							<--{section name=some loop=$friendInfoArr[one].friendPhotoInfoArr}-->
							<--{if $smarty.section.some.iteration < 6}-->
							<li><a href="photoBrowser.php?photoId=<--{$friendInfoArr[one].friendPhotoInfoArr[some].photoId}-->"><img src="<--{$friendInfoArr[one].friendPhotoInfoArr[some].photoName}-->" /></a></li>
							<--{/if}-->
							<--{/section}-->
						</ul>
					</div>
				</li>
				<--{/if}-->

				<--{if $friendInfoArr[one].meAddWho}-->
				<--{section name=some loop=$friendInfoArr[one].meAddWho}-->
				<li class="details clearfix">
					<div class="ownerIco">
						<a href="myPhotos.php?userId=<--{$friendInfoArr[one].friendId}-->"><img src="<--{$friendInfoArr[one].friendAvatar}-->" authorId="<--{$friendInfoArr[one].friendId}-->" width="24" height="24" /></a>
					</div>
					<div class="ownerDynamic">
						<div class="description clearfix">
							<span class="otherInfo"><a href="myPhotos.php?userId=<--{$friendInfoArr[one].friendId}-->"><--{$friendInfoArr[one].friendName}--></a>添加<--{if $friendInfoArr[one].meAddWho[some].whoId == $userId}-->我<--{else}--><a href="myPhotos.php?userId=<--{$friendInfoArr[one].meAddWho[some].whoId}-->"><--{$friendInfoArr[one].meAddWho[some].whoName}--></a><--{/if}-->为好友</span>
							<span class="date"><--{$friendInfoArr[one].meAddWho[some].addTime}--></span>
						</div>
					</div>
				</li>
				<--{/section}-->
				<--{/if}-->


				<--{/section}-->
				<--{else}-->
				暂无最新动态
				<--{/if}-->
			</ul>
			<!--End 朋友的动态 -->
			

			<!--Start 加朋友 -->
			<ul class="Dynamic userList" style="display:none;">
				<--{if $otherUserInfoArr}-->
				<--{section name=one loop=$otherUserInfoArr}-->
				<li>
					<div class="uavatar">
						<a href="myPhotos.php?userId=<--{$otherUserInfoArr[one].otherUserId}-->">
							<img src="<--{$otherUserInfoArr[one].otherUserAvatar}-->" authorId="<--{$otherUserInfoArr[one].otherUserId}-->" width="80" height="80" />
						</a>
					</div>
					<div class="uname"><a href="myPhotos.php?userId=<--{$otherUserInfoArr[one].otherUserId}-->"><--{$otherUserInfoArr[one].otherUserName}--></a></div>
					<div class="addFrBtn"><a href="javascript:;" class="btn">加为好友</a></div>
				</li>
				<--{/section}-->
				<--{else}-->
				暂无推荐好友
				<--{/if}-->
			</ul>
			<!--End 加朋友 -->
			

		</div>

		<div class="f_l">
			<div class="right">
				<div class="owner clearfix">
					<a href="myPhotos.php?userId=<--{$authorId}-->" class="Ico"><img src="<--{$userAvatar}-->" authorId="<--{$authorId}-->" width="48" height="48" /></a>
					<div class="ownerInformation">
						<h1 class="clearBottom"><--{if $isAuthor}-->你好，<--{/if}--><--{$authorName}--></h1>
						<ul class="ownerNav clearfix">   
							<li><a href="myPhotos.php?userId=<--{$authorId}-->"><--{$photoNum}-->张照片</a></li>
							<li><a href="albumList.php?userId=<--{$authorId}-->"><--{$albumNum}-->个相册</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<script src="js/personIndex.js" type="text/javascript"></script>
<--{include file="footer.tpl"}-->