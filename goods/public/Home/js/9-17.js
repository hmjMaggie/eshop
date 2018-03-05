	/*//二级菜单点击事件
	$(function(){
		$(".choice").each(function(){
			var bool=true;var _this=$(this);
			_this.click(function(){
				if(bool){
					$(".subMenu").stop().slideDown();
				}else{
					
					$(".subMenu").stop().slideUp();
				}
				bool=!bool;
				console.log(bool);
			})
				
			});
	});
	*/
	
	/*//按钮点击事件
	$(function(){
		function foo(obj,count){
			var timer;
			var time=count;
			var con=obj.html();
			var newCon="重新获取"
			function sendCode(){
				count--;
				obj.html(count)
				obj.addClass("timeover");
				sendMsg();
				if(count==0){
					obj.removeClass("timeover");
					clearInterval(timer);
					obj.html(newCon);
					count=time;
					return;
				}
			}
			function sendMsg(){
				console.log(1)
			}
			
			obj.click(function(){
				timer=setInterval(function(){
					sendCode(obj);
				},1000)
			})
		}
		
		foo($(".btn"),60)
	});*/
	
	
	
	//背景轮播图效果
	$(function(){
		var c = 0;		
		setInterval(function(){
			c++;
			c = (c==2)?0:c;
			$('.lunbotu img').eq(c).fadeIn('slow').siblings('img').fadeOut('slow');
		},3000)
	});