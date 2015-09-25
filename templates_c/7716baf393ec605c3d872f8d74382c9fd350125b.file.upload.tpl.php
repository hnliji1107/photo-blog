<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-02 18:12:19
         compiled from ".\templates\upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24564f9544a0aa10f8-47819554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7716baf393ec605c3d872f8d74382c9fd350125b' => 
    array (
      0 => '.\\templates\\upload.tpl',
      1 => 1335953535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24564f9544a0aa10f8-47819554',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f9544a0bbdf2',
  'variables' => 
  array (
    'uploadToSome' => 0,
    'albumInfoArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9544a0bbdf2')) {function content_4f9544a0bbdf2($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
			<?php if (!$_smarty_tpl->tpl_vars['uploadToSome']->value){?>
			<ul class="uploadToolbar clearfix">
				<?php if ($_smarty_tpl->tpl_vars['albumInfoArr']->value){?>
				<li>选择相册：</li>
				<li>
					<select id="albumSelect">
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
						<option value="<?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['albumInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['name'];?>
</option>
						<?php endfor; endif; ?>
					</select>
				</li>
				<?php }?>
				<li><?php if (!$_smarty_tpl->tpl_vars['albumInfoArr']->value){?>你还没相册，<?php }?><a href="albumCreate.php">创建相册</a></li>
			</ul>
			<?php }?>


			<!-- 批量上传 -->
			<div class="uploadArea clearfix">
				<?php if ($_smarty_tpl->tpl_vars['albumInfoArr']->value){?>
				<input type="file" id="up_file" />
				<?php }else{ ?>
				<div class="miskParent"><input type="file" id="up_file" /><div class="miskChild"></div></div>
				<?php }?>
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>