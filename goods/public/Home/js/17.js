
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
