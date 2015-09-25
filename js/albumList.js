function CLASS_ALBUM_LIST(){ //抽象类(属性，初始化)
	this.init();
}

CLASS_ALBUM_LIST.prototype={
	init: function(){
		this.$selfInforA = $('.selfInfor').children('a');

		this.plug('avatarDialog',[this.$selfInforA]);
	},
	plug:function(method,arg){
		var self = this;
		var _class = {
			avatarDialog:function(arg){
				arg[0].avatarDialog();
			}
		};
		return _class[method](arg);
	}
}

$(function(){
	new CLASS_ALBUM_LIST();
})