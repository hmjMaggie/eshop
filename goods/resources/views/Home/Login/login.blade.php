@extends('Layout.Home.index1')

@section('container')
<div class="centerMac">
		<div class="lunbotu">
			<img src="/Home/images/03.png" class="lunbo">
			<img src="/Home/images/10.png" class="lunbo ac">
		</div>

	<div class="changePic haha inner">
		<div class="landing">
			<div class="top">
				<p>
					<em class="zhang yanAc" href="#">账号登陆</em>
					<span class="shugang">|</span>
					<em class="yanzheng" href="09.html">验证码登陆</em>
				</p>
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
		<form action="{{url('/Home/Login/login')}}" method="post">
			{{csrf_field()}}
					<input id="vccorptype" name="username" type="text" placeholder="请输入用户名">
				</div>
				<div class="phoneNum yanzhengma" style="display: none;">
					<input class="code" type="text" placeholder="请输入验证码">
					<button class="btn">获取验证码</button>
				</div>
				<div class="phoneNum zhanghao">
					<input class="code" name="password" type="password" placeholder="请输入密码">
				</div>
			</div>
			<input type="submit" id="submit1" value="立即登陆" />
		</form>
			<div class="alink">
				<p style="float:left"><a href="/Home/Login/register">注册</a></p>
				<p style="float:right"><a href="#">忘记密码</a></p>
			</div>
		</div>
	</div>
</div>
@endsection