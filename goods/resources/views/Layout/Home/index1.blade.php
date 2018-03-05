<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="/Home/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="/Home/css/9.css"/>
		<link rel="stylesheet" type="text/css" href="/Home/css/17.css"/>
		<script src="/Home/js/jquery-3.1.0.min.js"></script>
	</head>
	<body>
		<div class="header inner clearfix">
			<a href="{{url('/Home/Index/index')}}">
				<div class="h-logo">
					<img src="/Home/images/----LOGO1.png" alt="图片正在加载中"/>
					<img src="/Home/images/----LOGO2.png" alt="图片正在加载中"/>
				</div>
			</a>
			<ul class="h-nav clearfix">
				<li><a href="{{url('/Home/Index/index')}}" style="color: red;">首页</a></li>
				<li><a href="{{url('/Home/Product/index')}}">产品中心</a></li>
				<li><a href="{{url('/Home/Normal/news')}}">新闻资讯</a></li>
				<li><a href="{{url('/Home/Normal/story')}}">我们的故事</a></li>
				<li><a href="{{url('/Home/Normal/service')}}">服务中心</a></li>
			</ul>
			<div class="h-icon">
				<a href="#"></a>
				<a href="{{url('/Home/Shopcart/index')}}"></a>
				<a href="{{url('/Home/Login/index')}}"></a>
			</div>
		</div>

		@section('container')

		@show

		<div class="footer">
			<div class="footer_i inner">
			<div class="navlist">
				<ol class="clearfix">
					<li><a href="13-video.html">母婴健康传媒</a><span>|</span></li>
					
					<li><a href="12-ourStory.html">故事会</a><span>|</span></li>
					
					<li><a href="06-404.html">宝座网</a><span>|</span></li>
			
					<li><a href="07-details_Page.html">儿童座椅</a><span>|</span></li>
					<li><a href="07-details_Page.html">儿童汽车安全座椅</a></li>
					
				</ol>
				<p class="address">@lutule.com 沪ICP备05006323号-1上海路途乐科技有限公司 儿童安全座椅</p>
			</div>
			<ul class="logo_ft">
				<li><a href="##" class="a1"></a></li>
				<li><a href="##" class="a2"></a></li>
				<li><a href="##" class="a3"></a></li>
				<li><a href="##" class="a4"></a></li>
			</ul>
			
			</div>
		</div>
	</body>
</html>
<script src="/Home/js/jquery-1.11.3.min.js"></script>
<script src="/Home/js/09.js"></script>
<script src="/Home/js/17.js"></script>