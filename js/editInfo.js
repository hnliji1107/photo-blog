function CLASS_EDIT_INFO(){ //抽象类(属性，初始化)
	this.init();
}

CLASS_EDIT_INFO.prototype={
	init: function(){
		this.$saveAvatarBtn = $('.saveAvartar');
		this.$saveNickNameBtn = $('.saveNickName');
		this.$saveSexBtn = $('.saveSex');
		this.$saveEmailBtn = $('.saveEmail');
		this.$savePasswordBtn = $('.savePassword');
		this.$saveSelfIntroBtn = $('.saveSelfIntro');
		this.ajaxUrl = 'editInfo.php';
		
		this.event('saveAvatar');
		this.event('saveNickName');
		this.event('saveSex');
		this.event('saveEmail');
		this.event('savePassword');
		this.event('saveSelfIntro');
	},
	event: function(method,arg){
		var self = this;
		var _class = {
			saveAvatar: function(){
				self.$saveAvatarBtn.bind('click',function(){
					var avatar = $.trim($(this).parent().prevAll("input[type='file']").val());
					var pattern = /.+\.(jpg|JPG|jpeg|JPEG|gif|GIF|png|PNG)$/;

					if(avatar === ''){
						alert('请选择图片');
						return false;
					}
					if(!pattern.test(avatar)){
						alert('上传图片格式错误');
						return false;
					}
				});
			},
			saveNickName: function(){
				self.$saveNickNameBtn.bind('click',function(){
					var nickName = $.trim($(this).parent().prev('input').val());
					if(nickName !== ''){
						self.model('ajax',[self.ajaxUrl,{nickName:nickName},function(data){
							alert(data.msg);
						},function(XMLHttpRequest,textStatus,errorThrown){
							alert(textStatus);
						}]);
					}
				});
			},
			saveSex: function(){
				self.$saveSexBtn.bind('click',function(){
					var checkObj = $(this).parent().prev('p').find("input[type='radio']:checked");
					if(checkObj.size() > 0){
						self.model('ajax',[self.ajaxUrl,{sex:checkObj.val()},function(data){
							alert(data.msg);
						},function(XMLHttpRequest,textStatus,errorThrown){
							alert(textStatus);
						}]);
					}

				});
			},
			saveEmail: function(){
				self.$saveEmailBtn.bind('click',function(){
					var email = $.trim($(this).parent().prev('input').val());
					if(email !== ''){
						self.model('ajax',[self.ajaxUrl,{email:email},function(data){
							alert(data.msg);
						},function(XMLHttpRequest,textStatus,errorThrown){
							alert(textStatus);
						}]);
					}
				});
			},
			savePassword: function(){
				self.$savePasswordBtn.bind('click',function(){
					var password = $.trim($(this).parent().prev('input').val());
					if(password !== ''){
						self.model('ajax',[self.ajaxUrl,{password:password},function(data){
							alert(data.msg);
						},function(XMLHttpRequest,textStatus,errorThrown){
							alert(textStatus);
						}]);
					}
				});
			},
			saveSelfIntro: function(){
				self.$saveSelfIntroBtn.bind('click',function(){
					var selfIntro = $.trim($(this).parent().prev('textarea').val());
					if(selfIntro !== ''){
						self.model('ajax',[self.ajaxUrl,{selfIntro:selfIntro},function(data){
							alert(data.msg);
						},function(XMLHttpRequest,textStatus,errorThrown){
							alert(textStatus);
						}]);
					}
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
	new CLASS_EDIT_INFO();
})