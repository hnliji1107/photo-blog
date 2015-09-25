<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-03 09:25:18
         compiled from ".\templates\photoBrowser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317844f954460c3d821-08095097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f750c3c5bff7be9b4ee67576d38476f043f8557' => 
    array (
      0 => '.\\templates\\photoBrowser.tpl',
      1 => 1336008316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317844f954460c3d821-08095097',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f954460e0218',
  'variables' => 
  array (
    'photoInfoArr' => 0,
    'isAuthor' => 0,
    'photoId' => 0,
    'nextPhotoId' => 0,
    'prevPhotoId' => 0,
    'photoIndex' => 0,
    'commentInfoArr' => 0,
    'userId' => 0,
    'userAvatar' => 0,
    'authorId' => 0,
    'authorAvatar' => 0,
    'authorName' => 0,
    'albumName' => 0,
    'allPhotoInfoArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f954460e0218')) {function content_4f954460e0218($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\mysmarty\libs\plugins\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">

	<div id="wrapper" class="clearfix">
		
		<!-- 左侧栏 -->
		<div class="f_r">
			<div class="photoToolbar">
				<ul class="optTag clearfix">
					<li><a href="photoList.php?albumId=<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value['albumId'];?>
" class="album">至相册</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value['originalImg'];?>
" target="_blank" class="zoom">原图</a></li>
					<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
					<li><a href="javascript:;" class="delete">删除</a></li>
					<li class="setAlbumCover">设为封面</li>
					<?php }?>
					<li class="download"><a href="download.php?photoId=<?php echo $_smarty_tpl->tpl_vars['photoId']->value;?>
" style="text-indent:0;">下载原图</a></li>
					<li class="nextLi"><a href="photoBrowser.php?photoId=<?php echo $_smarty_tpl->tpl_vars['nextPhotoId']->value;?>
" class="photoNext">下一张</a></li>
					<li class="prevLi"><a href="photoBrowser.php?photoId=<?php echo $_smarty_tpl->tpl_vars['prevPhotoId']->value;?>
" class="photoPrev">上一张</a></li>
				</ul>
			</div>
			<div id="photoContainer">
				<img src="<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value['name'];?>
" class="photoImg" />
				<input type="hidden" id="photoIndex" value="<?php echo $_smarty_tpl->tpl_vars['photoIndex']->value;?>
" />
				<input type="hidden" id="photoId" value="<?php echo $_smarty_tpl->tpl_vars['photoId']->value;?>
" />
			</div>
			<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
			<div class="photoTitle">
				<input type="text" size="30" class="title" value="<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value['editName'];?>
" />
				<textarea class="photoDescription"><?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value['photoDesc'];?>
</textarea>
				<div class="submit clearfix">
					<a href="javascript:;" class="btn btnSize saveEdit">保存</a>
					<!-- <a href="javascript:;" class="btn btnSize">取消</a> -->
				</div>
			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['commentInfoArr']->value){?>
			<div class="commentList">
				<h2>评论</h2>
				<ul>
					<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['one']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['name'] = 'one';
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['commentInfoArr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total']);
?>
					<li class="clearfix">
						<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['commentInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commenterId'];?>
" class="ownerIco" title="">
							<img src="<?php echo $_smarty_tpl->tpl_vars['commentInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commenterAvatar'];?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['commentInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commenterId'];?>
" width="48" height="48" alt="头像" />
						</a>
						<div class="overF">
							<div class="time"><a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['commentInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commenterId'];?>
"><?php echo $_smarty_tpl->tpl_vars['commentInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commenterName'];?>
 </a><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commentInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['time'],'%m-%d %H:%M');?>
 <a href="#">说：</a></div>
							<div class="postContent">
								<?php echo $_smarty_tpl->tpl_vars['commentInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['text'];?>

							</div>
						</div>
					</li>
					<?php endfor; endif; ?>
				</ul>
			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['userId']->value){?>
			<div class="postComment">
				<h2>我来说两句 </h2>
				<ul>
					<li class="clearfix">
						<a href="javascript:;" class="ownerIco">
							<img src="<?php echo $_smarty_tpl->tpl_vars['userAvatar']->value;?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
" width="48" height="48" alt="头像" />
						</a>
						<div class="overF postToolbar">
							<textarea class="postText"></textarea>
							<a href="javascript:;" class="btn postBtn">发表</a>
						</div>
					</li>
				</ul>
			</div>
			<?php }?>
		</div>

		<!-- 右侧栏 -->
		<div class="f_l">
			<ul>
				<li class="clearfix">
					<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
" class="postIco">
						<img src="<?php echo $_smarty_tpl->tpl_vars['authorAvatar']->value;?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
" width="32" height="32" />
					</a>
					<div class="postInfor">
						<div class="time">由<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>你<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['authorName']->value;?>
<?php }?></a>上传于</div>
						<div class="postContent">
							<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['photoInfoArr']->value['time'],'%Y-%m-%d');?>

						</div>
					</div>
				</li>
				<li class="topSpacing">
					<div class="clearfix">
						<div class="Expansion"><a href="javascript:;"></a></div>
						<div class="albumInfor"><a href="#"><?php echo $_smarty_tpl->tpl_vars['albumName']->value;?>
[相册]</a></div>
					</div>
					<div class="browserBar">
						<div class="threeArea">
							<div class="allPhotos clearfix">
								<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['one']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['name'] = 'one';
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['allPhotoInfoArr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['one']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['one']['total']);
?>
								<div class="browserPhoto">
									<a href="photoBrowser.php?photoId=<?php echo $_smarty_tpl->tpl_vars['allPhotoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['allPhotoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['name'];?>
" /></a>
								</div>
								<?php endfor; endif; ?>
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>