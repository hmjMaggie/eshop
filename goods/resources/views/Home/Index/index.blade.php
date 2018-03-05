@extends('Layout.Home.index')

@section('container')
	<div class="bannerBox" style="margin: 0 auto;height: 900px;">
		<div class="homePageBanner" style="margin: 0 auto;">
			<div class="bannerBackgroundpic" style="display: none;"><img src="/Home/images/index_e.png"/></div>
			<div class="bannerBackgroundpic" style="display: none;"><img src="/Home/images/---hehehe.jpg"/></div>
			<div class="bannerBackgroundpic" style="position: relative;"><img class="imgLast" src="/Home/images/index_a.png" style="position: absolute;top: -548px;left: 0;"/></div>
		</div>
	</div>
	<div class="banner_Content inner">
		<div class="banner_Con">
			<h4>胖胖豚Air/Fix</h4>
			<h1>用心守护宝宝的微笑</h1>
			<i></i>
			<p>蛋壳式仿生设计/独创什么的机构</p>
			<p>Plang for safety can get out sdtf baal skin</p>
			<div class="litBox">
				点击了解更多
			</div>
		</div>
	</div>
	<div class="mainOne inner">
		<h2>路途乐产品</h2>
		<p>OUR PRODUCTS</p>
		<i></i>
	</div>
	<div class="mainTwo inner">
		<ul class="main2_Ulist clearfix" id="main2_Ulist">
			@foreach($res as $k=>$v)
			<li>
				<img src="/Uploads/{{$v['picname']}}" />
				<a href="/Home/Normal/details/{{$v['id']}}" class="mask"></a>
				<h3>{{$v['goods']}}</h3>
				<p>{{$v['descr']}}</p>
				<span><a style="display: inline-block" href="/Home/Normal/details/{{$v['id']}}"></a></span>
			</li>
			@endforeach
		</ul>
	</div>
	<div class="mainButtonOne inner">
		<button class="mainTwoBtn_L" type="button"><img style="position: absolute;top: 0;left: 0;" src="/Home/images/indexTu_03.jpg"/></button>
		<button class="mainTwoBtn_R" type="button"><img style="position: absolute;top: 0;left: 0;" src="/Home/images/indexTu_05.jpg" alt="" /></button>
	</div>
	<div class="mainThree">
		<div class="main_Three inner">
			<div class="mainOne" style="padding: 68px 0;margin-top: 10px;">
				<h2>我们的梦想</h2>
				<p style="left: 474PX;">OUR'S DREAM</p>
				<i></i>
			</div>
			<div class="mainOneB clearfix">
				<div class="leftPic"><img src="/Home/images/nidexOne.png" alt="" /></div>
				<div class="rightW">
					<h3>为梦而生</h3>
					<p>我们是一群平凡的追梦者，我们的梦想就是“呵护天下儿童的出行安全，打造中国宝梦想就是“呵护天下儿童的出行安全，打造中国宝梦想就是“呵护天下儿童的出行安全，打造中国宝宝的安全座椅”。路途乐冲上“安全、舒适、快乐、责任、</p>
					<img src="/Home/images/shopp_main3_24.jpg" />
				</div>
			</div>
		</div>
	</div>
	<div class="mainFour inner">
		<ul class="mFourUlist clearfix">
			<li class="liOne">
				<img class="img1" src="/Home/images/indexTwo.png"/>
				<p>加入我们的主题活动吧</p>
				<img class="img2" src="/Home/images/shopp_main3_24.jpg"/>
			</li>
			<li class="liTwo">
				<img class="img1" src="/Home/images/indexThree.png"/>
				<img class="img3" src="/Home/images/indexFour.png"/>
				<p>降价幅度低至50%</p>
				<img class="img2" src="/Home/images/shopp_main3_24.jpg"/>
			</li>
			<li class="liThree">
				<img class="img1" src="/Home/images/indexFive.png"/>
				<p>A mother’s love never changes.</p>
				<img class="img2" src="/Home/images/shopp_main3_24.jpg"/>
			</li>
			<li class="liOne">
				<img class="img1" src="/Home/images/indexTwo.png"/>
				<p>加入我们的主题活动吧</p>
				<img class="img2" src="/Home/images/shopp_main3_24.jpg"/>
			</li>
			<li class="liTwo">
				<img class="img1" src="/Home/images/indexThree.png"/>
				<img class="img3" src="/Home/images/indexFour.png"/>
				<p>降价幅度低至50%</p>
				<img class="img2" src="/Home/images/shopp_main3_24.jpg"/>
			</li>
			<li class="liThree">
				<img class="img1" src="/Home/images/indexFive.png"/>
				<p>A mother’s love never changes.</p>
				<img class="img2" src="/Home/images/shopp_main3_24.jpg"/>
			</li>
		</ul>
	</div>
	<div class="mainButtonTwo inner">
		<button class="mainTwoBtn_L" type="button"><img style="position: absolute;top: 0;left: 0;" src="/Home/images/indexTu_03.jpg"/></button>
		<button class="mainTwoBtn_R" type="button"><img style="position: absolute;top: 0;left: 0;" src="/Home/images/indexTu_05.jpg" alt="" /></button>
	</div>
	<div class="mainFive">
		<div class="mainF_Box">
			<h4>胖胖豚Air/Fix</h4>
			<h1>用心守护宝宝的微笑</h1>
			<i></i>
			<p>蛋壳式仿生设计/独创什么的机构</p>
			<p>Plang for safety can get out sdtf baal skin</p>
		</div>
	</div>
	<div class="mainOne inner">
		<h2>新闻资讯</h2>
		<p style="left: 446px;">NEW INFORMATION</p>
		<i style="left: 496px"></i>
	</div>
	<ul class="mainSix inner clearfix">
		<li>
			<img class="img1" src="/Home/images/index_g.png"/>
			<h3>爱生活，乐出行</h3>
			<p>作为一群电商从业者，每天都要在电脑面前坐上几个小时甚至十几个小时。十里桃花春暖花开，路途乐的小伙伴们也是时候出去散散心，放松下</p>
			<span>2017.07.13</span>
			<img class="img2" src="/Home/images/shopp_main3_24.jpg" alt="" />
		</li>
		<li>
			<img class="img1" src="/Home/images/index_c.png"/>
			<h3 style="left: 94px;">喜大普奔，路途乐入会啦</h3>
			<p>2017年2月28日，在中国道路安全协会第四届理事会第七次会议上，国内著名安全座椅品牌路途乐经理事会研究决定，光荣地成为中国道</p>
			<span>2017.03.28</span>
			<img class="img2" src="/Home/images/shopp_main3_24.jpg" alt="" />
		</li>
		<li>
			<img class="img1 imgOne" src="/Home/images/index_h.png"/>
			<h3 style="left: 85px;">如何选购儿童儿童安全座椅</h3>
			<p>据相关数据统计，截止到2016年4月全国机动车保有量约2.2亿辆，这数字意味着全国机动车驾驶人已经超过2亿人。另一组数据显示，</p>
			<span>2017.02.22</span>
			<img class="img2" src="/Home/images/shopp_main3_24.jpg" alt="" />
		</li>
	</ul>
	<div class="mainSeven inner">
		<p class="p1">进入新闻资讯中心</p>
	</div>
	<div class="mainEight">

	</div>
	<div class="mainNine inner clearfix">
		<div class="mainNine_One">
			<h2>安全科普</h2>
			<p>查看儿童座椅相关安全知识</p>
			<img src="/Home/images/index_i.png" />
		</div>
		<ul class="mainNine_Two">
			<li>
				<h3>安全科普</h3>
				<p>查看儿童座椅相关安全知识</p>
				<img src="/Home/images/shopp_main3_24.jpg" />
			</li>
			<li>
				<h3>选购攻略</h3>
				<p>寻找适合您Baby的安全座椅</p>
				<img src="/Home/images/shopp_main3_24.jpg"/>
			</li>
		</ul>
	</div>

@endsection