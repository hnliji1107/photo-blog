<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-02 16:05:44
         compiled from ".\templates\albumEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124064f955efa281fd0-27808298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '776a9892095786ad55207b4e48651ec2c2d0c083' => 
    array (
      0 => '.\\templates\\albumEdit.tpl',
      1 => 1335231172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124064f955efa281fd0-27808298',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f955efa379fc',
  'variables' => 
  array (
    'albumName' => 0,
    'albumId' => 0,
    'albumCover' => 0,
    'photoInfoArr' => 0,
    'photoNum' => 0,
    'albumDesc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f955efa379fc')) {function content_4f955efa379fc($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<h1 id="titleName">编辑相册</h1>

	<div id="wrapper" class="clearfix">

		<div class="f_l">
			<div class="albumEdit">
				<h2 class="albumName"><a href="#"><?php echo $_smarty_tpl->tpl_vars['albumName']->value;?>
</a></h2>
				<input type="hidden" class="albumId" value="<?php echo $_smarty_tpl->tpl_vars['albumId']->value;?>
" />
				<a href="#" class="album_cover"><img src="<?php echo $_smarty_tpl->tpl_vars['albumCover']->value;?>
" alt="相册封面" /></a>
				<ul class="albumPhotos clearfix">
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
					<li><a href="photoBrowser.php?photoId=<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['path'];?>
" /></a></li>
					<?php endfor; endif; ?>
					<li class="photoNum"><p>共<span><?php echo $_smarty_tpl->tpl_vars['photoNum']->value;?>
</span>张照片</p></li>
				</ul>
			</div>
		</div>

		<div class="f_r">
			<div class="editArea">
				<ul>
					<li>
						<label>标题：</label>
						<input type="text" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['albumName']->value;?>
" />
					</li>
					<li>
						<label>描述：</label>
						<textarea id="albumDescription" name="description" class="txt"><?php echo $_smarty_tpl->tpl_vars['albumDesc']->value;?>
</textarea>
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
						<p class=goBack>或者，返回<a href="photoList.php?albumId=<?php echo $_smarty_tpl->tpl_vars['albumId']->value;?>
">相册页面</a>/<a href="albumList.php">你的相册列表</a></p>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>

<script src="js/albumEdit.js" type="text/javascript"></script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>