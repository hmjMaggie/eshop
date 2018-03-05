
/*账号和验证码页面切换*/
$('.zhang').click(function(){
	$('.zhanghao').show();
	$('.yanzhengma').hide();
	$(this).addClass('yanAc');
	$('.yanzheng').removeClass('yanAc');	
});
$('.yanzheng').click(function(){
	$('.zhanghao').hide();
	$('.yanzhengma').show();
	$(this).addClass('yanAc');
	$('.zhang').removeClass('yanAc');	
})

/*获取验证码*/
$('.btn').click(function(){
	let num=60
	var timer=setInterval(function(){
		num--;
		$('.btn').html(num+'     s     后可再获取')
		
		if(num<0){
			$('.btn').html('获取验证码');
			clearInterval(timer)
		}		
	},1000)	
})

//背景轮播图效果
$(function(){
	var c = 0;		
	setInterval(function(){
		c++;
		c = (c==2)?0:c;
		$('.lunbotu img').eq(c).fadeIn('slow').siblings('img').fadeOut('slow');
	},3000)
});