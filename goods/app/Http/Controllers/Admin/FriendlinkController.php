<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FriendlinkController extends Controller
{
    // 加载用户页面
    public function getIndex()
    {
        $res = DB::table('friendlink')->orderBy('ordernum', 'asc')->get();

        // 解析模板并压入数据
        return view('/Admin/Friendlink/index',['res'=>$res]);
    }

    // 加载增加页面
    public function getAdd()
    {
        return view('/Admin/Friendlink/add');
    }

    // 增加用户
    public function postInsert(Request $request)
    {
        $data = $request->except('_token');

        $res = DB::table('friendlink')->insert(
            [
                'linkname' => $data['linkname'],
                'url' => $data['url'],
                'content' => $data['content'],
                'ordernum' => $data['ordernum']
            ]
        );
        if($res){
            echo "<script>alert('添加成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('添加失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }

    // 加载编辑页面
    public function getEdit($id){
        $res = DB::table('friendlink')->where('id','=',$id)->get();
        return view('/Admin/Friendlink/edit',['res'=>$res[0]]);
    }

    // 修改
    public function postUpdate(Request $request){
        $data = $request->except('_token');

        $res = DB::table('friendlink')->where('id','=',$data['id'])->update(
                [
                    'linkname' => $data['linkname'],
                    'url' => $data['url'],
                    'content' => $data['content'],
                    'ordernum' => $data['ordernum']
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
        $res = DB::table('friendlink')->where('id', '=',$id)->delete();

        if($res){
            echo "<script>alert('删除成功');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            echo "<script>alert('删除失败');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }
    }
}
