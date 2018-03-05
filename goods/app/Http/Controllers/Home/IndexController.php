<?php

namespace App\Http\Controllers\Home;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function getIndex()
    {
        $res = DB::table('goods')->get();

        // 前台主页的控制器
        return view('Home/Index/index',['res'=>$res]);
    }
}
