<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    // 重定向到首页
    public function getIndex()
    {
        return redirect('/Admin/User/index');
    }

    // 加载购物车页面
    public function getCart()
    {
        $res = DB::table('cart')->get();

        return view('/Admin/Cart/index',['res'=>$res]);
    }

    // 加载网站配置页面
    public function getSetting()
    {
        $res = DB::table('setting')->get();

        return view('/Admin/Setting/index',['res'=>$res]);
    }

    // 加载网站配置编辑页面
    public function getEdit($id){
        $res = DB::table('setting')->where('id','=',$id)->get();
        return view('/Admin/Setting/edit',['res'=>$res[0]]);
    }

    // 修改
    public function postUpdate(Request $request){
        $data = $request->except('_token');

        $res = DB::table('setting')->where('id','=',$data['id'])->update(
            [
                'title' => $data['title'],
                'name' => $data['name']
            ]
        );

        if($res){
            echo "<script>alert('修改成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('修改失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 网站配置删除
    public function getDelete($id){
        $res = DB::table('setting')->where('id', '=',$id)->delete();

        if($res){
            echo "<script>alert('删除成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('删除失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

}
