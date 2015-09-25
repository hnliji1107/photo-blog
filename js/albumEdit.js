function CLASS_ALBUM_EDIT(){ //抽象类(属性，初始化)
	this.init();
}

CLASS_ALBUM_EDIT.prototype={
	init: function(){
		this.$albumId = $('.albumId');
		this.$albumName = $('#title');
		this.$albumDesc = $('#albumDescription');
		this.ajaxUrl = 'albumEdit.php';
		this.$saveBtn = $('a.save');
		
		this.event('edit');
	},
	event: function(method,arg){
		var self = this;
		var _class = {
			edit: function(){
				self.$saveBtn.bind('click',function(){
					if($.trim(self.$albumName.val())===''){
						alert('相册名称不能为空.');
						self.$albumName.focus();
						return false;
					}
					
					var infoArr = {
						albumId : $.trim(self.$albumId.val()),
						albumName : $.trim(self.$albumName.val()),
						albumDesc : $.trim(self.$albumDesc.val())
					};

					self.model('ajax',[self.ajaxUrl,infoArr,function(data){
			    		if(data.state === 1){
			    			window.location.href = 'photoList.php?albumId=' + infoArr.albumId;
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
	new CLASS_ALBUM_EDIT();
})