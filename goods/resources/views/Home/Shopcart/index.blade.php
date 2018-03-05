@extends('Layout.Home.index2')

@section('container')
	<div class="shoppIng_Main inner" style="background: #fff;border-radius: 28px">
		<div class="shoppIng_Main1">
			<div class="order_1">

				@foreach($data as $k=>$v)
				<div class="shoppIng_Box1">
					<ul class="order_1_Title">
						<li>商品名称</li>
						<li>单价</li>
						<li>数量</li>
						<li>小计</li>
						<li>操作</li>
						</ul>
					<ul class="order_1_Comm">
						<li class="order_1_Comm_check order_1_Comm_check1"></li>
						<li class="order_1_Comm_Pic"><img width="80" height="80" src="/Uploads/{{$v[0]['picname']}}"/></li>
						<li class="order_1_Comm_Details">{{$v[0]['descr']}}</li>
						<li class="order_1_Comm_Unic">￥{{$v[0]['price']}}</li>
						<li class="order_1_Comm_Number"><button class="btnRed" type="button">-</button><i>1</i><button class="btnAdd " type="button">+</button></li>
						<li class="order_1_Comm_Subtotal">￥{{$v[0]['price']}}</li>
						<li class="order_1_Comm_Btn order_1_Comm_Btn1">x</li>
						</ul>
					</div>
				@endforeach
			</div>
			<div class="order_Confirm">
				<ul class="order_Confirm_Ul">
					<li class="Check_Btn"></li>
					<li class="Select_Btn" style="cursor: pointer;">全选</li>
					<li class="delete_Btn"><a href="#">删除</a></li>
				</ul>
				<div class="total_Btn">
					合计 ： <span>￥6000.00</span>
				</div>
				<div class="Settlement_Btn">
					<a href="{{url('/Home/Normal/payment')}}">立即结算</a>
				</div>
			</div>
		</div>
		<div class="shoppIng_Main2 inner">
			<div class="shoppIng_Main2_Box">
				<span></span>
				<p>买购物车商品的人还买了</p>
			</div>
		</div>
		<div class="shoppIng_Main3 inner clearfix">
			<ul class="main3_Ulist">
				@foreach($goods as $k=>$v)
					<li><a href="{{'/Home/Normal/details'}}/{{$v['id']}}">
							<img src="/Uploads/{{$v['picname']}}"  />
							<a href="{{'/Home/Normal/details'}}/{{$v['id']}}" class="mask"></a>
							<h3>{{$v['goods']}}</h3>
							<p>{{$v['company']}}</p>
							<span></span></a>
					</li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection