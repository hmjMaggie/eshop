;$(function(){
//右切换-----------------------------
		var _left=0;
		$(".mainButtonOne .mainTwoBtn_R").click(function(){
			_left+=300;
			if(_left>1200){
				 _left=1200;
			}
			$(".main2_Ulist").animate({"left":-_left+"px"},300)
		})
//左切换-----------------------------
		$(".mainButtonOne .mainTwoBtn_L").click(function(){
			_left-=300;
			if(_left<0){
				 _left=0;
			}
			$(".main2_Ulist").animate({"left":-_left+"px"},300)
		})
//右切换-----------------------------
		var _leftone=0;
		$(".mainButtonTwo .mainTwoBtn_R").click(function(){
			_leftone+=400;
			if(_leftone>1200){
				 _leftone=1200;
			}
			$(".mFourUlist").animate({"left":-_leftone+"px"},300)
		})
//左切换-----------------------------
		$(".mainButtonTwo .mainTwoBtn_L").click(function(){
			_leftone-=400;
			if(_leftone<0){
				 _leftone=0;
			}
			$(".mFourUlist").animate({"left":-_leftone+"px"},300)
		})
	jQuery(document).ready(function ($) {
		$(".homePageBanner").slideshow({
			width: 1920,
			height: 820,
			transition: ['bar', 'Rain', 'square', 'squareRandom', 'explode']
		});
	});
	$(".homePageBanner").mouseenter(function(){
		$(".banner_Con").animate({"opacity":1},2000)
	})
	$(".homePageBanner").mouseleave(function(){
		$(".banner_Con").animate({"opacity":0},2000)
	})
	
	
})
