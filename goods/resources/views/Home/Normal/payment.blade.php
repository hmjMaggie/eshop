@extends('Layout.Home.index2')

@section('container')
		<div class="payment_Main inner">
			<div class="payment_Main_Ulist">
				<ul class="ul_Details">
					<li>订单编号 : {{$bian}}</li>
					<li>订单商品 : 路途了（石榴紫）*1</br><span>路途了（银河蓝）*1</span></li>
					<li>寄送至 : 上海市张江镇 金科路11545号</li>
					<li>收货人  : 张小姐   13666548575</li>
				</ul>
				<div class="main_Money">
					实付款： ￥ <span>5040</span>
				</div>
			</div>
			<p class="main_P">选择支付方式</p>
			<div class="pay_Mo">
				<div class="circular"><img src="/Home/images/shapeLittle_pic.png"/></div>
				<p>您上次支付选择了</p>
				<div class="main_Payment">
					支付 ： <span>5040元</span>
				</div>
			</div>
			<div class="add_Card">
				+添加银行卡
			</div>
			<ul class="bank_Card">
				<li><a style="width: 323px;height: 188px;display: inline-block" href="{{url('/Home/Normal/success')}}"></a></li>
				<li><a style="width: 323px;height: 188px;display: inline-block" href="{{url('/Home/Normal/success')}}"></a></li>
				<li><a style="width: 323px;height: 188px;display: inline-block" href="{{url('/Home/Normal/success')}}"></a></li>
				<span class="spanOne" style="display: none;"><img src="/Home/images/erweima_03.gif"/></span>
				<span class="spanTwo" style="display: none;"><img src="/Home/images/weixin_03.gif"/></span>
			</ul>
		</div>
@endsection
