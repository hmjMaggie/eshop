@extends('Layout.Home.index')

@section('container')
<div id="product">
	<div class="details_Banner">
		<div class="bannerBackgroundpic"></div>
		<div class="bannerBackgroundpic"></div>
		<div class="bannerBackgroundpic"></div>
		<button type="button" class="banner_Btn_left"></button>
		<button type="button" class="banner_Btn_reft"></button>
		<ul class="banner_List">
			<li></li>
			<li class="ac"></li>
			<li></li>
		</ul>
	</div>
	<div class="datails_Main1 inner">
		<h4 class="main_Ltop">首页<span>></span>产品一览</h4>
		<div class="main_Our">
			<h2>路途乐产品</h2>
			<p>OUR PRODUCTS</p>
			<i></i>
		</div>
		<ul class="ul_List">
			{{--<li><i>系列类型 ：</i><span>不限</span><a href="#">路路熊系列</a><a href="#">路路熊系列</a><a href="#">路路熊系列</a><a href="#">路路熊系列</a><a href="#">路路熊系列</a><a href="#">路路熊系列</a></li>
			<li><i>系列类型 ：</i><span>不限</span><a href="#">0-15个月</a><a href="#">0-4周岁</a><a href="#">0-6周岁</a><a href="#">9个月-4周岁</a><a href="#">9个月-6周岁</a><a href="#">9个月-8周岁</a><a href="#">3周岁-12周岁</a></li>
			<li><i>系列类型 ：</i><span>不限</span><a href="#">0-15Kg</a><a href="#">0-18Kg</a><a href="#">0-25Kg</a><a href="#">9-15Kg</a><a href="#">9-25kG</a><a href="#">9-36kG</a><a href="#">36kg以上</a></li>
			<li><i>系列类型 ：</i><span>不限</span><a href="#">正向安装</a><a href="#">反向安装</a><a href="#">正反向安装</a></li>--}}

			<i style="padding-bottom:10px;display: inline-block">查看以下分类 ：</i>
			<div class="banner_y center">
				<div class="nav">
					<ul>
						@foreach($res1 as $key=>$val)
							<li>
								<a href="##">{{$val['name']}}</a>
								<div class="pop">
								@foreach($val['tree'] as $k=>$v)

										<div class="left1 fl">
											<div>
												<div class="xuangou_left fl">
													<a href="">
														<div class="img fl"></div>
														<span class="fl">{{$v['name']}}</span>
														<div class="clear"></div>
													</a>
												</div>
												<div class="clear"></div>
											</div>
										</div>
										<div class="clear"></div>
								@endforeach
								</div>
							</li>
						@endforeach
					</ul>
				</div>
			</div>

		</ul>
		<div class="search">
			<i>默认排序</i><i>热门产品</i><i>共<span>66</span>个结果</i><input class="inPut" type="text" value="请输入关键字"/><button class="btn" type="button"></button>
		</div>
	</div>
	<div class="datails_Main2 inner">
		<div class="main2_Box">
			<ul class="main2_Ulist clearfix">
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
	<div class="datails_Main3 inner">
		<div class="main3_Box">
			<!--js插入-->
			<h2>相关推荐</h2>
			<ul class="main2_Ulist clearfix">

				@foreach($tui as $k=>$v)
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
	<div class="details_Banner2">
		<div class="writtenWords">
			<h1>用心守护宝宝的微笑</h1>
			<p>路途乐用心100%为您提供售后服务</p>
			<p>用户满意是我们的服务宗旨！</p>
			<p>用户的每一件小事，都是我们的大事！</p>
			<button type="button">点击了解更多</button>
		</div>
	</div>
	<div class="detailsBotton">
		<div class="detailsBox inner">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<ul>
				<a href="18-index.html"><li><p>官方商城</p><p> 路途乐官方商城</p></li></a>
				<li><p>服务中心</p><p> 24小时服务热线</p></li>
				<li><p>专卖店</p><p> 离你最近的专卖店</p></li>
				<li><p>再生资源 </p><p>路途乐官方回收系统</p></li>
				<li><p>供应商自荐</p><p> 新技术丶新工艺丶新材料</p></li>
			</ul>
		</div>
	</div>
</div>
@endsection