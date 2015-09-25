<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-03 13:47:08
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140794f954beeb72531-82471697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1336024026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140794f954beeb72531-82471697',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f954bef04dd2',
  'variables' => 
  array (
    'photoInfoArr' => 0,
    'userId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f954bef04dd2')) {function content_4f954bef04dd2($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\mysmarty\libs\plugins\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="wrapper" class="clearfix">
		<div class="top topImg">
			<img src="images/slide_img03.jpg" width="960" height="360" alt="记录生活点滴，分享多彩生活！" />
		</div>
		<?php if ($_smarty_tpl->tpl_vars['photoInfoArr']->value){?>
		<!-- Start bottom -->
		<div class="bottom">
			<h1 id="titleName">每日精彩推荐</h1>
			<div class="f_r block">
				<!-- Start 相片列表 -->
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

						<div class="note">
							<ul class="clearfix">
								<li class="ownerIco">
									<a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['authorId'];?>
">
										<img src="<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['authorAvatar'];?>
" authorId="<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['authorId'];?>
" width="32" height="32" />
									</a>
								</li>
								<li style="width:155px;">
										<div class="overF"><a href="myPhotos.php?userId=<?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['authorId'];?>
"><?php if ($_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['authorId']==$_smarty_tpl->tpl_vars['userId']->value){?>你<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['authorName'];?>
<?php }?></a>上传</div>
									<div class="overF"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['photoInfoArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['one']['index']]['uploadTime'],'%Y-%m-%d');?>
</div>
								</li>
							</ul>
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
				<!-- End 相片列表 -->
			</div>

		</div>
		<!-- End bottom -->
		<?php }else{ ?>
		暂无图片数据
		<?php }?>
	</div>
</div>

<script src="js/jquery.masonry.js" type="text/javascript"></script>
<script src="js/index.js" type="text/javascript"></script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>