function CLASS_LOGIN_CHECK(){ //抽象类(属性，初始化)
	this.init();
}

CLASS_LOGIN_CHECK.prototype={
	init: function(){
		this.$userName = $('#userName');
		this.$password = $('#password');
		this.ajaxUrl = 'login.php';
		this.$submitBtn = $('a.btnLeft');
		this.event('login');
	},
	event: function(method,arg){
		var self = this;
		var _class = {
			login: function(){
				self.$submitBtn.bind('click',function(){
					if($.trim(self.$userName.val())===''){
						alert('请输入用户名');
						self.$userName.focus();
						return false;
					}
					
					if($.trim(self.$password.val())===''){
						alert('请输入密码');
						self.$password.focus();
						return false;
					}
					
					self.model('ajax',[self.ajaxUrl,{userName:$.trim(self.$userName.val()),password:$.trim(self.$password.val())},function(data){
			    		if(data.state === 1){
			    			window.location.href = 'personIndex.php';
			    		}
			    		else if(data.state === 0){
			    			alert(data.msg);
			    		}
					},function(XMLHttpRequest,textStatus,errorThrown){
						alert(textStatus);
					}]);

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
	new CLASS_LOGIN_CHECK();
})