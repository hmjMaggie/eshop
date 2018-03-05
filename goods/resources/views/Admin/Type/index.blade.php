@extends('Layout.index')
@section('type','open')
@section('good','open')
@section('typeList','active')

@section('container')
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    查看分类信息 <small></small>
                </h1>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>Tables</li>
                    <li><a class="link-effect" href="">Tools</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-10">
                <!-- Contextual Table -->
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">浏览分类</h3>
                    </div>
                    <div class="block-content">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">ID</th>
                                <th>Name</th>
                                <th class="hidden-xs" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($res as $k=>$v)
                                @if($k%2 != 0)
                                    <tr>
                                @else
                                    <tr class="{{$color[rand(0,3)]}}">
                                @endif
                                <td class="text-center">{{$v['id']}}</td>
                                <td>{{$v['name']}}</td>
                                <td class="hidden-xs">
                                    @if($v['status'] == 1)
                                        <span class="label label-success">开启</span>
                                    @else
                                        <span class="label label-danger">锁定</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="添加分类">
                                            <a href="{{url('Admin/Type/add')}}/{{$v['id']}}"><i class="fa fa-plus"></i></a></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="修改">
                                            <a href="{{url('Admin/Type/edit')}}/{{$v['id']}}"><i class="fa fa-pencil"></i></a></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="删除">
                                            <a href="{{url('Admin/Type/delete')}}/{{$v['id']}}"><i class="fa fa-times"></i></a></button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Contextual Table -->
            </div>
        </div>
    </div>
@endsection

