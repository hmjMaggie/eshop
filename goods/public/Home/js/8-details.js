//var url="https://jingyan.baidu.com/article/7f41ecec323801593d095c28.html?a=1,b=2"
//window.location.href = url;
//var url = window.location.href
//var arr = url.split("?");
//console.log(arr)


//放大镜效果
$('.pic').mousemove(function(ev){
	var _this=$(this);
	
	var l=ev.pageX-_this.offset().left-$('.zoom').width()/2;
	var t=ev.pageY-_this.offset().top-$('.zoom').height()/2;
	
	//限制不要出框
	if(l<0){l=0};
	if(t<0){t=0};
	
	var maxL=_this.width()-$('.zoom').width();
	var maxT=_this.height()-$('.zoom').height();
	
	if(l>maxL){l=maxL;}
	if(t>maxT){t=maxT;}
	
	$('.zoom').css({"left":l,"top":t}).show();
	$('.pic_max').show();
	$('.pic_max img').css({"left":-l*3,"top":-t*3})	
})
$('.pic').mouseleave(function(){
	$('.zoom,.pic_max').hide();
})

/*点击按钮出现对应的图片*/
$('.btn li').mouseenter(function(){
	var _this=$(this)
	var num=$(this).index();
	
	//因为wrap只是隐藏，并不是remove，查找的时候会从第一个wrap里面查找，所以一定要先找到当前的wrap
	var pic_now=_this.parent().siblings('.pic').children('img');
	var max_now=_this.parent().siblings('.pic_max').children();
	
	_this.addClass('ac').siblings().removeClass('ac');
	
	//对应的的左边图片
	pic_now.hide();
	pic_now.eq(num).show();	
	
	//对应的放大图片
	max_now.hide();
	max_now.eq(num).show();	
})

/*右边颜色切换事件*/
$('.color em').click(function(){
	$(this).css({'opacity':1}).siblings().css({'opacity':'0.5'})
	var index=$(this).index();
	$('.left .option').eq(index).show().siblings('.option').hide();
})
$('.color em').mouseenter(function(){
	$(this).css({'opacity':1}).siblings().css({'opacity':'0.5'})
})

/*购物车加减事件*/
var num=$('.num i').html();
$('.add').click(function(){
	num++;
	$('.num i').html(num);
})
$('.minus').click(function(){
	num--;
	if(num<1){
		num=1;
	}
	$('.num i').html(num);
})

/*加入购物车*/


/*立即购买*/
