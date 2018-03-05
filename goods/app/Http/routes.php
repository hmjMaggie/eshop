<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// 访问goods.com进入前台
Route::get('/', function () {
    return redirect('/Home/Index/index');
});


// 后台路由组
Route::group([],function(){

    // 登录
    Route::controller('/Admin/Login', 'Admin\LoginController');

    // 后台框架主页面
    Route::controller('/Admin/Index', 'Admin\IndexController');

    // 加载后台用户功能
    Route::controller('/Admin/User', 'Admin\UserController');

    // 加载分类相关功能
    Route::controller('/Admin/Type', 'Admin\TypeController');

    // 加载商品的相关功能
    Route::controller('/Admin/Goods', 'Admin\GoodsController');

    // 加载订单的相关功能
    Route::controller('/Admin/Orders', 'Admin\OrdersController');

    // 友情链接的相关功能
    Route::controller('/Admin/Friendlink', 'Admin\FriendlinkController');

});

// 前台路由组
Route::group([],function(){

    // 前台框架主页面
    Route::controller('/Home/Index', 'Home\IndexController');

    // 前台注册登录
    Route::controller('/Home/Login', 'Home\LoginController');

    // 购物车
    Route::controller('/Home/Shopcart', 'Home\ShopcartController');

    // 产品中心
    Route::controller('/Home/Product', 'Home\ProductController');

    // 通用控制器
    Route::controller('/Home/Normal', 'Home\NormalController');
});





