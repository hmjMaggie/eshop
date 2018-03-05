<?php

namespace App\Http\Controllers\Home;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopcartController extends Controller
{
    // 加载用户页面
    public function getIndex(Request $request)
    {
        // 判断session当中是否有session信息
        if($request->session()->has('id')){

            $id = session('id');

            // 查出用户名
            $res = DB::table('users')->where('id','=',$id)->get();

            // 查cart表得到哪些商品
            $goods = DB::table('cart')->where('uid','=',$id)->value('goodsid');
            $goods = explode('-',$goods);

            // 查询购物车里面的商品并放到一个数组里面
            $data = [];
            foreach ($goods as $k=>$v){
                $data[] = DB::table('goods')->where('id','=',$v)->get();
            }

            // 商品
            $goods = DB::table('goods')->get();

            // 解析模板并压入数据
            return view('/Home/Shopcart/index',['username'=>$res[0]['username'],'data'=>$data,'goods'=>$goods]);
        }else{
            return view('/Home/Login/login');
        }
    }

    // 加入购物车
    public function getAdd($id){
        $uid = session('id');

        $goodsOld = DB::table('cart')->where('uid','=',$uid)->value('goodsid');

        // 如果购物车之前就有商品
        if ($goodsOld){
            $goodsNew = $goodsOld.'-'.$id;

            $res = DB::table('cart')->update(
                [
                    'uid' => $uid,
                    'goodsid' => $goodsNew
                ]
            );

            if($res){
                echo "<script>alert('加入购物车成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            }else{
                echo "<script>alert('加入购物车失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            }
        }else{
            $res = DB::table('cart')->update(
                [
                    'uid' => $uid,
                    'goodsid' => $id
                ]
            );

            if($res){
                echo "<script>alert('加入购物车成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            }else{
                echo "<script>alert('加入购物车失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            }

        }
    }
}
