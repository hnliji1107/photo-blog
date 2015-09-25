function CLASS_PERSONINDEX(){ //抽象类(属性，初始化)
	this.init();
}

CLASS_PERSONINDEX.prototype={
	init: function(){
		this.$ownerA = $('.owner').children('a');
		this.$ownerIcoA = $('.ownerIco').children('a');
		this.$xTabs = $('.xTabs').children('li').children('a');
		this.$Dynamics = $('.Dynamic');
		this.$addFrBtn = $('.addFrBtn');
		this.ajaxUrl = 'personIndex.php';

		this.plug('avatarDialog',[this.$ownerA]);
		this.plug('avatarDialog',[this.$ownerIcoA]);
		this.event('toggleTag');
		this.event('addFriend');
	},
	event: function(method,arg){
		var self = this;
		var _class = {
			toggleTag:function(){
				self.$xTabs.bind('click',function(){
					var index = self.$xTabs.index(this);
					self.$xTabs.not(index).removeClass('current').eq(index).addClass('current');
					self.$Dynamics.not(index).hide().eq(index).show();
				});
			},
			addFriend:function(){
				self.$addFrBtn.bind('click',function(){
					var friendId = $(this).prevAll('.uavatar').find('img').attr('authorId');
					if(friendId !== self.userId){
						self.model('ajax',[self.ajaxUrl,{friendId:friendId},function(data){
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
	plug:function(method,arg){
		var self = this;
		var _class = {
			avatarDialog:function(arg){
				arg[0].avatarDialog();
			}
		};
		return _class[method](arg);
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
	new CLASS_PERSONINDEX();
})