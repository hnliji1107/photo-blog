function CLASS_PHOTO_UPLOAD(){
	this.init();
}
CLASS_PHOTO_UPLOAD.prototype = {
	init:function(){
		this.$upLoadBar = $('#up_file');
		this.$unUploadTip = $('.unUploadTip');
		this.$operationBtn = $('.operationBtn');
		this.$startUpload = $('#startUpload');
		this.$removeList = $('#removeList');
		this.$albumSelect = $('#albumSelect');
		this.ajaxUrl = 'upload.php';
		this.$miskChild = $('.miskChild');
		this.fileNameArr = [];
		this.fileSizeArr = [];
		this.albumId = '';
		
		this.plug('uploadify');
		this.view('clearDiv'); //样式兼容ie6、7
		this.event('removeList');
		this.event('saveFile');
		this.event('notAlbumTip');
	},
	view:function(method,arg){
		var self = this;
		var _class = {
			clearDiv:function(){
				var $uploadifyQueue = $('#up_fileQueue');
				$uploadifyQueue.removeClass('uploadifyQueue');
			},
			checkAlbumExist:function(){
				var url = window.location.href;
				var pattern = /\S+?albumId=(\d+)$/;

				if(pattern.test(url)){
					var arr = pattern.exec(url);
					if(arr[1] !== ''){
						self.albumId = arr[1];
					}
				}
				else{
					if(self.$albumSelect.size() <= 0){
						alert('您还没有相册，请创建相册后再上传图片。');
						return false;
					}
					else{
						self.albumId = self.$albumSelect.val();
					}
				}
			}
		};
		return _class[method](arg);
	},
	event:function(method,arg){
		var self = this;
		var _class = {
			removeList:function(){
				self.$removeList.bind('click',function(){
					var $uploadifyQueue = $('#up_fileQueue');
					var $fileSizeInputs = $uploadifyQueue.find('input.fileSize');

					$fileSizeInputs.each(function(i,o){
						self.fileSizeArr.push($(o).val());
					});

					var dataObj = {
						fileNameArr:self.fileNameArr,
						act:'remove'
					};

					self.model('ajax',[self.ajaxUrl,dataObj,function(data){
						if(data.state === 1){
							self.fileNameArr = [];
							self.fileSizeArr = [];
							$uploadifyQueue.empty();
							self.$unUploadTip.show();
							self.$removeList.hide();
							self.$startUpload.hide();
						}
				    },function(XMLHttpRequest,textStatus,errorThrown){
				    	alert(textStatus);
				    }]);
				})
			},
			saveFile:function(){
				self.$startUpload.bind('click',function(){
					var $fileSizeInputs = $('#up_fileQueue').find('input.fileSize');
					self.fileSizeArr = [];
					$fileSizeInputs.each(function(i,o){
						self.fileSizeArr.push($(o).val());
					});

					self.view('checkAlbumExist');

					var dataObj = {
						fileNameArr:self.fileNameArr,
						fileSizeArr:self.fileSizeArr,
						album_id:self.albumId,
						act:'save'
					};

				    self.model('ajax',[self.ajaxUrl,dataObj,function(data){
				    	if(data.state === 1){
				    		window.location.href = 'photoList.php?albumId='+self.albumId;
				    	}
				    	else{
				    		alert(data.msg);
				    	}
				    },function(XMLHttpRequest,textStatus,errorThrown){
				    	alert(textStatus);
				    }]);
				});
			},
			notAlbumTip:function(){
				if(self.$miskChild.size() === 1){
					self.$miskChild.bind('click',function(){
						alert('您尚未创建相册，请创建相册后再上传图片。');
					});
				}
			}
		};
		return _class[method](arg);
	},
	plug:function(method,arg){
		var self = this;
		var _class = {
			uploadify:function(){
				self.$upLoadBar.uploadify({
					'uploader': '/mysmarty/swf/uploadify.swf',
			        'script': '/mysmarty/upload.php',
			        // 'cancelImg': '/mysmarty/images/cancel.png',
			        'buttonImg': '/mysmarty/images/upload.png',
			        'width':84,
			        'height':32,
			        'folder': '/mysmarty/tmp',
			        'auto':true,
			        'multi':true,
			        'removeCompleted':false,
			        'fileExt':'*.jpg;*.jpeg;*.gif;*.png;',
				    'fileDesc':'文件类型(.JPG, .GIF, .PNG)',
			        'onSelectOnce':function(e,data){
			        	self.$unUploadTip.hide();
			        	self.view('checkAlbumExist');
			        },
			        'onComplete':function(event,queueId,fileObj,response,data){
			        	var responseJson = eval('('+response+')');
			        	if(responseJson.state === 1){
			        		self.fileNameArr.push(responseJson.msg);
			        	}
			        	else if(responseJson.state === 0){
			        		alert(responseJson.msg);
			        	}
			        	
			        },
			        'onAllComplete':function(event,data){    
			        	self.$operationBtn.show();
			        	if(self.$removeList.is(':hidden')){
			        		self.$removeList.show();
			        	}
			        	if(self.$startUpload.is(':hidden')){
			        		self.$startUpload.show();
			        	}
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
	}

}
$(function(){
	new CLASS_PHOTO_UPLOAD();
})