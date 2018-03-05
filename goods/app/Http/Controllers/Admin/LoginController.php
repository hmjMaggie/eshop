<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // 加载登录页面
    public function getIndex()
    {
        return view('/Admin/Login/index');
    }

    // 登录
    public function postLogin(Request $request)
    {
        $data = $request->except('_token');

        $res1 = DB::table('users')->where('username','=',$data['username'])->get();
        $res2 = DB::table('users')->where('password','=',$data['password'])->get();

        if($res1[0]['id'] == $res2[0]['id'] ){
            $state = $res1[0]['state'];

            // 有权限才可以登录成功
            if($state == 1 || $state == 2){
                echo "<script>alert('登录成功');</script>";
                return redirect('/Admin/Index/index');
            }else{
                echo "<script>alert('登录失败,用户名或密码错误');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            }
        }
    }
}
