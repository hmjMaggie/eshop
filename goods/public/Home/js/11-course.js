
/*悬浮出现相应的图函数*/	
var imgList=$(".picAll img")
var aBtn=$(".yuanAll .yuan");
var preIndex;

//鼠标进入按钮事件
aBtn.mouseenter(function(){
	$(this).addClass('ac').siblings().removeClass('ac');
	$(this).css({'transition':'all 1s','transform': 'scale(1.5)'})

	var curIndex=$(this).index();
	
	imgList.hide();
	imgList.eq(curIndex).css({
		"transition":"transform 2s,opacity 2s",
		"transform":"scale(1.0)",
		"opacity":1
	}).show();
})

//鼠标离开按钮事件
aBtn.mouseleave(function(){
	$(this).addClass('ac');
	$(this).css({'transition':'all 1s','transform': 'scale(1)'})
	
	var curIndex=$(this).index();
	
	imgList.hide();
	imgList.eq(curIndex).css({
		"transition":"transform 2s,opacity 2s",
		"transform":"scale(0)",
		"opacity":0,
	});	
})
	