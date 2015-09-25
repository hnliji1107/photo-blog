function CLASS_INDEX(){ //抽象类(属性，初始化)
	this.init();
}

CLASS_INDEX.prototype={
	init: function(){
		this.$ownerIcoA = $('.ownerIco').children('a');
		this.$photoColumn = $('.photoColumn');
		
		this.plug('avatarDialog',[this.$ownerIcoA]);
		this.plug('masonry',[this.$photoColumn]);
	},
	plug:function(method,arg){
		var self = this;
		var _class = {
			avatarDialog:function(arg){
				arg[0].avatarDialog();
			},
			masonry:function(arg){
				arg[0].masonry({
				    itemSelector : '.list',
					columnWidth : 20
				});
			}
		};
		return _class[method](arg);
	}
}

$(function(){
	new CLASS_INDEX();
})