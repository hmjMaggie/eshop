<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    // 查询所有的分类信息
    public static function getType(){
        // 查询所有的分类信息
        $res = DB::table('type')
            ->select(DB::raw('*,concat(path,",",id) npath'))
            ->orderBy('npath','asc')
            ->get();

        // 遍历判断path路径中逗号出现的次数，并添加相应的路径信息
        foreach ($res as $k=>$v){
            // 获取path路径中逗号出现的次数
            $len = substr_count($res[$k]['path'],',');

            // 根据逗号出现的次数，给分类名称添加相应的路径信息
            $res[$k]['name'] = str_repeat('|----',$len).$v['name'];
        }

        return $res;
    }

    // 加载分类列表
    public function getIndex(){

        $res = self::getType();

        // 准备右边隔行变色的数组
        $color = array('info','success','warning','danger');

        return view('/Admin/Type/index',['res'=>$res,'color'=>$color]);
    }

    // 加载添加分类表单
    public function getAdd($id){

        $res = self::getType();

        return view('/Admin/Type/add',['res'=>$res,'id'=>$id]);
    }

    // 添加分类方法
    public function postInsert(Request $request){
        $data = $request->except('_token');

        if($data['pid'] == 0){
            $data['path'] = 0;
        }else{
            // 查询父类信息
            $parent = DB::table('type')->where('id','=',$data['pid'])->first();

            // 子类的path信息等于父类的path拼上父类的pid
            $data['path'] = $parent['path'].','.$data['pid'];
        }

        // 添加信息
        $res = DB::table('type')->insert($data);

        if($res){
            echo "<script>alert('添加成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('添加失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 加载编辑表单
    public function getEdit($id){
        $res = DB::table('type')->where('id','=',$id)->get();
        return view('/Admin/Type/edit',['res'=>$res,'id'=>$id]);
    }

    // 修改
    public function postUpdate(Request $request){
        $data = $request->except('_token');

        $res = DB::table('type')->where('id','=',$data['id'])->update(['name' => $data['name']]);

        if($res){
            echo "<script>alert('修改成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('修改失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 删除
    public function getDelete($id){
        // 查询下面是否有子类
        $res = DB::table('type')->where('pid','=',$id)->get();

        if($res){
            echo "<script>alert('该分类下面有子类，不能删除');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            // 执行删除
            $res1 = DB::table('type')->where('id','=',$id)->delete();

            if($res1){
                echo "<script>alert('删除成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            }else{
                echo "<script>alert('删除失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            }
        }
    }

   // 放入回收站
    public function getInrecycle($id){

    }
}
