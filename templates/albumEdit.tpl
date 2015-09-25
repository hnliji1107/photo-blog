<--{include file="header.tpl"}-->
<div id="content">
	<h1 id="titleName">编辑相册</h1>

	<div id="wrapper" class="clearfix">

		<div class="f_l">
			<div class="albumEdit">
				<h2 class="albumName"><a href="#"><--{$albumName}--></a></h2>
				<input type="hidden" class="albumId" value="<--{$albumId}-->" />
				<a href="#" class="album_cover"><img src="<--{$albumCover}-->" alt="相册封面" /></a>
				<ul class="albumPhotos clearfix">
					<--{section name=one loop=$photoInfoArr}-->
					<li><a href="photoBrowser.php?photoId=<--{$photoInfoArr[one].id}-->"><img src="<--{$photoInfoArr[one].path}-->" /></a></li>
					<--{/section}-->
					<li class="photoNum"><p>共<span><--{$photoNum}--></span>张照片</p></li>
				</ul>
			</div>
		</div>

		<div class="f_r">
			<div class="editArea">
				<ul>
					<li>
						<label>标题：</label>
						<input type="text" id="title" name="title" value="<--{$albumName}-->" />
					</li>
					<li>
						<label>描述：</label>
						<textarea id="albumDescription" name="description" class="txt"><--{$albumDesc}--></textarea>
					</li>
					<!-- <li>
						<label>浏览方式：</label>
						<input type="radio" name="radio" />
						<span>缩略图</span>
						<input type="radio" name="radio" />
						<span>详细</span>
					</li> -->
					<li>
						<a href="javascript:;" class="btn save">保存</a>
						<p class=goBack>或者，返回<a href="photoList.php?albumId=<--{$albumId}-->">相册页面</a>/<a href="albumList.php">你的相册列表</a></p>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>

<script src="js/albumEdit.js" type="text/javascript"></script>

<--{include file="footer.tpl"}-->