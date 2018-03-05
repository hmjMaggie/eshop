<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    // 加载上新商品页面
    public function getNew(){
        $res = DB::table('goods')->where('state','=',0)->get();

        // 解析模板并压入数据
        return view('/Admin/Goods/new',['res'=>$res]);
    }

    // 加载出售商品页面
    public function getIndex()
    {
        $res = DB::table('goods')->where('state','=',1)->get();

        // 解析模板并压入数据
        return view('/Admin/Goods/index',['res'=>$res]);
    }

    // 加载下架商品页面
    public function getRecycle(){
        $res = DB::table('goods')->where('state','=',2)->get();

        // 解析模板并压入数据
        return view('/Admin/Goods/recycle',['res'=>$res]);
    }

    // 加载编辑页面
    public function getEdit($id){
        $res = DB::table('goods')->where('id','=',$id)->get();
        return view('/Admin/Goods/edit',['res'=>$res[0]]);
    }

    // 修改
    public function postUpdate(Request $request){
        $data = $request->except('_token');

        $res = DB::table('goods')->where('id','=',$data['id'])->update(
            [
                'goods' => $data['goods'],
                'company' => $data['company'],
                'price' => $data['price'],
                'state' => $data['state'],
                'store' => $data['store']
            ]
        );

        if($res){
            echo "<script>alert('修改成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('修改失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 删除
    public function getDelete($id){
        $res = DB::table('goods')->where('id', '=',$id)->delete();

        if($res){
            echo "<script>alert('删除成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('删除失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 下架
    public function getInrecycle($id){
        $res = DB::table('goods')->where('id','=',$id)->update(['state' => 2]);

        if($res){
            echo "<script>alert('商品下架成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('商品下架失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 上架
    public function getOutrecycle($id){
        $res = DB::table('goods')->where('id','=',$id)->update(['state' => 1]);

        if($res){
            echo "<script>alert('商品上架成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('商品上架失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 加载添加表单
    public function getAdd()
    {
        // 获取分类信息
        $res = TypeController::getType();
        return view('/Admin/Goods/add',['res'=>$res]);
    }

    // 增加商品
    public function postInsert(Request $request)
    {
        // 执行文件上传
        if($request->hasFile('picname') && $request->file('picname')->isValid()){

            // 获取文件后缀
            $ext = $request->file('picname')->getClientOriginalExtension();

            // 随机生成文件名
            $filename = md5(date('YmdHis'));
            $picname = $filename.'.'.$ext;

            // 移动上传的文件到指定目录
            $res1 = $request->file('picname')->move('./Uploads/',$picname);

            if(!$res1){
                echo "<script>alert('上传文件失败，请重试');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            }
        }

        $data = $request->except('_token');

        $res2 = DB::table('goods')->insert(
            [
                'typeid' => $data['typeid'],
                'goods' => $data['goods'],
                'company' => $data['company'],
                'descr' => $data['descr'],
                'price' => $data['price'],
                'state' => $data['state'],
                'store' => $data['store'],
                'picname' => $picname
            ]
        );
        if($res2){
            echo "<script>alert('添加成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('添加失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }

        // 获取分类信息
        $res = TypeController::getType();
        return view('/Admin/Goods/add',['res'=>$res]);

    }
}
