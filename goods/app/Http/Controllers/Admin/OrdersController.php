<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    // 加载用户页面
    public function getIndex()
    {
        $res = DB::table('orders')->get();

        $auth = array(
            '0'=>'新订单',
            '1'=>'已发货',
            '2'=>'已收货',
            '3'=>'无效订单'
        );

        $color = array(
            '0'=>'label-info',
            '1'=>'label-primary',
            '2'=>'label-success',
            '3'=>'label-warning'
        );

        // 解析模板并压入数据
        return view('/Admin/Orders/index',['res'=>$res,'auth'=>$auth,'color'=>$color]);
    }

    // 加载编辑页面
    public function getEdit($id){
        $res = DB::table('orders')->where('id','=',$id)->get();
        return view('/Admin/Orders/edit',['res'=>$res[0]]);
    }

    // 修改
    public function postUpdate(Request $request){
        $data = $request->except('_token');

        $res = DB::table('orders')->where('id','=',$data['id'])->update(
                [
                    'linkman' => $data['linkman'],
                    'address' => $data['address'],
                    'code' => $data['code'],
                    'phone' => $data['phone'],
                    'total' => $data['total'],
                    'status' => $data['status']
                ]
            );

        if($res){
            echo "<script>alert('修改成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('修改失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 订单详情
    public function getDetail($id){

        //先通过订单的id找到该订单的商品id
        $res = DB::table('detail')->where('orderid','=',$id)->get();

        return view('/Admin/Orders/detail',['res'=>$res[0]]);
    }

    // 删除
    public function getDelete($id){
        $res = DB::table('orders')->where('id', '=',$id)->delete();

        if($res){
            echo "<script>alert('删除成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('删除失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }
}
