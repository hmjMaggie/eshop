<?php

namespace App\Http\Controllers\Home;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // 前台登录
    public function getIndex(){
        return view('Home/Login/login');
    }

    // 登录
    public function postLogin(Request $request){

        $data = $request->except('_token');

        $res1 = DB::table('users')->where('username','=',$data['username'])->get();
        $res2 = DB::table('users')->where('password','=',$data['password'])->get();

        if($res1[0]['id'] == $res2[0]['id'] ){
            $id = $res1[0]['id'];

            $request->session()->put('id', $id);

            echo "<script>alert('登录成功');</script>";
            return redirect('/Home/Index/index');
        }else{
            echo "<script>alert('登录失败,用户名或密码错误');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }

    }

    // 前台注册
    public function getRegister(){
        return view('Home/Login/register');
    }

    // 注册
    public function postRegister(Request $request){
        $data = $request->except('_token');

        $res = DB::table('users')->insert(
            [
                'password' => $data['password'],
                'phone' => $data['phone']
            ]
        );

        if($res){
            echo "<script>alert('注册成功');</script>";
            return redirect('/Home/Login/index');
        }else{
            echo "<script>alert('注册失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

}
