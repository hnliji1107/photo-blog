<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-03 10:48:16
         compiled from ".\templates\myPhotos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167574f9805b2af32b8-49406379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efd1d244266d1dbbe4417c19eda09b6be37b2f4e' => 
    array (
      0 => '.\\templates\\myPhotos.tpl',
      1 => 1336013294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167574f9805b2af32b8-49406379',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f9805b2d2108',
  'variables' => 
  array (
    'authorId' => 0,
    'authorAvatar' => 0,
    'isAuthor' => 0,
    'authorName' => 0,
    'photoInfoArr' => 0,
    'albumInfoArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9805b2d2108')) {function content_4f9805b2d2108($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\mysmarty\libs\plugins\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">

	<div id="wrapper" class="clearfix">

		<div class="top">
			<div class="selfInfor clearfix">
				<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['authorAvatar']->value;?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
" width="48" height="48" />
				</a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;">
						<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>你<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['authorName']->value;?>
<?php }?>的照片
						<span class="state"><?php echo count($_smarty_tpl->tpl_vars['photoInfoArr']->value);?>
张照片</span>
					</h1>
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

		<?php if ($_smarty_tpl->tpl_vars['photoInfoArr']->value){?>
		<div class="bottom clearfix">
			<div class="f_r">
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
				<div class="myPhoto">
					<div class="descName">
						<div class="photoName"><?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['name'];?>
</div>
					</div>

					<div class="displayImg">
						<a href="photoBrowser.php?photoId=<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['path'];?>
" /></a>
					</div>

					<div class="descriptionBar">
						<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['description'];?>

					</div>

					<div class="dateTime">
						上传于
						<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['uploadTime'],'%Y-%m-%d');?>
</span>
					</div>
				</div>
				<?php endfor; endif; ?>
			</div>

			<div class="f_l">
				<div class="albumList">
					<ul class="album">
						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['one']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['name'] = 'one';
$_smarty_tpl->tpl_vars['smarty']->value['section']['one']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['albumInfoArr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<div class="albumCover">
								<a href="photoList.php?albumId=<?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['cover'];?>
" width="75" height="75" /></a>
							</div>
							<div class="albumSet">
								<div class=""><a href="photoList.php?albumId=<?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['name'];?>
</a></div>
								<div class="photoNum"><strong><?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoNum'];?>
</strong>张照片</div>
								<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
								<div class="reEdit"><a href="albumEdit.php?albumId=<?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['id'];?>
">编辑</a></div>
								<?php }?>
							</div>
						</li>
						<?php endfor; endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<?php }else{ ?>
		<p>抱歉，暂无照片。</p>
		<?php }?>
	</div>
</div>

<script src="js/jquery.masonry.js" type="text/javascript"></script>
<script src="js/myPhotos.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>