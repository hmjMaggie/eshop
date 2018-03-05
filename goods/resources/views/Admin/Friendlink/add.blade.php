@extends('Layout.index')
@section('friendlink','open')
@section('friendAdd','active')


@section('container')
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
               添加友情链接
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>表格</li>
                <li><a class="link-effect" href="">添加友情链接</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="content content-narrow">
<div class="row">
    <div class="col-md-10">
        <!-- Static Labels -->
        <div class="block">
            <div class="block-header">
                <ul class="block-options">
                    <li>
                        <button type="button"><i class="si si-settings"></i></button>
                    </li>
                </ul>
                <h3 class="block-title">添加友情链接</h3>
            </div>
            <div class="block-content block-content-narrow">
                <form class="form-horizontal push-10-t" action="/Admin/Friendlink/insert" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input required class="form-control" type="text" id="material-text" name="linkname" placeholder="请输入友情链接名称">
                                <label for="material-text">友情链接名称</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input required class="form-control" type="text" id="material-text" name="url" placeholder="请输入友情链接地址">
                                <label for="material-text">友情链接地址</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input required class="form-control" type="text" id="material-text" name="content" placeholder="请输入友情链接描述">
                                <label for="material-text">友情链接描述</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input required class="form-control" type="number" id="material-text" name="ordernum" placeholder="请输入友情链接排序">
                                <label for="material-text">友情链接排序</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-primary" type="submit">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Static Labels -->
    </div>
</div>
</div>
@endsection