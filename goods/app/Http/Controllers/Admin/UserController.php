<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // 加载用户页面
    public function getIndex()
    {
        $res = DB::table('users')->where('recycle','=',0)->get();

        $auth = array(
            '0'=>'普通用户',
            '1'=>'管理员',
            '2'=>'超级管理员'
        );

        $color = array(
            '0'=>'label-warning',
            '1'=>'label-primary',
            '2'=>'label-success'
        );

        // 解析模板并压入数据
        return view('/Admin/User/index',['res'=>$res,'auth'=>$auth,'color'=>$color]);
    }

    // 加载回收站页面
    public function getRecycle(){
        $res = DB::table('users')->where('recycle','=',1)->get();

        $auth = array(
            '0'=>'普通用户',
            '1'=>'管理员',
            '2'=>'超级管理员'
        );

        $color = array(
            '0'=>'label-warning',
            '1'=>'label-primary',
            '2'=>'label-success'
        );

        // 解析模板并压入数据
        return view('/Admin/User/recycle',['res'=>$res,'auth'=>$auth,'color'=>$color]);
    }

    // 加载增加页面
    public function getAdd()
    {
        return view('/Admin/User/add');
    }

    // 增加用户
    public function postInsert(Request $request)
    {
        $data = $request->except('_token');

        // 判定密码是否相同
        if( $data['password'] != $data['turePass']){
            echo "<script>alert('两次输入的密码不相同');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }

        // 判定用户名是否重复
        $res = DB::table('users')->where('username','=',$data['username'])->get();
        if($res){
            echo "<script>alert('用户名已存在');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }

        // 判定电话是否重复
        $res2 = DB::table('users')->where('phone','=',$data['phone'])->get();
        if($res2){
            echo "<script>alert('电话已存在');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }

        // 判定邮箱是否重复
        $res1 = DB::table('users')->where('email','=',$data['email'])->get();
        if($res1){
            echo "<script>alert('邮箱已存在');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }

        $res3 = DB::table('users')->insert(
            [
                'username' => $data['username'],
                'name' => $data['username'],
                'password' => $data['password'],
                'sex' => $data['sex'],
                'address' => $data['address'],
                'code' => $data['code'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'state' => $data['state'],
                'addtime' => $data['addtime']
            ]
        );
        if($res3){
            echo "<script>alert('添加成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('添加失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 加载编辑页面
    public function getEdit($id){
        $res = DB::table('users')->where('id','=',$id)->get();
        return view('/Admin/User/edit',['res'=>$res[0]]);
    }

    // 修改
    public function postUpdate(Request $request){
        $data = $request->except('_token');

        // 判定密码是否相同
        if( $data['password'] != $data['turePass']){
            echo "<script>alert('两次输入的密码不相同');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }

        $res = DB::table('users')->where('id','=',$data['id'])->update(
                [
                    'name' => $data['username'],
                    'password' => $data['password'],
                    'sex' => $data['sex'],
                    'address' => $data['address'],
                    'code' => $data['code'],
                    'phone' => $data['phone'],
                    'state' => $data['state']
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
        $res = DB::table('users')->where('id', '=',$id)->delete();

        if($res){
            echo "<script>alert('删除成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('删除失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 放入回收站
    public function getInrecycle($id){
        $res = DB::table('users')->where('id','=',$id)->update(['recycle' => 1]);

        if($res){
            echo "<script>alert('加入回收站成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('加入回收站失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 移出回收站
    public function getOutrecycle($id){
        $res = DB::table('users')->where('id','=',$id)->update(['recycle' => 0]);

        if($res){
            echo "<script>alert('移出回收站成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('移出回收站失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 禁用用户
    public function getLock($id){
        $res = DB::table('users')->where('id','=',$id)->update(['state' => 0]);

        if($res){
            echo "<script>alert('禁用成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('禁用失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }
}
