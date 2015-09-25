<?php /* Smarty version Smarty 3.1-RC1, created on 2012-04-25 13:17:28
         compiled from ".\templates\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65764f9788e8669a52-54751658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ea5b86a6c9499941aa99e036b01fe1fb6069ca2' => 
    array (
      0 => '.\\templates\\profile.tpl',
      1 => 1334561172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65764f9788e8669a52-54751658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f9788e87c2e7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9788e87c2e7')) {function content_4f9788e87c2e7($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="wrapper" class="clearfix">
		<!-- Start第一层 -->
		<div class="top">
			<div class="selfInfor clearfix">
				<a href="#"><img src="images/avatar.gif" alt="你的头像" /></a>
				<div class="left">
					<h1 id="titleName" class="yourAlbum" style="margin-bottom:0;">修改个人档案</h1>
					<ul id="sonNav" class="clearfix">
						<li><a href="#">你的帐户</a></li>
						<li class="last"><a href="#">个人档案</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End第一层 -->

		<!-- Start第二层 -->
		<div class="bottom">
			<!-- 左侧 -->
			<div class="f_l">
				<div class="modifyTip">
					<p class="instruct">也许你是想修改这些信息:</p>
					<ul>
						<li><a href="#" target="_blank">你的昵称</a></li>
						<li><a href="#" target="_blank">你的个性头像</a></li>
					</ul>
				</div>
			</div>

			<!-- 右侧 -->
			<div class="f_r">
				<div class="modifyInfor">
					<p class="instruct">为了别人更好的了解你，建议填写*的内容</p>
					<ul class="modify">
						<li>
							<label>
								<h2>真实姓名</h2>
								<input type="text" size="30" name="user" id="user" class="user txt" />
							</label>
							<p class="instruct">未经允许,我们不会公开你的真名</p>
						</li>
						<li>
							<label>
								<h2>*常用邮箱</h2>
								<input type="text" size="30" name="email" id="email" class="email txt" />
							</label>
						</li>
						<li>
							<label>
								<h2>常居地:</h2>
								<div class="select">
									<select id="selectProvince">
										 <option value="">选择省份</option>
			                             <option value="110000">北京市</option>
			                             <option value="120000">天津市</option>
			                             <option value="130000">河北省</option>
			                             <option value="140000">山西省</option>
			                             <option value="150000">内蒙古自治区</option>
			                             <option value="210000">辽宁省</option>
			                             <option value="220000">吉林省</option>
			                             <option value="230000">黑龙江省</option>
			                             <option value="310000">上海市</option>
			                             <option value="320000">江苏省</option>
			                             <option value="330000">浙江省</option>
			                             <option value="340000">安徽省</option>
			                             <option value="350000">福建省</option>
			                             <option value="360000">江西省</option>
			                             <option value="370000">山东省</option>
			                             <option value="410000">河南省</option>
			                             <option value="420000">湖北省</option>
			                             <option value="430000">湖南省</option>
			                             <option value="440000">广东省</option>
			                             <option value="450000">广西壮族自治区</option>
			                             <option value="460000">海南省</option>
			                             <option value="500000">重庆市</option>
			                             <option value="510000">四川省</option>
			                             <option value="520000">贵州省</option>
			                             <option value="530000">云南省</option>
			                             <option value="540000">西藏自治区</option>
			                             <option value="610000">陕西省</option>
			                             <option value="620000">甘肃省</option>
			                             <option value="630000">青海省</option>
			                             <option value="640000">宁夏回族自治区</option>
			                             <option value="650000">新疆维吾尔自治区</option>
									</select>
									<select id="selectCity">
										<option value="330100">杭州市</option>
										<option value="330200">宁波市</option>
										<option value="330300">温州市</option>
										<option value="330400">嘉兴市</option>
										<option value="330500">湖州市</option>
										<option value="330600">绍兴市</option>
										<option value="330700">金华市</option>
										<option value="330800">衢州市</option>
										<option value="330900">舟山市</option>
										<option value="331000">台州市</option>
										<option value="331100">丽水市</option>
									</select>
								</div>
							</label>
						</li>
						<li>
							<h2>性别</h2>
							<label><input type="radio" size="10" name="sex" class="sex" />女</label>
							<label><input type="radio" size="10" name="sex" class="sex" />男</label>
							<label><input type="radio" size="10" name="sex" class="sex" />保密</label>
						</li>
						<li>
							<label>
								<h2>*生日</h2>
								<div>
									<select class="birthday">
										<option value="">年份</option>
			                             <option value="110000">北京市</option>
			                             <option value="120000">天津市</option>
			                             <option value="130000">河北省</option>
			                             <option value="140000">山西省</option>
			                             <option value="150000">内蒙古自治区</option>
			                             <option value="210000">辽宁省</option>
			                             <option value="220000">吉林省</option>
									</select>
									<select id="selectProvince">
										 <option value="">月份</option>
			                             <option value="110000">北京市</option>
			                             <option value="120000">天津市</option>
			                             <option value="130000">河北省</option>
			                             <option value="140000">山西省</option>
			                             <option value="150000">内蒙古自治区</option>
			                             <option value="210000">辽宁省</option>
			                             <option value="220000">吉林省</option>
			                             <option value="230000">黑龙江省</option>
			                             <option value="310000">上海市</option>
			                             <option value="320000">江苏省</option>
			                             <option value="330000">浙江省</option>
			                             <option value="340000">安徽省</option>
			                             <option value="350000">福建省</option>
			                             <option value="360000">江西省</option>
			                             <option value="370000">山东省</option>
			                             <option value="410000">河南省</option>
			                             <option value="420000">湖北省</option>
			                             <option value="430000">湖南省</option>
			                             <option value="440000">广东省</option>
			                             <option value="450000">广西壮族自治区</option>
			                             <option value="460000">海南省</option>
			                             <option value="500000">重庆市</option>
			                             <option value="510000">四川省</option>
			                             <option value="520000">贵州省</option>
			                             <option value="530000">云南省</option>
			                             <option value="540000">西藏自治区</option>
			                             <option value="610000">陕西省</option>
			                             <option value="620000">甘肃省</option>
			                             <option value="630000">青海省</option>
			                             <option value="640000">宁夏回族自治区</option>
			                             <option value="650000">新疆维吾尔自治区</option>
									</select>
									<select id="selectCity">
										<option value="330100">1</option>
										<option value="330200">2</option>
										<option value="330300">3</option>
										<option value="330400">4</option>
										<option value="330500">5</option>
										<option value="330600">6</option>
										<option value="330700">7</option>
										<option value="330800">8</option>
										<option value="330900">9</option>
										<option value="331000">10</option>
									</select>
								</div>
							</label>
						</li>
						<li>
							<label>
								<h2>*自我简介</h2>
								<textarea></textarea>
							</label>
						</li>
						<li><a href="javascript:;" class="btn save">保存我的信息</a>
					</ul>
				</div>
			</div>
		</div>
		<!-- End第二层 -->
		
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>