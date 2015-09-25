function CLASS_MYPHOTOS(){ //抽象类(属性，初始化)
	this.init();
}

CLASS_MYPHOTOS.prototype={
	init: function(){
		this.$selfInforA = $('.selfInfor').children('a');
		this.$f_r = $('.f_r');
	
		this.plug('avatarDialog',[this.$selfInforA]);
		this.plug('masonry',[this.$f_r]);
	},
	plug:function(method,arg){
		var self = this;
		var _class = {
			avatarDialog:function(arg){
				arg[0].avatarDialog();
			},
			masonry:function(arg){
				arg[0].masonry({
				    itemSelector : '.myPhoto'
				});
			}
		};
		return _class[method](arg);
	}
}

$(function(){
	new CLASS_MYPHOTOS();
})