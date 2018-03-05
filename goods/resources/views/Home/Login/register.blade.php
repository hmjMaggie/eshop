@extends('Layout.Home.index1')

@section('container')
<div class="centerMac">
	<div class="lunbotu">
		<img src="/Home/images/03.png" class="lunbo">
		<img src="/Home/images/10.png" class="lunbo ac">
	</div>
	<div class="changePic hehe inner">
		<div class="landing">
			<div class="video">
				<h3>注册路途乐会员</h3>
				<p class="p">Registration becomes VIP</p>
				<div class="xian">
						<p></p>
				</div>
			</div> 
			<div class="phone">
				<div class="phoneNum">
					<div class="left">
					<div class="menu_num">
						<span class="number">+86</span>
						<ul class="subMenu">
							<li><a href="##">+32</a></li>
							<li><a href="##">+74</a></li>
							<li><a href="##">+13</a></li>
						</ul>
					</div>
					<div class="choice"><span>◇</span></div>
					</div>
				<form action="{{url('/Home/Login/register')}}" method="post">
					{{csrf_field()}}
					<input class="vccorptype" name="phone" type="text" placeholder="请输入手机号码">
				</div>
				<div class="phoneNum">
					<input class="code"  name="password"  type="password" placeholder="请输入密码">
				</div>
				
			</div>
			<p id="describe">点击立即注册，即表示您同意并愿意遵守<a href"#">路途乐协议</a>和<a href="#">法律声明</a></p>
			<input type="submit" name="" id="submit2" value="立即注册" />
			<div class="alink">
				<p style="float:left"><a href="/Home/Login/index">登陆</a></p>
			</div>
			</form>
		</div>
	</div>
</div>
@endsection
