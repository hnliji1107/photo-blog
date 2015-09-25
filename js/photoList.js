function CLASS_PHOTO_LIST(){ //抽象类(属性，初始化)
	this.init();
}

CLASS_PHOTO_LIST.prototype={
	init: function(){
		this.$deleteBtn = $('a.delAlbum');
		this.albumId = $('input.albumId').val();
		this.ajaxUrl = 'photoList.php';
		this.$smavatar = $('.smavatar');
		this.$ownerIcoA = $('.ownerIco').children('a');
		this.$photoColumn = $('.photoColumn');

		this.event('delAlbum');
		this.plug('avatarDialog',[this.$smavatar]);
		this.plug('avatarDialog',[this.$ownerIcoA]);
		this.plug('masonry',[this.$photoColumn]);
	},
	event: function(method,arg){
		var self = this;
		var _class = {
			delAlbum: function(){
				self.$deleteBtn.bind('click',function(){
					var isSure =  confirm('确定要删除该相册吗？\n\n如果确定，该相册里的所有照片都将被删除。');
					if(isSure){
						self.model('ajax',[self.ajaxUrl,{albumId:self.albumId,act:'delAlbum'},function(data){
							if(data.state === 1){
								window.location.href = 'albumList.php';
							}
							else if(data.state === 0){
								alert(data.msg);
							}
						},function(XMLHttpRequest,textStatus,errorThrown){
							alert(textStatus);
						}]);
					}
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
	new CLASS_PHOTO_LIST();
})