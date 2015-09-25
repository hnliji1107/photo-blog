function CLASS_ALBUM_CREATE(){
	this.init();
}
CLASS_ALBUM_CREATE.prototype = {
	init:function(){
		this.$createBtn = $('a.create');
		this.$albumName = $('#title');
		this.$albumDesc = $('#albumDescription');
		this.ajaxUrl = 'albumCreate.php';

		this.event('albumCreate');
	},
	event:function(method,arg){
		var self = this;
		var _class = {
			albumCreate:function(){
				self.$createBtn.bind('click',function(){
					var nameVal = $.trim(self.$albumName.val());
					var descVal = $.trim(self.$albumDesc.val());

					if(nameVal === ''){
						alert('相册名称不能为空！');
						self.$albumName.focus();
						return false;
					}

					self.model('ajax',[self.ajaxUrl,{nameVal:nameVal,descVal:descVal},function(data){
						if(data.state === 1){
							window.location.href = 'albumList.php';
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
	plug:function(method,arg){
		var self = this;
		var _class = {
			
			
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
	new CLASS_ALBUM_CREATE();
})