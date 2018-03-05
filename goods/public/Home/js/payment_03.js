$(function(){
	let switch1=true;
	$(".pay_Mo").click(function(){
		if(switch1){
			$(this).css("borderColor","#ccc");
			$(".circular img").css("display","none");
			$(".circular").css("backgroundColor","#ccc")
		}else{
			$(".circular img").css("display","block");
			$(".circular").css("backgroundColor","#fff");
			$(this).css("borderColor","#de0049");
		}
		switch1=!switch1
	});
	
	$(".bank_Card li").each(function(i,e){
		let _this=$(this);
		_this.mouseenter(function(){
			console.log(i)
			if(i==0){
				$(".spanOne").css("display","block")
			}else if(i==1){
				$(".spanTwo").css("display","block")
			}
		});
		_this.mouseleave(function(){
			$(".spanOne").css("display","none");
			$(".spanTwo").css("display","none")
		})
	})
	
	
	
	
})
