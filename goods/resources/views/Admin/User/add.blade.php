@extends('Layout.index')
@section('user','open')
@section('userAdd','active')


@section('container')
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
               添加用户
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>表格</li>
                <li><a class="link-effect" href="">添加用户表格</a></li>
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
                <h3 class="block-title">添加用户表格</h3>
            </div>
            <div class="block-content block-content-narrow">
                <form class="form-horizontal push-10-t" action="/Admin/User/insert" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input required class="form-control" type="text" id="material-text" name="username" placeholder="请输入用户名，不可修改">
                                <label for="material-text">用户名</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input required  class="form-control" type="password" id="material-password" name="password" placeholder="请输入密码">
                                <label for="material-password">密码</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input required  class="form-control" type="password" id="material-password" name="turePass" placeholder="请输认密码">
                                <label for="material-password">请再输入一次密码</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material">
                                <input required  class="form-control" type="text" name="name" placeholder="请输入昵称">
                                <label for="material-email">昵称</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-7">
                            <div class="form-material">
                                <select class="form-control" id="material-select" name="sex" size="1">
                                    <option value="1">男</option>
                                    <option value="2">女</option>
                                </select>
                                <label for="material-select">请选择性别</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material">
                                <input required   class="form-control" type="text" id="material-email" name="address" placeholder="请输入家庭住址">
                                <label for="material-email">地址</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-7">
                            <div class="form-material">
                                <input class="form-control" type="number" id="material-gridf" name="code" placeholder="请输入code码，可不填">
                                <label for="material-gridf">code</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material">
                                <input required class="form-control" type="number" id="material-email" name="phone" placeholder="请输入电话号码">
                                <label for="material-textarea-small">电话号码</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material form-material-primary">
                                <input  required  class="form-control" type="email" id="material-email" name="email" placeholder="请输入邮箱号码">
                                <label for="material-color-primary">邮箱</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <select class="form-control" id="material-select" name="state" size="1">
                                    <option value="0">普通用户</option>
                                    <option value="1">管理员</option>
                                    <option value="2">超级管理员</option>
                                </select>
                                <label for="material-select">权限</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="hidden" name="addtime" value="{{time()}}">
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