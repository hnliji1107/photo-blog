function CLASS_REGIST_CHECK(){ //抽象类(属性，初始化)
	this.init();
}

CLASS_REGIST_CHECK.prototype={
	init: function(){
		this.$email = $('#email');
		this.$userName = $('#userName');
		this.$password = $('#password');
		this.$repassword = $('#repassword');
		this.$verificationCode = $('#verificationCode');
		this.ajaxUrl = 'regist.php';
		this.$submitBtn = $('.regist');
		this.$refreshVerCodeImg = $('#refreshVerCode');
		this.$refreshVerCodeA = $('a.refreshVerCode');

		this.event('regist');
		this.event('refreshVerCode');
	},
	event: function(method,arg){
		var self = this;
		var _class = {
			regist: function(){
				self.$submitBtn.bind('click',function(){
					var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
					
					if($.trim(self.$email.val())===''){
						alert('请输入邮箱');
						self.$email.focus();
						return false;
					}

					if(!reg.test($.trim(self.$email.val()))){
						alert('邮箱格式不对!');
						self.$email.focus();
						return false;
					}

					if($.trim(self.$userName.val())===''){
						alert('请输入用户名');
						self.$userName.focus();
						return false;
					}

					if($.trim(self.$userName.val()).length>16 || $.trim(self.$userName.val()).length < 6){
						alert('用户名长度必须在6-16个字之间!');
						self.$userName.focus();
						return false;
					}
					
					if($.trim(self.$password.val())===''){
						alert('请输入密码');
						self.$password.focus();
						return false;
					}
					
					if($.trim(self.$password.val()).length>16 || $.trim(self.$password.val()).length < 6){
						alert('密码长度必须在6-16个字之间!');
						self.$password.focus();
						return false;
					}

					if($.trim(self.$password.val()) !== $.trim(self.$repassword.val())){
						alert('输入密码不匹配,请重新确认');
						self.$repassword.focus();
						return false;
					}

					if($.trim(self.$repassword.val()).length>16 || $.trim(self.$repassword.val()).length < 6){
						alert('密码长度必须在6-16个字之间!');
						self.$repassword.focus();
						return false;
					}


					if($.trim(self.$verificationCode.val()) === ''){
						alert('请输入验证码!');
						self.$verificationCode.focus();
						return false;
					}
					
					self.model('ajax',[self.ajaxUrl,{userName:$.trim(self.$userName.val()),email:$.trim(self.$email.val()),password:$.trim(self.$password.val()),verificationCode:$.trim(self.$verificationCode.val())},function(data){
			    		self.$refreshVerCodeImg.attr('src','checkCode.php?t='+Math.random());
			    		if(data.state === 1){
			    			window.location.href = 'personIndex.php';
			    		}
			    		else if(data.state === 0){
			    			alert(data.msg);
			    		}
					},function(XMLHttpRequest,textStatus,errorThrown){
						alert(textStatus);
						self.$refreshVerCodeImg.attr('src','checkCode.php?t='+Math.random());
					}]);

				});
			},
			refreshVerCode:function(){
				self.$refreshVerCodeImg.bind('click',function(){
					$(this).attr('src','checkCode.php?t='+Math.random());
				});
				self.$refreshVerCodeA.bind('click',function(){
					self.$refreshVerCodeImg.attr('src','checkCode.php?t='+Math.random());
				});
			}
		};
		return _class[method](arg);

	},
	plug: function(){

	},
	model:function(method,arg){
		var self = this;
		var _class = {
			ajax:function(arg){
				$.ajax({
					type:'post',
					url:arg[0],
					data:arg[1],
					dataType:'json',
					success:arg[2],
					error:arg[3]
				});
			}
		};
		return _class[method](arg);
	}
}

$(function(){
	new CLASS_REGIST_CHECK();
})