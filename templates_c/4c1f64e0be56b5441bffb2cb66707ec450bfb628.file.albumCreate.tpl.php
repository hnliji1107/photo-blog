<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-05 21:46:38
         compiled from ".\templates\albumCreate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303344f954c70759636-19726263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c1f64e0be56b5441bffb2cb66707ec450bfb628' => 
    array (
      0 => '.\\templates\\albumCreate.tpl',
      1 => 1336219858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303344f954c70759636-19726263',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f954c707eb44',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f954c707eb44')) {function content_4f954c707eb44($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<h1 id="titleName">创建新相册</h1>

	<div id="wrapper" class="clearfix">

		<div class="f_r">
			<div class="CreateArea">
				<ul>
					<li class="clearfix">
						<label class="albumTitle">标题：</label>
						<input type="text" size="50" id="title" name="title" />
					</li>
					<li class="clearfix">
						<label class="description">描述：</label>
						<textarea id="albumDescription" name="description" class="txt"></textarea>
					</li>
					<li>
						<a href="javascript:;" class="btn create">创建相册</a>
					</li>
				</ul>
			</div>
		</div>

		
	</div>
</div>

<script src="js/albumCreate.js" type="text/javascript"></script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>