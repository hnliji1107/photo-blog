<--{include file="header.tpl"}-->
<div id="content">
	<h1 id="titleName">上传照片</h1>

	<div id="wrapper" class="clearfix">
		<!-- 上传方式 -->
		<div class="uploadMethod">
			<ul class="public clearfix">
				<li><a href="javascript:;">批量上传</a></li>
			</ul>
		</div>
		<!-- 左侧栏 -->
		<div class="f_r">
			<--{if !$uploadToSome}-->
			<ul class="uploadToolbar clearfix">
				<--{if $albumInfoArr}-->
				<li>选择相册：</li>
				<li>
					<select id="albumSelect">
						<--{section name=one loop=$albumInfoArr}-->
						<option value="<--{$albumInfoArr[one].id}-->"><--{$albumInfoArr[one].name}--></option>
						<--{/section}-->
					</select>
				</li>
				<--{/if}-->
				<li><--{if !$albumInfoArr}-->你还没相册，<--{/if}--><a href="albumCreate.php">创建相册</a></li>
			</ul>
			<--{/if}-->


			<!-- 批量上传 -->
			<div class="uploadArea clearfix">
				<--{if $albumInfoArr}-->
				<input type="file" id="up_file" />
				<--{else}-->
				<div class="miskParent"><input type="file" id="up_file" /><div class="miskChild"></div></div>
				<--{/if}-->
				<div class="unUploadTip">你可以多图片同时上传，当然，你也可以只上传一张图片，我们会把你上传的图片列表显示在当前位置。<font color="red">注意：仅支持jpg/gif/png格式的图片，图片大小无限制，允许同时上传图片数为999。</font>
				</div>
				<div class="operationBtn">
					 <ul class="uploadTool clearfix">
						<li><a href="javascript:;" id="removeList">清空列表</a></li>
						<li><a href="javascript:;" id="startUpload">开始上传</a></li>
					</ul>
				</div>
			</div>

		</div>

	</div>

</div>

<script src="js/swfobject.js" type="text/javascript"></script>
<script src="js/jquery.uploadify.v2.1.4.js" type="text/javascript"></script>
<script src="js/upload.js" type="text/javascript"></script> 

<--{include file="footer.tpl"}-->