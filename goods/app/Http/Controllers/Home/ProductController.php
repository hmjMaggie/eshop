<?php

namespace App\Http\Controllers\Home;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    // 获取一个大事记类似的数组
    public static function getTypeByPid($pid)
    {
        // 查询pid为制定id的信息
        $res = DB::table('type')->where('pid','=',$pid)->get();

        // 遍历查询到的结果
        $data = [];
        foreach ($res as $k=>$v){
            $v['tree'] = self::getTypeByPid($v['id']);
            $data[] = $v;
        }
        return $data;
    }

    // 加载用户页面
    public function getIndex()
    {

        // 调用该函数
        $res1 = self::getTypeByPid(0);

        $res = DB::table('users')->where('recycle','=',0)->get();

        // 商品
        $goods = DB::table('goods')->get();

        // 推荐商品
        $tui = DB::table('goods')->where('state','=',1)->get();

        // 解析模板并压入数据
        return view('/Home/Product/index',['res'=>$res,'goods'=>$goods,'res1'=>$res1,'tui'=>$tui]);
    }
}
