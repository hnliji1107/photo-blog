<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-03 11:22:06
         compiled from ".\templates\albumList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20154f954c7a0768c7-99859152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b18fea8b60122852fb855263670ceeb4d233a6d3' => 
    array (
      0 => '.\\templates\\albumList.tpl',
      1 => 1336015144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20154f954c7a0768c7-99859152',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f954c7a16c79',
  'variables' => 
  array (
    'authorId' => 0,
    'authorAvatar' => 0,
    'isAuthor' => 0,
    'authorName' => 0,
    'albumInfoArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f954c7a16c79')) {function content_4f954c7a16c79($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="wrapper" class="clearfix">
		
		<div class="top">
			<div class="selfInfor clearfix">
				<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['authorAvatar']->value;?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['authorId']->value;?>
" width="48" height="48" /></a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;"><?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>你<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['authorName']->value;?>
<?php }?>的相册</h1>
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

		<?php if ($_smarty_tpl->tpl_vars['albumInfoArr']->value){?>
		<div class="bottom">
			<div class="f_r">
				<ul class="box">
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
					<li class="albumList">
						<a href="photoList.php?albumId=<?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['id'];?>
" class="photoFrame"><img src="<?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['cover'];?>
" /></a>
						<a href="photoList.php?albumId=<?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['id'];?>
" class="albumName"><?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['name'];?>
</a>
						<p><span><?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['photoNum'];?>
</span>张照片<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?> | <a href="albumEdit.php?albumId=<?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['id'];?>
">编辑</a><?php }?></p>
					</li>
					<?php endfor; endif; ?>
				</ul>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['isAuthor']->value){?>
			<div class="f_l">
				<h2 class="public"> >> <a href="albumCreate.php">新建相册</a></h2>
			</div>
			<?php }?>
		</div>
		<?php }else{ ?>
		暂无相册数据
		<?php }?>

	</div>
</div>

<script src="js/albumList.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>