<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-03 13:28:36
         compiled from ".\templates\personIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41534f954c62ef3cf8-16643535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a9d41977047811bffc144f493e66334d50161dd' => 
    array (
      0 => '.\\templates\\personIndex.tpl',
      1 => 1336022913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41534f954c62ef3cf8-16643535',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f954c630fd73',
  'variables' => 
  array (
    'isAuthor' => 0,
    'authorName' => 0,
    'photoComments' => 0,
    'whoAddMe' => 0,
    'userId' => 0,
    'meAddWho' => 0,
    'authorId' => 0,
    'userAvatar' => 0,
    'mePhotoInfoArr' => 0,
    'friendInfoArr' => 0,
    'otherUserInfoArr' => 0,
    'photoNum' => 0,
    'albumNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f954c630fd73')) {function content_4f954c630fd73($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">

	<div id="wrapper" class="clearfix">

		<div class="f_r">
			<div class="sonNav">
				<ul class="xTabs clearfix">
					<li><a href="javascript:;" class="current"><?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>我<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['authorName']->value;?>
<?php }?>的动态</a></li>
					<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
					<li><a href="javascript:;">朋友动态</a></li>
					<li><a href="javascript:;">你可能感兴趣的人</a></li>
					<?php }?>
				</ul>
			</div>

			<!--Start 我的动态 -->
			<ul class="Dynamic">
				<?php if ($_smarty_tpl->tpl_vars['photoComments']->value||$_smarty_tpl->tpl_vars['whoAddMe']->value){?>
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['one']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['name'] = 'one';
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['photoComments']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<li class="details clearfix">
					<div class="ownerIco">
						<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['photoComments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commenterId'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['photoComments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commenterAvatar'];?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['photoComments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commenterId'];?>
" width="24" height="24" /></a>
					</div>
					<div class="ownerDynamic">
						<div class="description clearfix">
							<span class="otherInfo"><a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['photoComments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commenterId'];?>
"><?php echo $_smarty_tpl->tpl_vars['photoComments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commenterName'];?>
</a>评论了<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>我<?php }else{ ?>他<?php }?>的照片:</span>
							<span class="date"><?php echo $_smarty_tpl->tpl_vars['photoComments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commentTime'];?>
</span>
						</div>

						<ul class="photos clearfix">
							<li><a href="photoBrowser.php?photoId=<?php echo $_smarty_tpl->tpl_vars['photoComments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoId'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['photoComments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commentPhoto'];?>
" /></a></li>
							<li class="photoDesc"><?php echo $_smarty_tpl->tpl_vars['photoComments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['commentTxt'];?>
</li>
						</ul>
					</div>
				</li>
				<?php endfor; endif; ?>
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['one']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['name'] = 'one';
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['whoAddMe']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<li class="details clearfix">
					<div class="ownerIco">
						<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['whoAddMe']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['whoId'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['whoAddMe']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['whoAvatar'];?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['whoAddMe']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['whoId'];?>
" width="24" height="24" /></a>
					</div>
					<div class="ownerDynamic">
						<div class="description clearfix">
							<span class="otherInfo"><?php if ($_smarty_tpl->tpl_vars['whoAddMe']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['whoId']==$_smarty_tpl->tpl_vars['userId']->value){?>你<?php }else{ ?><a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['whoAddMe']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['whoId'];?>
"><?php echo $_smarty_tpl->tpl_vars['whoAddMe']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['whoName'];?>
</a><?php }?>添加<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>我<?php }else{ ?>他<?php }?>为好友</span>
							<span class="date"><?php echo $_smarty_tpl->tpl_vars['whoAddMe']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['addTime'];?>
</span>
						</div>
					</div>
				</li>
				<?php endfor; endif; ?>
				<?php if (!$_smarty_tpl->tpl_vars['isAuthor']->value){?>
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['one']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['name'] = 'one';
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['meAddWho']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<li class="details clearfix">
					<div class="ownerIco">
						<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['userAvatar']->value;?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
" width="24" height="24" /></a>
					</div>
					<div class="ownerDynamic">
						<div class="description clearfix">
							<span class="otherInfo">他添加<?php if ($_smarty_tpl->tpl_vars['meAddWho']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['whoId']==$_smarty_tpl->tpl_vars['userId']->value){?>你<?php }else{ ?><a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['meAddWho']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['whoId'];?>
"><?php echo $_smarty_tpl->tpl_vars['meAddWho']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['whoName'];?>
</a><?php }?>为好友</span>
							<span class="date"><?php echo $_smarty_tpl->tpl_vars['meAddWho']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['addTime'];?>
</span>
						</div>
					</div>
				</li>
				<?php endfor; endif; ?>

				<?php if ($_smarty_tpl->tpl_vars['mePhotoInfoArr']->value){?>
				<li class="details clearfix">
					<div class="ownerIco">
						<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['userAvatar']->value;?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
" width="24" height="24" /></a>
					</div>
					<div class="ownerDynamic">
						<div class="description clearfix">
							<span class="otherInfo">他上传了<?php echo count($_smarty_tpl->tpl_vars['mePhotoInfoArr']->value);?>
张照片:</span>
							<span class="date"><?php echo $_smarty_tpl->tpl_vars['mePhotoInfoArr']->value[0]['uploadTime'];?>
</span>
						</div>
						<ul class="photos clearfix">
							<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['one']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['name'] = 'one';
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mePhotoInfoArr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['one']['iteration']<6){?>
							<li><a href="photoBrowser.php?photoId=<?php echo $_smarty_tpl->tpl_vars['mePhotoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoId'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['mePhotoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoName'];?>
" /></a></li>
							<?php }?>
							<?php endfor; endif; ?>
						</ul>
					</div>
				</li>
				<?php }?>

				<?php }?>
				<?php }else{ ?>
				暂无最新动态
				<?php }?>
			</ul>
			<!--End 我的动态 -->

	
			<!--Start 朋友的动态 -->
			<ul class="Dynamic" style="display:none;">
				<?php if ($_smarty_tpl->tpl_vars['friendInfoArr']->value){?>
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
				<?php if ($_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendPhotoInfoArr']){?>
				<li class="details clearfix">
					<div class="ownerIco">
						<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendId'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendAvatar'];?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendId'];?>
" width="24" height="24" /></a>
					</div>
					<div class="ownerDynamic">
						<div class="description clearfix">
							<span class="otherInfo"><a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendId'];?>
"><?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendName'];?>
</a>上传了<?php echo count($_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendPhotoInfoArr']);?>
张照片:</span>
							<span class="date"><?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['uploadTime'];?>
</span>
						</div>

						<ul class="photos clearfix">
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
							<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['some']['iteration']<6){?>
							<li><a href="photoBrowser.php?photoId=<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendPhotoInfoArr'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['photoId'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendPhotoInfoArr'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['photoName'];?>
" /></a></li>
							<?php }?>
							<?php endfor; endif; ?>
						</ul>
					</div>
				</li>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['meAddWho']){?>
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['some']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['name'] = 'some';
$_smarty_tpl->tpl_vars['smarty']->value['section']['some']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['meAddWho']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<li class="details clearfix">
					<div class="ownerIco">
						<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendId'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendAvatar'];?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendId'];?>
" width="24" height="24" /></a>
					</div>
					<div class="ownerDynamic">
						<div class="description clearfix">
							<span class="otherInfo"><a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendId'];?>
"><?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['friendName'];?>
</a>添加<?php if ($_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['meAddWho'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['whoId']==$_smarty_tpl->tpl_vars['userId']->value){?>我<?php }else{ ?><a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['meAddWho'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['whoId'];?>
"><?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['meAddWho'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['whoName'];?>
</a><?php }?>为好友</span>
							<span class="date"><?php echo $_smarty_tpl->tpl_vars['friendInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['meAddWho'][$_smarty_tpl->getVariable('smarty')->value['section']['some']['index']]['addTime'];?>
</span>
						</div>
					</div>
				</li>
				<?php endfor; endif; ?>
				<?php }?>


				<?php endfor; endif; ?>
				<?php }else{ ?>
				暂无最新动态
				<?php }?>
			</ul>
			<!--End 朋友的动态 -->
			

			<!--Start 加朋友 -->
			<ul class="Dynamic userList" style="display:none;">
				<?php if ($_smarty_tpl->tpl_vars['otherUserInfoArr']->value){?>
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['one']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['name'] = 'one';
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['otherUserInfoArr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<li>
					<div class="uavatar">
						<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['otherUserInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['otherUserId'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['otherUserInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['otherUserAvatar'];?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['otherUserInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['otherUserId'];?>
" width="80" height="80" />
						</a>
					</div>
					<div class="uname"><a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['otherUserInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['otherUserId'];?>
"><?php echo $_smarty_tpl->tpl_vars['otherUserInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['otherUserName'];?>
</a></div>
					<div class="addFrBtn"><a href="javascript:;" class="btn">加为好友</a></div>
				</li>
				<?php endfor; endif; ?>
				<?php }else{ ?>
				暂无推荐好友
				<?php }?>
			</ul>
			<!--End 加朋友 -->
			

		</div>

		<div class="f_l">
			<div class="right">
				<div class="owner clearfix">
					<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
" class="Ico"><img src="<?php echo $_smarty_tpl->tpl_vars['userAvatar']->value;?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
" width="48" height="48" /></a>
					<div class="ownerInformation">
						<h1 class="clearBottom"><?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>你好，<?php }?><?php echo $_smarty_tpl->tpl_vars['authorName']->value;?>
</h1>
						<ul class="ownerNav clearfix">   
							<li><a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['photoNum']->value;?>
张照片</a></li>
							<li><a href="albumList.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['albumNum']->value;?>
个相册</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<script src="js/personIndex.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>