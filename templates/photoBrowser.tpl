<--{include file="header.tpl"}-->
<div id="content">

	<div id="wrapper" class="clearfix">
		
		<!-- 左侧栏 -->
		<div class="f_r">
			<div class="photoToolbar">
				<ul class="optTag clearfix">
					<li><a href="photoList.php?albumId=<--{$photoInfoArr.albumId}-->" class="album">至相册</a></li>
					<li><a href="<--{$photoInfoArr.originalImg}-->" target="_blank" class="zoom">原图</a></li>
					<--{if $isAuthor}-->
					<li><a href="javascript:;" class="delete">删除</a></li>
					<li class="setAlbumCover">设为封面</li>
					<--{/if}-->
					<li class="download"><a href="download.php?photoId=<--{$photoId}-->" style="text-indent:0;">下载原图</a></li>
					<li class="nextLi"><a href="photoBrowser.php?photoId=<--{$nextPhotoId}-->" class="photoNext">下一张</a></li>
					<li class="prevLi"><a href="photoBrowser.php?photoId=<--{$prevPhotoId}-->" class="photoPrev">上一张</a></li>
				</ul>
			</div>
			<div id="photoContainer">
				<img src="<--{$photoInfoArr.name}-->" class="photoImg" />
				<input type="hidden" id="photoIndex" value="<--{$photoIndex}-->" />
				<input type="hidden" id="photoId" value="<--{$photoId}-->" />
			</div>
			<--{if $isAuthor}-->
			<div class="photoTitle">
				<input type="text" size="30" class="title" value="<--{$photoInfoArr.editName}-->" />
				<textarea class="photoDescription"><--{$photoInfoArr.photoDesc}--></textarea>
				<div class="submit clearfix">
					<a href="javascript:;" class="btn btnSize saveEdit">保存</a>
					<!-- <a href="javascript:;" class="btn btnSize">取消</a> -->
				</div>
			</div>
			<--{/if}-->

			<--{if $commentInfoArr}-->
			<div class="commentList">
				<h2>评论</h2>
				<ul>
					<--{section name=one loop=$commentInfoArr}-->
					<li class="clearfix">
						<a href="myPhotos.php?userId=<--{$commentInfoArr[one].commenterId}-->" class="ownerIco" title="">
							<img src="<--{$commentInfoArr[one].commenterAvatar}-->" authorId="<--{$commentInfoArr[one].commenterId}-->" width="48" height="48" alt="头像" />
						</a>
						<div class="overF">
							<div class="time"><a href="myPhotos.php?userId=<--{$commentInfoArr[one].commenterId}-->"><--{$commentInfoArr[one].commenterName}--> </a><--{$commentInfoArr[one].time|date_format:'%m-%d %H:%M'}--> <a href="#">说：</a></div>
							<div class="postContent">
								<--{$commentInfoArr[one].text}-->
							</div>
						</div>
					</li>
					<--{/section}-->
				</ul>
			</div>
			<--{/if}-->

			<--{if $userId}-->
			<div class="postComment">
				<h2>我来说两句 </h2>
				<ul>
					<li class="clearfix">
						<a href="javascript:;" class="ownerIco">
							<img src="<--{$userAvatar}-->" authorId="<--{$userId}-->" width="48" height="48" alt="头像" />
						</a>
						<div class="overF postToolbar">
							<textarea class="postText"></textarea>
							<a href="javascript:;" class="btn postBtn">发表</a>
						</div>
					</li>
				</ul>
			</div>
			<--{/if}-->
		</div>

		<!-- 右侧栏 -->
		<div class="f_l">
			<ul>
				<li class="clearfix">
					<a href="myPhotos.php?userId=<--{$authorId}-->" class="postIco">
						<img src="<--{$authorAvatar}-->" authorId="<--{$authorId}-->" width="32" height="32" />
					</a>
					<div class="postInfor">
						<div class="time">由<a href="myPhotos.php?userId=<--{$authorId}-->"><--{if $isAuthor}-->你<--{else}--><--{$authorName}--><--{/if}--></a>上传于</div>
						<div class="postContent">
							<--{$photoInfoArr.time|date_format:'%Y-%m-%d'}-->
						</div>
					</div>
				</li>
				<li class="topSpacing">
					<div class="clearfix">
						<div class="Expansion"><a href="javascript:;"></a></div>
						<div class="albumInfor"><a href="#"><--{$albumName}-->[相册]</a></div>
					</div>
					<div class="browserBar">
						<div class="threeArea">
							<div class="allPhotos clearfix">
								<--{section name=one loop=$allPhotoInfoArr}-->
								<div class="browserPhoto">
									<a href="photoBrowser.php?photoId=<--{$allPhotoInfoArr[one].id}-->"><img src="<--{$allPhotoInfoArr[one].name}-->" /></a>
								</div>
								<--{/section}-->
							</div>
						</div>

						<div class="clearfix" style="width:240px;">
							<div class="browserMethod prevBtn">
								<a href="javascript:;" class="prev">上一张</a>
							</div>
							<div class="browserMethod">
								<a href="javascript:;" class=view>播放幻灯片</a>
							</div>
							<div class="browserMethod nextBtn">
								<a href="javascript:;" class="next">下一张</a>
							</div>
							
						</div>
					</div>

				</li>
				
			</ul>
		</div>

	</div>
</div>

<script type="text/javascript">
var jiathis_config = {
    shareImg:{
        "showType":"ALL",
        "bgColor":"",
        "txtColor":"",
        "text":"",
        "services":"",
        "position":"",
        "imgwidth":"",
        "imgheight":"",
        "divname":""
    }
}
</script>
<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script>
<script src="js/photoBrowser.js" type="text/javascript"></script>

<--{include file="footer.tpl"}-->