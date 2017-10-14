function input() {
	var ubb = $('#ubb');
	var ubbimg = $('img');
	var fm = $('textarea');
	var flag_font=true;
	var flag_color=true;
	var flag_pic=true;

	ubbimg.eq(0).on('click',function(){
		if(flag_font){
			$('#font').show();
			flag_font=false;
		}else{
			$('#font').hide();
			flag_font=true;
		}
	});
	$('#input-font').on('click',function(){
		layer.prompt({title: '请输入字体', formType: 0,value:'px'}, function(font, index){
			$('#font').hide();
			flag_font=true;
			if (font) {
				if (/[0-9]*px$/.test(font)) {
					content('[size='+font+'][/size]');
					layer.close(index);
				} else {
					layer.msg('字体格式不对',{
						time: 500
					});
				}
			}
		});
	});

	$('#font strong').not('#input-font').on('click',function(){
		content('[size='+$(this).text()+'][/size]');
		$('#font').hide();
		flag_font=true;
	});

	ubbimg.eq(2).on('click',function(){
		content('[b][/b]');
	});
	ubbimg.eq(3).on('click',function(){
		content('[i][/i]');
	});
	ubbimg.eq(4).on('click',function(){
		content('[u][/u]');
	});
	ubbimg.eq(5).on('click',function(){
		content('[s][/s]');
	});
	ubbimg.eq(7).on('click',function(){
		if(flag_color){
			$('#color').show();
			flag_color=false;
		}else{
			$('#color').hide();
			flag_color=true;
		}
	});
	$('#input-color').on('click',function(){
		layer.prompt({title: '请输入颜色', formType: 0,value:'#'}, function(color, index){
			$('#color').hide();
			flag_color=true;
			if (color) {
				if (/^#[0-9]{3,6}$/.test(color)) {
					content('[color='+color+'][/color]');
					layer.close(index);
				} else {
					layer.msg('颜色格式不对',{
						time: 500
					});
				}
			}
		});
	});

	$('#color strong').not('#input-color').on('click',function(){
		content('[color='+$(this).data('color')+'][/color]');
		$('#color').hide();
		flag_color=true;
	});
	ubbimg.eq(8).on('click',function(){
		layer.prompt({title: '请输入网址', formType: 0,value:'http://'}, function(url, index){
			if (url) {
				if (/^https?:\/\/(\w+\.)?[\w\-\.]+(\.\w+)+$/.test(url)) {
					content('[url]'+url+'[/url]');
					layer.close(index);
				} else {
					layer.msg('网址格式不对',{
						time: 500
					});
				}
			}

		});
	});
	ubbimg.eq(9).on('click',function(){
		layer.prompt({title: '请输入电子邮件', formType: 0,value:'@'}, function(email, index){
			if (email) {
				if (/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/.test(email)) {
					content('[email]'+email+'[/email]');
					layer.close(index);
				} else {
					layer.msg('电子邮件格式不对',{
						time: 500
					});
				}
			}
		});
	});
	ubbimg.eq(10).on('click',function(){
		layer.prompt({title: '请输入图片地址', formType: 0}, function(img, index){
			content('[img]'+img+'[/img]');
			layer.close(index);
		});
	});
	ubbimg.eq(11).on('click',function(){
		layer.prompt({title: '请输入flash地址', formType: 0,value:'http://'}, function(flash, index){
			if (flash) {
				if (/^https?:\/\/(\w+\.)?[\w\-\.]+(\.\w+)+/.test(flash)) {
					content('[flash]'+flash+'[/flash]');
					layer.close(index);
				} else {
					layer.msg('flash格式不对',{
						time: 500
					});
				}
			}
		});
	});
	ubbimg.eq(12).on('click',function(){
		layer.prompt({title: '请输入视频地址', formType: 0,value:'http://'}, function(video, index){
			if (video) {
				if (/^https?:\/\/(\w+\.)?[\w\-\.]+(\.\w+)+/.test(video)) {
					content('[video]'+video+'[/video]');
					layer.close(index);
				} else {
					layer.msg('视频格式不对',{
						time: 500
					});
				}
			}
		});
	});
	ubbimg.eq(14).on('click',function(){
		content('[left][/left]');
	});
	ubbimg.eq(15).on('click',function(){
		content('[center][/center]');
	});
	ubbimg.eq(16).on('click',function(){
		content('[right][/right]');
	});
	ubbimg.eq(18).on('click',function(){
		fm.height(fm.height()+10);
	});
	ubbimg.eq(19).on('click',function(){
		fm.height(fm.height()-10);
	});
	ubbimg.eq(20).on('click',function(){
		if(flag_font){
			$('#pic').show();
			flag_font=false;
		}else{
			$('#pic').hide();
			flag_font=true;
		}
	});
	$('#pic .pic').on('click',function(){
		content('[img]'+$(this).attr('src')+'[/img]');
		$('#pic').hide();
		flag_font=true;
	})
	function content(string) {
		var content_u = fm.val();
		fm.val(content_u+string);
	};
};


input();
