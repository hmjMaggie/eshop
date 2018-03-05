@extends('Layout.Home.index2')

@section('container')
		<div class="main">
			<div class="addr">
				<h2>收货地址</h2>
				<ul id="addr" class="clearfix">
					<li class="ac">
						<div class="text">
							<p class="man">收货人：张小姐<i>15987900080</i></p>
							<p class="dizhi">地    址：上海市张江镇益江路玉兰 香苑一期5栋501</p>
						</div>
					</li>
					<li>
						<div class="text">
							<p class="man">收货人：王先生<i>15287508759</i></p>
							<p class="dizhi">地    址：北京市南四环地铁新宫站 南500米成寿寺路甲137号</p>
						</div>
					</li>
					<li>
						<div class="text">
							<p class="man">收货人：赵小姐<i>13975847889</i></p>
							<p class="dizhi">地    址：深圳市大亚湾中兴南路与 中兴六路198号</p>
						</div>
					</li>
					<li>
						<div class="text">
							<p class="man">收货人：吴小姐<i>15987232389</i></p>
							<p class="dizhi">地    址：广州市黄埔东路与丹水坑 路交界南岗地铁站旁边</p>
						</div>
					</li>
				</ul>
				<h3>显示全部地址</h3>
			</div>
			<div class="order">
				<h3>确认订单信息</h3>
				<div class="shop">
					<ul class="things clearfix">
						<a href="#">
							<li class="clearfix">								
								<div class="pic"><img src="/Uploads/{{$res['picname']}}"></div>
								<p>{{$res['descr']}}<em>x1<i>￥{{$res['price']}}</i></em></p>
							</li>
						</a>
					</ul>
					<div class="details clearfix">
						<h2>商品由<span>路途乐</span>选择合作快递</h2>
						<div class="pic">
							<img src="/Home/images/kuaidi.png">
						</div>
						<ul>
							<li>商品总金额：</li>
							<li>运费：</li>
							<li>优惠：</li>
							<li>结算金额：</li>
						</ul>
						<ol>
							<li>¥{{$res['price']}}</li>
							<li>¥0.00</li>
							<li>¥-120.00</li>
							<li>¥<span id="nowPrice">5040.00</span></li>
						</ol>
					</div>
				</div>
			</div>
			<div class="discount clearfix">
				<div id="discount" class="left">
					<h2>优惠和抵用</h2>
					<p class="first">满<span id="top1">998</span>减<span id="jian1">30</span>,仅适用于在官网使用</p>
					<p class="last ac">满<span id="top2">1998</span>减<span id="jian2">60</span>,仅适用于在官网使用</p>
				</div>
				<div class="right">
					<p>实付金额：¥<span id="price">5010.00</span></p>
					<div style="border-radius: 22px;cursor: pointer" class="submit"><a href="{{url('/Home/Normal/success')}}">提交订单</a></div>
				</div>
			</div>	
		</div>
@endsection
