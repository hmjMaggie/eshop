<?php

namespace App\Http\Controllers\Home;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NormalController extends Controller
{
    // 新闻中心
    public function getNews(){
        return view('Home/Normal/news');
    }

    // 我们的故事
    public function getStory(){
        return view('Home/Normal/story');
    }

    // 售后服务
    public function getService(){
        return view('Home/Normal/Service');
    }

    // 产品详情页
    public function getDetails($id){
        $res = DB::table('goods')->where('id','=',$id)->get();
        return view('Home/Normal/details',['res'=>$res[0]]);
    }

    // 确认支付
    public function getPayment(Request $request){
        if($request->session()->has('id')) {

            $bian = md5(time());
            $id = session('id');

            // 查出用户名
            $res = DB::table('users')->where('id', '=', $id)->get();
        }
        return view('Home/Normal/payment',['username'=>$res[0]['username'],'bian'=>$bian]);
    }

    // 购物成功
    public function getSuccess(Request $request){
        if($request->session()->has('id')) {

            $bian = md5(time());
            $id = session('id');

            // 查出用户名
            $res = DB::table('users')->where('id', '=', $id)->get();
        }
        return view('Home/Normal/success',['username'=>$res[0]['username'],'bian'=>$bian]);
    }

    // 支付页面
    public function getBuy(Request $request,$id){
        if($request->session()->has('id')) {

            $uid = session('id');

            // 查出用户名
            $res = DB::table('users')->where('id', '=', $uid)->get();

            // 把商品信息带到支付页面
            $res1 = DB::table('goods')->where('id', '=', $id)->get();
        }
        return view('Home/Normal/buy',['username'=>$res[0]['username'],'res'=>$res1[0]]);
    }

}
