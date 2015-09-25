function CLASS_HEADER(){
	this.init();
}
CLASS_HEADER.prototype={
	init: function(){
		this.$son = $('.son');
		this.$tipIco = $('.tipIco');

		this.event('showMenu');
	},
	event: function(method,arg){
		var self = this;
		var _class = {
			showMenu: function(){
				self.$tipIco.toggle(
					function(){
						self.$son.show();
					},
					function(){
						self.$son.hide();
					}
				);
			}
		};
		return _class[method](arg);
	}
}
$(function(){
	new  CLASS_HEADER();
})