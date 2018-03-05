/*part1 选择收货地址部分*/
var aLi=$('#addr li');
aLi.click(function(){
	$(this).addClass('ac').siblings().removeClass('ac');    /*把自己加上ac 和自己同级的ac全部去除掉*/
})

/*part2 优惠券部分*/
var nowPrice=$('#nowPrice').html();      //当前用户买的价格
$('.first').click(function(){
	var topPrice=$('#top1').html();        //达到优惠券上限价格
	var jianPrice=$('#jian1').html();      //优惠券减去价格	
	
	if(nowPrice-topPrice>0){
		let p=nowPrice-jianPrice;
		$('#price').html(p)
		$(this).removeClass('ac').siblings('p').addClass('ac');
	}else{
		alert("当前没有达到优惠券满减额度")
	}
})

$('.last').click(function(){
	var topPrice1=$('#top2').html();        //达到优惠券上限价格
	var jianPrice1=$('#jian2').html();      //优惠券减去价格
	
	if(nowPrice-topPrice1>0){
		let p=nowPrice-jianPrice1;
		$('#price').html(p);
		$(this).removeClass('ac').siblings('p').addClass('ac');
	}else{
		alert("当前没有达到优惠券满减额度")
	}
})
