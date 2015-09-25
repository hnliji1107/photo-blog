<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-03 10:49:58
         compiled from ".\templates\friend.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69474f9ca4301c23f7-25615712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017461ea34b97f213d84a3b9e78af37166fa46a1' => 
    array (
      0 => '.\\templates\\friend.tpl',
      1 => 1336013396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69474f9ca4301c23f7-25615712',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f9ca4309863e',
  'variables' => 
  array (
    'authorId' => 0,
    'userAvatar' => 0,
    'isAuthor' => 0,
    'authorName' => 0,
    'friendInfoArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9ca4309863e')) {function content_4f9ca4309863e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">

	<div id="wrapper" class="clearfix">

		<div class="top">
			<div class="selfInfor clearfix">
				<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['userAvatar']->value;?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
" width="48" height="48" /></a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;"><?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>你<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['authorName']->value;?>
<?php }?>的朋友</h1>
					<ul id="sonNav" class="clearfix">
						<li><a href="albumList.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
">相册</a></li>
						<li><a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
">照片</a></li>
						<li><a href="personIndex.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
">动态</a></li>
						<li><a href="friend.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
">朋友</a></li>
						<li class="last"><a href="account.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
">个人档案</a></li>
					</ul>
				</div>
			</div>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['friendInfoArr']->value[0]['friendPhotoInfoArr']){?>
		<div class="bottom">
			<div class="switch">
				<ul class="tabs clearfix">
					<li>每人显示：</li>
					<li><a href="javascript:;">最多显示8张</a></li>
				</ul>
			</div>

			<div class="displayList">
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['one']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['name'] = 'one';
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['friendInfoArr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<ul class="friendPhotos clearfix">
					<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['some']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['name'] = 'some';
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendPhotoInfoArr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['some']['iteration']<9){?>
					<li>
						<div class="photo">
							<a href="photoBrowser.php?photoId=<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendPhotoInfoArr'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['photoId'];?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendPhotoInfoArr'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['photoName'];?>
" />
							</a>
						</div>
						<div class="owner">
							From <a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendId'];?>
"><?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendName'];?>
</a>
						</div>
					</li>
					<?php }?>
					<?php endfor; endif; ?>
				</ul>
				<?php endfor; endif; ?>
			</div>
		</div>
		<?php }else{ ?>
		抱歉，暂无朋友数据
		<?php }?>
	</div>
</div>

<script src="js/friend.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>