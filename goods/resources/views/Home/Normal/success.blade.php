@extends('Layout/Home/index2')
@section('container')
		<div class="main" id="main">
			<div class="inner1">
				<div class="left">
					<div class="title">
						<img src="/Home/images/usa04_03.jpg"/>
						<h3>支付成功</h3>
						<div class="square">￥</div>
						<div class="beside">5049元</div>
					</div>
					<div class="border_left">
							<div class="button1">
								<a href="{{url('/Home/Product/index')}}"><input type="button" id="button3" class="shop" value="继续购物"/></a>
							</div>
							<div class="button2">
								<a href="{{url('/Home/Normal/buy')}}"><input type="button" id="button4" class="check" value="查看订单详情"/></a>
							</div>
					</div>
				</div>
				<div class="right">
					<div class="title">
						<p class="p1">订单编号：13072351459509556558</p>
						<p class="p2">收获信息：张小姐130879000080</p>
						<p class="p3">上海市张江镇益江路兰苑香炉一期5栋505</p>
						<p class="p4">露露熊升级版 9月-12月小花猫9个月-12周</p>
						<p class="p5">岁9-36kg</p>
						<p class="p6">露露熊升级版 9月-12月小花猫9个月-12周</p>
						<p class="p7">岁9-36kg</p>
						<p class="p8">颜色分类：路途乐（石榴紫）*1</p>
						<p class="p9">岁9-36kg</p>
						<p class="p10">颜色分类：路途乐（隐蓝色）*1</p>
						<p class="p11">配送时间：周六周日（适于家庭住址）</p>
						<p class="p12">发票信息：个人电子发票</p>
						<p class="p13">送货时间：预计三天内发货</p>
					</div>
					<div class="log">
						<img src="/Home/images/4订单成功-PC-恢复的06_07.jpg"/>
						<p class="p14">关注路途乐</p>
						<p class="p15">下载APP</p>
					</div>
				</div>
			</div>
		</div>
@endsection