//勾选部分----------------------
$(function(){
var shoppIng_Box1= ;

var quenHas=false;var quenHasl=false;

$(".order_1").prepend(shoppIng_Box1);
$(".order_1_Comm_Btn1").click(function(){
	$(".shoppIng_Box1").remove();quenHas=true;
	if(quenHas&&quenHasl){
	$(".order_Confirm").css("display","none");
	}
});
$(".order_1_Comm_Btn2").click(function(){
	$(".shoppIng_Box2").remove();quenHasl=true;
	if(quenHas&&quenHasl){
	$(".order_Confirm").css("display","none");
	}
});
var switch_2=true;	var switch_1=true;var swith_All=true;var last1;var last2;
//点击勾选中---------------------------	
$(".Select_Btn").click(function(){
	if(swith_All){
		$(".order_1_Comm_check").addClass("check_AC");
		$(".Check_Btn").addClass("check_AC");switch_2=false;switch_1=false;
	}else{
		$(".order_1_Comm_check").removeClass("check_AC");
		$(".Check_Btn").removeClass("check_AC");switch_2=true;switch_1=true;
	}
	swith_All=!swith_All;
})
$(".Check_Btn").click(function(){
	if(swith_All){
		$(".order_1_Comm_check").addClass("check_AC");
		$(".Check_Btn").addClass("check_AC");switch_2=false;switch_1=false;
	}else{
		$(".order_1_Comm_check").removeClass("check_AC");
		$(".Check_Btn").removeClass("check_AC");switch_2=true;switch_1=true;
	}
	swith_All=!swith_All;
});
//点击单个勾选中取消选中-----------------------------
$(".order_1_Comm_check2").click(function(){
	if(switch_2){
		$(this).addClass("check_AC");last1=true;
		if(last1 && last2){
			$(".Check_Btn").addClass("check_AC");
		}
	}else{
		$(this).removeClass("check_AC");
		$(".Check_Btn").removeClass("check_AC");last1=false;
	}
	switch_2=!switch_2;
});
$(".order_1_Comm_check1").click(function(){
	if(switch_1){
		$(this).addClass("check_AC");last2=true;
		if(last1 && last2){
				$(".Check_Btn").addClass("check_AC");
			}
	}else{
		$(this).removeClass("check_AC");
		$(".Check_Btn").removeClass("check_AC");last2=false;
	}
	switch_1=!switch_1;
});
});
//+++ ----  ----部分------------------------------
$(function(){
	var num=1;var num1=1;var text_a;
//减------------------------------	
	$(".shoppIng_Box1 .btnRed").click(function(){
		num--;
		if(num<1){
			num=1;
		}
		$(".shoppIng_Box1 .order_1_Comm i").text(num);$(".shoppIng_Box1 .order_1_Comm_Subtotal").text("￥"+num*3000);$(".total_Btn span").text("￥"+(num1*3000+num*3000))	;
	});
	$(".shoppIng_Box2 .btnRed").click(function(){
		num1--;
		if(num1<1){
			num1=1;
		}
		$(".shoppIng_Box2 .order_1_Comm i").text(num1);$(".shoppIng_Box2 .order_1_Comm_Subtotal").text("￥"+num1*3000);$(".total_Btn span").text("￥"+(num1*3000+num*3000))	;
	});
//加------------------------------------	
	$(".shoppIng_Box1 .btnAdd").click(function(){
		num++;
		$(".shoppIng_Box1 .order_1_Comm i").text(num);$(".shoppIng_Box1 .order_1_Comm_Subtotal").text("￥"+num*3000);$(".total_Btn span").text("￥"+(num1*3000+num*3000))	;
	})
	$(".shoppIng_Box2 .btnAdd").click(function(){
		num1++;
		$(".shoppIng_Box2 .order_1_Comm i").text(num1);$(".shoppIng_Box2 .order_1_Comm_Subtotal").text("￥"+num1*3000);$(".total_Btn span").text("￥"+(num1*3000+num*3000))	;
	})
$(".delete_Btn").click(function(){
	if($(".Check_Btn").hasClass("check_AC")){
		$(".order_Confirm").css("display","none");
		$(".shoppIng_Box1").remove();
		$(".shoppIng_Box2").remove();
	}
});
	var xx;var yy;
$(".Settlement_Btn").click(function(){
	
	if($(".order_1_Comm_check1").hasClass("check_AC")&&$(".order_1_Comm_check2").hasClass("check_AC")){
		$(".shoppIng_Box1").remove();$(".shoppIng_Box2").remove();$(".order_Confirm").css("display","none");
		
	}else if($(".order_1_Comm_check1").hasClass("check_AC")){
		$(".shoppIng_Box1").remove();
		xx=true;
		if(xx==yy){
		$(".order_Confirm").css("display","none");
	}
		
	}else if($(".order_1_Comm_check2").hasClass("check_AC")){
		$(".shoppIng_Box2").remove();
		yy=true;
		if(xx==yy){
				$(".order_Confirm").css("display","none");
			}
		
	}
})

	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
})
