<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="/Home/css/style4.css"/>
		<link rel="stylesheet" type="text/css" href="/Home/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="/Home/css/ShoppingCart_01.css"/>
		<link rel="stylesheet" type="text/css" href="/Home/css/payment_03.css"/>
		<link rel="stylesheet" href="/Home/css/02-confirmOrder.css" />
	</head>
	<body>
		<div class="shoppIng_Top">
			<div class="shoppIng_Header inner">
				<ul class="shoppIng_Ul_list">
					<li><a href="{{url('/Home/Index/index')}}">首页官网</a><span>|</span></li>
					<li><a href="{{url('/Home/Product/index')}}">产品中心</a><span>|</span></li>
					<li><a href="##">产品展示</a><span>|</span></li>
					<li class="ul_List_a"><a href="##">更多详情</a></li>
				</ul>
				<div class="shoppIng_Logo">
					<a href="{{url('/Home/Index/index')}}"><img src="/Home/images/logo_03.jpg" /></a>
				</div>
				<p>温馨提示：产品是否购买成功，以最终下单为准，请尽快结算</p>
				<div class="shoppIng_Header_Right">
					
					<div>{{$username}}</div>
					
					<a href="{{url('/Home/Shopcart/index')}}" class="my_Order"><span>|</span>我的购物车</a>
					
				</div>
				<div class="shoppIng_Rpic"><img src="/Home/images/logo_06.jpg"/></div>
			</div>
		</div>

		@section('container')

		@show

		<div class="footer">
			<div class="inner">
				<div class="f-top clearfix">
					<div class="left clearfix">
						<dl>
							<dd><a href="##">关于我们</a></dd>
							<dt><a href="12-ourStory.html">公司简介</a></dt>
							<dt><a href="11-course.html">品牌历程</a></dt>
							<dt><a href="##">人才招聘</a></dt>
							<dt><a href="##">联系我们</a></dt>		
						</dl>
						<dl>
							<dd><a href="##">购物商城</a></dd>
							<dt><a href="07-details_Page.html">安全座椅</a></dt>
							<dt><a href="##">婴儿提篮</a></dt>
							<dt><a href="##">增高垫</a></dt>
							<dt><a href="##">其他配件</a></dt>		
						</dl>
						<dl>
							<dd><a href="##">购物相关</a></dd>
							<dt><a href="06-404.html">配送服务</a></dt>
							<dt><a href="14-Service.html">售后服务 </a></dt>
						</dl>
					</div>
					<div class="right">
						<p>服务热线</p>
						<p>400-710-5566</p>
					</div>
				</div>
				<div class="f-mid">
					<ul class="f-icon">
						<a href="09-denglu.html"></a>
						<a href="09-denglu.html"></a>
						<a href="09-denglu.html"></a>
						<a href="09-denglu.html"></a>
					</ul>
					<div class="right"><p>简体中文</p><span><!--◇--></span><em class="flag"></em></div>
				</div>
				<div class="f-bot">
					<ul>
						<li><a href="13-video.html">母婴健康传媒</a><span>|</span></li>
						<li><a href="11-course.html"></a><span>|</span></li>
						<li><a href="##">宝座网</a><span>|</span></li>
						<li><a href="07-details_Page.html">儿童座椅</a><span>|</span></li>
						<li><a href="07-details_Page.html">儿童汽车安全座椅</a></li>
					</ul>
					<p> ©lutule.com 沪ICP备05006323号-1 上海路途乐科技有限公司  儿童安全座椅</p>
				</div>
			</div>			
		</div>
	</body>
</html>

<script src="/Home/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="/Home/js/jquery-3.1.0.min.js" type="application/javascript"></script>

<script src="/Home/js/shoppingCart_01.js" type="text/javascript"></script>
<script src="/Home/js/payment_03.js" type="text/javascript"></script>
<script src="/Home/js/02-confirmOrder.js" type="application/javascript"></script>
