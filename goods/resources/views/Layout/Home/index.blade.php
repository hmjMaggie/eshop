<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="/Home/css/15.xinwen1.css"/>
		<link rel="stylesheet" type="text/css" href="/Home/css/style12.css"/>
		<link rel="stylesheet" type="text/css" href="/Home/css/16.xinwenzhongxin.css"/>
		<link rel="stylesheet" type="text/css" href="/Home/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="/Home/css/jquery.slider.css"/>
		<link rel="stylesheet" type="text/css" href="/Home/css/18-index.css"/>
		<link rel="stylesheet" type="text/css" href="/Home/css/details_Page07.css"/>
		<link rel="stylesheet" type="text/css" href="/Home/css/8-details.css"/>
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

		{{-- 中间留出来写各自的东西 --}}
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

<script src="/Home/js/jquery-1.7.1.min.js"></script>
<script src="/Home/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="/Home/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

<script src="/Home/js/8-details.js" type="text/javascript"></script>
<script src="/Home/js/jquery.slider.js"></script>
<script src="/Home/js/18-index.js"></script>
<script src="/Home/js/details_Page07.js" type="text/javascript"></script>
<script src="/Home/js/jquery.SuperSlide.2.1.1.js" type="text/javascript" charset="utf-8"></script>


<script type="text/javascript">
    $(".content").slide({mainCell:".bd ul",effect:"left",trigger:"click"});
</script>

<script type="text/javascript">
    $(".main").slide({mainCell:".bd ul",effect:"left",trigger:"click"});
</script>