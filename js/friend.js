function CLASS_FRIEND_LIST(){ //抽象类(属性，初始化)
	this.init();
}

CLASS_FRIEND_LIST.prototype={
	init: function(){
		this.$avatarA = $('.selfInfor').children('a');

		this.plug('avatarDialog',[this.$avatarA]);
	},
	event: function(method,arg){
		var self = this;
		var _class = {
			
		};

		return _class[method](arg);
	},
	plug: function(method,arg){
		var self = this;
		var _class = {
			avatarDialog:function(arg){
				arg[0].avatarDialog({
					avatar:arg[1],
					url:arg[2]
				});
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
	new CLASS_FRIEND_LIST();
})