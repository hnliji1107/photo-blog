(function($){
	function CLASS_AVATAR_DIALOG(options){ //抽象类(属性，初始化)
		this.opts = options;
		this.init();
	}

	CLASS_AVATAR_DIALOG.prototype={
		init: function(){
			this.$triggerBtn = $('.triggerBtn');

			this.event('addDialog');
			this.event('disMenu');
		},
		event: function(method,arg){
			var self = this;
			var _class = {
				addDialog:function(){
					self.opts.obj.hover(
						function(){
							var url = $(this).attr('href');
							var avatar = $(this).children('img').attr('src');
							var param = $(this).children('img').attr('authorId');
							var dialog = '<div class="dialogAndMenu">\
									<div class="avatarTrigger clearfix">\
										<div class="triggerLeft">\
											<a href="' + url + '">\
												<img src="' + avatar + '" width="48" height="48" />\
											</a>\
										</div>\
										<div class="triggerLeft">\
											<a href="javascript:;" class="triggerBtn"></a>\
										</div>\
									</div>\
									<div class="avatarMenu">\
										<ul class="menu">\
											<li><a href="account.php?userId=' + param + '">个人档案</a></li>\
											<li><a href="myPhotos.php?userId=' + param + '">照片</a></li>\
											<li><a href="albumList.php?userId=' + param + '">相册</a></li>\
											<li><a href="personIndex.php?userId=' + param + '">动态</a></li>\
											<li><a href="friend.php?userId=' + param + '">朋友</a></li>\
										</ul>\
									</div>\
								</div>';

							$(this).css({
								'position':'relative'
							}).append(dialog).children('.dialogAndMenu').css({
								'position':'absolute',
								'top':'-2px',
								'left':'-8px',
								'z-index':'999'
							});
						},
						function(){
							$(this).removeAttr('style').children('.dialogAndMenu').remove();
						}
					);
				},
				disMenu:function(){
					self.$triggerBtn.live('click',function(){
						$(this).parent().parent().next('.avatarMenu').show();
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

	$.fn.avatarDialog = function(options){
		var opts = $.extend({},$.fn.defaults,options);
		this.each(function(){
			opts.obj = $(this);
			new CLASS_AVATAR_DIALOG(opts);
		});
	}

	$.fn.defaults = {};

})(jQuery)