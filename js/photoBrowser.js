function CLASS_PHOTO_BROWSER(){ //抽象类(属性，初始化)
	this.init();
}

CLASS_PHOTO_BROWSER.prototype={
	init: function(){
		this.$prevBtn = $('.prevBtn');
		this.$nextBtn = $('.nextBtn');
		this.$allPhotos = $('.allPhotos');
		this.$photoIndex = $('#photoIndex');
		this.$deleteBtn = $('a.delete');
		this.photoId = $('#photoId').val();
		this.ajaxUrl = 'photoBrowser.php';
		this.nextPhotoUrl = $('a.photoNext').attr('href');
		this.photoNum = this.$allPhotos.children('.browserPhoto').size();
		this.onePhotoWidth = 80;
		this.$saveEditBtn = $('a.saveEdit');
		this.$setAlbumCoverBtn = $('.setAlbumCover');
		this.$commentPostBtn = $('a.postBtn');
		this.$postIco = $('.postIco');
		this.$ownerIco = $('.ownerIco');
		this.photoOwnerId = $('.postIco').children('img').attr('authorId');
	
		this.view('setPhotoPos');
		this.event('prevMove');
		this.event('nextMove');
		this.event('deletePhoto');
		this.event('editNameDesc');
		this.event('setAlbumCover');
		this.event('postComment');
		this.plug('avatarDialog',[this.$postIco]);
		this.plug('avatarDialog',[this.$ownerIco]);
	},
	view: function(method,arg){
		var self = this;
		var _class = {
			setPhotoPos: function(){
				var nowPhotoPos = -self.onePhotoWidth*(parseInt(self.$photoIndex.val())-1)+'px';
				self.$allPhotos.css('margin-left',nowPhotoPos);
			},
			setMisk: function(arg){
				arg[0].css({'position':'relative'}).append('<div class="misk"></div>').children('.misk')
						.css({'position':'absolute','left':'0','top':'0','width':arg[0].width()+'px','height':arg[0].height()+'px'}).fadeTo('fast',0.5);
			}
		};
		return _class[method](arg);
	},
	event: function(method,arg){
		var self = this;
		var _class = {
			prevMove: function(){
				self.$prevBtn.bind('click',function(){
					var maxMoveWidth = 0;
					var nowMoveWidth = parseInt(self.$allPhotos.css('margin-left'));

					if(nowMoveWidth >= maxMoveWidth){
						alert('已经是第一张了。')
					}
					else{
						self.$allPhotos.animate({'margin-left':'+='+self.onePhotoWidth+'px'},500);
					}
				});
			},
			nextMove: function(){
				self.$nextBtn.bind('click',function(){
					var maxMoveWidth = -(self.photoNum-3)*self.onePhotoWidth;
					var nowMoveWidth = parseInt(self.$allPhotos.css('margin-left'));

					if(nowMoveWidth <= maxMoveWidth){
						alert('已经是最后一张了。');
					}
					else{
						self.$allPhotos.animate({'margin-left':'-='+self.onePhotoWidth+'px'},500);
					}
				});
			},
			deletePhoto: function(){
				self.$deleteBtn.bind('click',function(){
					var isSure =  confirm('确定要删除该张照片吗？');
					if(isSure){
						self.model('ajax',[self.ajaxUrl,{photoId:self.photoId,act:'delPh'},function(data){
							if(data.state === 1){
								window.location.href = self.nextPhotoUrl;
							}
							else{
								alert(data.msg);
							}
						},function(XMLHttpRequest,textStatus,errorThrown){
							alert(textStatus);
						}]);
					}
				});
			},
			editNameDesc: function(){
				self.$saveEditBtn.bind('click',function(){
					var editName = $.trim($(this).parent().prevAll('input').val());
					var photoDesc = $.trim($(this).parent().prevAll('textarea').val());
					if(editName === ''){
						editName = '未命名';
					}

					self.model('ajax',[self.ajaxUrl,{photoId:self.photoId,editName:editName,photoDesc:photoDesc,act:'editPh'},function(data){
						if(data.state === 1){
							window.location.href = window.location.href;
						}
						else{
							alert(data.msg);
						}
					},function(XMLHttpRequest,textStatus,errorThrown){
						alert(textStatus);
					}]);
				});
			},
			setAlbumCover: function(){
				self.$setAlbumCoverBtn.bind('click',function(){
					self.model('ajax',[self.ajaxUrl,{photoId:self.photoId,act:'setAlbumCover'},function(data){
						alert(data.msg);
					},function(XMLHttpRequest,textStatus,errorThrown){
						alert(textStatus);
					}]);
				});
			},
			postComment: function(){
				self.$commentPostBtn.bind('click',function(){
					var postText = $.trim($(this).prev('textarea').val());
					if(postText !== ''){
						self.model('ajax',[self.ajaxUrl,{photoOwnerId:self.photoOwnerId,photoId:self.photoId,postText:postText,act:'addComment'},function(data){
							if(data.state === 1){
								window.location.href = window.location.href;
							}else{
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
	plug:function(method,arg){
		var self = this;
		var _class = {
			avatarDialog:function(arg){
				arg[0].avatarDialog();
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
	new CLASS_PHOTO_BROWSER();
})