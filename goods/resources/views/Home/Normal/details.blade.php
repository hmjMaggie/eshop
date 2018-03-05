@extends('Layout.Home.index')

@section('container')
		<div class="banner details inner">
			<div class="left">
				<div class="option">
					<div class="pic">
						<img src="/Uploads/{{$res['picname']}}">
						<img src="/Home/images/red02.jpg" style="display: none">
						<img src="/Home/images/red03.jpg" style="display: none">
						<span class="zoom"></span>
					</div>
					<div class="pic_max">
						<li><img src="/Uploads/{{$res['picname']}}"></li>
						<li style="display: none;"><img src="/Home/images/red02.jpg"></li>
						<li style="display: none;"><img src="/Home/images/red03.jpg"></li>
					</div>
					<ul class="btn">
						<li class="first ac"><img src="/Uploads/{{$res['picname']}}" alt=""></li>
						<li><img src="/Home/images/red02.jpg" alt=""></li>
						<li><img src="/Home/images/red03.jpg" alt=""></li>
						<span class="shang"><img src="/Home/images/----------icon-zuo.png"></span>
						<span class="xia"><img src="/Home/images/----------icon-you.png"></span>
					</ul>
				</div>
				<div class="option" style="display: none">
					<div class="pic">
						<img src="/Home/images/blue1.jpg">
						<img src="/Home/images/blue2.jpg" style="display: none">
						<img src="/Home/images/blue3.jpg" style="display: none">
						<span class="zoom"></span>
					</div>
					<div class="pic_max">
						<li><img src="/Home/images/blue1.jpg"></li>
						<li style="display: none;"><img src="/Home/images/blue2.jpg"></li>
						<li style="display: none;"><img src="/Home/images/blue3.jpg"></li>
					</div>
					<ul class="btn">
						<li class="first ac"><img src="/Home/images/blue1.jpg" alt=""></li>
						<li><img src="/Home/images/blue2.jpg" alt=""></li>
						<li><img src="/Home/images/blue3.jpg" alt=""></li>
						<span class="shang"><img src="/Home/images/----------icon-zuo.png"></span>
						<span class="xia"><img src="/Home/images/----------icon-you.png"></span>
					</ul>
				</div>
				<div class="option" style="display: none">
					<div class="pic">
						<img src="/Home/images/brown1.jpg">
						<img src="/Home/images/brown2.jpg" style="display: none">
						<img src="/Home/images/brown3.jpg" style="display: none">
						<span class="zoom"></span>
					</div>
					<div class="pic_max">
						<li><img src="/Home/images/brown1.jpg"></li>
						<li style="display: none;"><img src="/Home/images/brown2.jpg"></li>
						<li style="display: none;"><img src="/Home/images/brown3.jpg"></li>
					</div>
					<ul class="btn">
						<li class="first ac"><img src="/Home/images/brown1.jpg" alt=""></li>
						<li><img src="/Home/images/brown2.jpg" alt=""></li>
						<li><img src="/Home/images/brown3.jpg" alt=""></li>
						<span class="shang"><img src="/Home/images/----------icon-zuo.png"></span>
						<span class="xia"><img src="/Home/images/----------icon-you.png"></span>
					</ul>
				</div>
			</div>
			<div class="right">
				<h2>路途乐/LUTULE儿童安全座椅ISOFIX硬接口 波尔红</h2>
				<div class="price clearfix"><p>价格</p><span>￥390,00</span></div>
				<div class="color clearfix">
					<em class="one"></em>
					<em class="two" style="opacity: 0.5"></em>
					<em class="three" style="opacity: 0.5"></em>
					<p>颜色</p>
				</div>
				<div class="num clearfix">
					<p>数量</p>
					<i>1</i>
					<span class="add"></span>
					<span class="minus"></span>			
				</div>
				<span style="padding: 10px 0;" class="addShop"><a href="{{url('/Home/Shopcart/add')}}/{{$res['id']}}">加入购物车</a></span>
				<span style="padding: 10px 0;" class="buy"><a href="{{url('/Home/Normal/buy')}}/{{$res['id']}}">立即购买</a></span>
			</div>
		</div>
		<div class="main inner">
			<div class="mei">产品细节</div>
			<div class="top">
				<div class="tuwen">
					<img src="/Home/images/----3.png">
					<div class="text">
						<h4>LUTULE<i></i>ANQUAN</h4>
						<div class="line"></div>
						<h2>源于意大利的<br>时尚设计</h2>
						<p>让灵感自由释放<i></i>360度旋转 </p>
					</div>
				</div>
				<div class="tuwen ding">
					<img src="/Home/images/----13.png">
					<div class="text">
						<h4>LUTULE<i></i>ANQUAN</h4>
						<div class="line"></div>
						<h2>细微之处见真章</h2>
						<p>细节决定成败<i></i>ISOFIX接口 </p>
					</div>
				</div>
			</div>
			<div class="mid">
				<div class="tuwen first clearfix">
					<div class="text1">
						<h2>加深宝宝的腰部保护</h2>
						<p>降低发生侧撞事故碰撞时冲击力 对宝宝的伤害</p>
						<h1>坐躺调节</h1>
					</div>
					<div class="pic">
						<img src="/Home/images/----33.png"/>
					</div>
				</div>				
				<div class="tuwen clearfix">
					<div class="text1 text1-left">
						<h2>头部保护</h2>
						<p>大耳朵设计能大大的保护宝贝头部</p>
						<h1>ISOFIX硬接口</h1>
					</div>
					<div class="pic pic-left">
						<img src="/Home/images/----37.png"/>
					</div>
				</div>
				<div class="tuwen clearfix">
					<div class="text1">
						<h2>防滑肩带</h2>
						<p>防滑脱落，拆卸方便</p>
						<h1>+LATCH接口</h1>
					</div>
					<div class="pic">
						<img src="/Home/images/----33.png"/>
					</div>
				</div>				
				<div class="tuwen clearfix">
					<div class="text1 text1-left">
						<h2>意大利进口卡带</h2>
						<p>Sabell卡扣原装意大利进口 可沉重2.2吨高出法规标准数倍</p>
						<h1>ISOFIX硬接口</h1>
					</div>
					<div class="pic pic-left">
						<img src="/Home/images/----37.png"/>
					</div>
				</div>
			</div>
			<div class="bot clearfix">
				<div class="pic">
					<img src="/Home/images/5978478136b43.png">
					<img class="zhong" src="/Home/images/5978478136bda.png">
					<img src="/Home/images/5978478136c9b.png">					
				</div>
				<p class="yanse">骚粉系列<span>翠绿系列</span>暖橙系列</p>
				<a href="#">
					<div class="colorful">
						<h2>安全科普</h2>
						<p>查看儿童座椅相关安全知识</p>
					</div>
				</a>				
				<div class="buttonAll">
					<a href="#">
						<div>
							<h2>安全科普</h2>
							<p>查看儿童座椅相关安全知识</p>
						</div>
					</a>
					<a href="#">
						<div>
							<h2>选购攻略</h2>
							<p>寻找适合您Baby的安全座椅</p>
						</div>	
					</a>							
				</div>
			</div>
		</div>
@endsection