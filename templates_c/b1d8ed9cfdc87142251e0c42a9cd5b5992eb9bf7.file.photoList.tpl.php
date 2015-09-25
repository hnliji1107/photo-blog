<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-05 22:22:18
         compiled from ".\templates\photoList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317884f954c7d934986-74272177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1d8ed9cfdc87142251e0c42a9cd5b5992eb9bf7' => 
    array (
      0 => '.\\templates\\photoList.tpl',
      1 => 1336227733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317884f954c7d934986-74272177',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f954c7dae403',
  'variables' => 
  array (
    'authorId' => 0,
    'authorAvatar' => 0,
    'isAuthor' => 0,
    'authorName' => 0,
    'albumName' => 0,
    'albumId' => 0,
    'albumCover' => 0,
    'photoInfoArr' => 0,
    'albumDesc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f954c7dae403')) {function content_4f954c7dae403($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="wrapper" class="clearfix block">
		<div class="selfInfor clearfix">
			<a href="myphotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
" class="smavatar">
				<img src="<?php echo $_smarty_tpl->tpl_vars['authorAvatar']->value;?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
"></a>
			<div class="left">
				<h1 class="yourAlbum" id="titleName"><a href="albumList.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>你<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['authorName']->value;?>
<?php }?>的相册</a><strong>/</strong><?php echo $_smarty_tpl->tpl_vars['albumName']->value;?>
</h1>
			</div>
		</div>
		<div class="albumBar">
			<ul class="albumNav clearfix">
				<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
				<li>      
					<a href="albumEdit.php?albumId=<?php echo $_smarty_tpl->tpl_vars['albumId']->value;?>
">编辑此相册</a> /
					<a href="javascript:;" class="delAlbum">删除此相册</a>
				</li>
				<?php }?>
			</ul>
		</div>

		<div class="block">
			<div class="albumOwner clearfix">
				<a href="#" class="currentAlbum"><img src="<?php echo $_smarty_tpl->tpl_vars['albumCover']->value;?>
" class="photo" /> </a>
				<ul class="clearfix">
					<li class="photoTitle"><?php echo $_smarty_tpl->tpl_vars['albumName']->value;?>
</li>
					<li class="viewBy">( <?php echo count($_smarty_tpl->tpl_vars['photoInfoArr']->value);?>
张照片 )</li>
					<li class="comments"><?php echo $_smarty_tpl->tpl_vars['albumDesc']->value;?>
</li>
				</ul>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['photoInfoArr']->value){?>
			<!-- Start相片列表 -->
			<div class="photoColumn clearfix">
			
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['one']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['name'] = 'one';
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['photoInfoArr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				
				<div class="list">
					<div class="imgBox">
						<a href="photoBrowser.php?photoId=<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['path'];?>
" /></a>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['description']){?>
					<div class="details"><?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['description'];?>
</div>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoComments']){?>
					<div class="statusBar">
						<div class="buttonBar clearfix">
							<div class="collectBtn">
								<span class="collect">评论数</span>
								<span class="collectNum"><?php echo count($_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoComments']);?>
</span>
							</div>
						</div>
					</div>
					<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['some']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['name'] = 'some';
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoComments']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['some']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['some']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['some']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['some']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['some']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['some']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['some']['total']);
?>
					<div class="note">
						<ul class="clearfix">
							<li class="ownerIco">
								<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoComments'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['commenterId'];?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoComments'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['commenterAvatar'];?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoComments'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['commenterId'];?>
" width="32" height="32" />
								</a>
							</li>
							<li style="width:155px;">
								<div class="overF"><a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoComments'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['commenterId'];?>
"><?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoComments'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['commenterName'];?>
</a>说</div>
								<div class="overF"><?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoComments'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['text'];?>
</div>
							</li>
						</ul>
					</div>
					<?php endfor; endif; ?>
					<?php }?>
				</div>
				
				<?php endfor; endif; ?>
		
			</div>
			<!-- End相片列表 -->
			<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
			<h3>此相册暂无照片, <a href="upload.php?albumId=<?php echo $_smarty_tpl->tpl_vars['albumId']->value;?>
" class="albumId">马上上传</a></h3>
			<?php }?>
			<?php }?>
		</div>

	</div>
</div>

<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['albumId']->value;?>
" class="albumId" />

<script src="js/jquery.masonry.js" type="text/javascript"></script>
<script src="js/photoList.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>