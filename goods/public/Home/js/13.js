$(function(){
//	var width=$('.alertBox').width();
//	var height=$('.alertBox').height();
////	var popupHeight = $('.alertBox').height();  
////  var popupWidth = $('.alertBox').width(); 
//// 	var left1 = windowWidth / 2 - popupWidth / 2, 
////	var top1 = windowHeight / 2 - popupHeight / 2,
//	var container = $('window');  
////  $(".alertBox").css("width",width+"px");  
////  $(".alertBox").css("height",height+"px");  
//  $(".alertBox").css("top",(container.height()-height)/2+"px");  
//  $(".alertBox").css("left",(container.width()-width)/2+"px");  
//  console.log($('.alertBox').top.left);
//    opacity : "show" 
    //点击触发
//  $('.radio .top1').click(function(){
//  	$('.alertBox').show();
//  	$('.model').show();
//  })
	//设定CSS样式
     var popupHeight = $('.alertBox').height();  
	 var popupWidth = $('.alertBox').width(); 
	 var height = $(window).height();
	 var width = $(window).width()
	 $('.alertBox').css({'left':(width-popupWidth)/2+'px','top':(height-popupHeight)/2+'px'})
 	//按钮触发
	$('.alink1').onclick(function(){
		$('.alertBox').show();
    	$('.model').show();
		
	})
	
})
