@extends('Layout.index')
@section('user','open')
@section('userList','active')


@section('container')
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
               编辑用户
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>表格</li>
                <li><a class="link-effect" href="">编辑用户表格</a></li>
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
                <h3 class="block-title">编辑用户表格</h3>
            </div>
            <div class="block-content block-content-narrow">
                <form class="form-horizontal push-10-t" action="/Admin/User/update" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input readonly class="form-control" type="text" id="material-text" name="username" value="{{$res['username']}}">
                                <label for="material-text">用户名</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input required  class="form-control" type="password" id="material-password" name="password" value="{{$res['password']}}">
                                <label for="material-password">密码</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input required  class="form-control" type="password" id="material-password" name="turePass" value="{{$res['password']}}">
                                <label for="material-password">请再输入一次密码</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material">
                                <input required  class="form-control" type="text" name="name"  value="{{$res['name']}}">
                                <label for="material-email">昵称</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-7">
                            <div class="form-material">
                                <select class="form-control" id="material-select" name="sex" size="1">
                                    @if($res['sex'] == 1)
                                    <option value="1" selected>男</option>
                                    <option value="2" >女</option>
                                    @else
                                    <option value="1" >男</option>
                                    <option value="2" selected>女</option>
                                    @endif
                                </select>
                                <label for="material-select">请选择性别</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material">
                                <input required  class="form-control" type="text" id="material-email" name="address"  value="{{$res['address']}}">
                                <label for="material-email">地址</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-7">
                            <div class="form-material">
                                <input class="form-control" type="number" id="material-gridf" name="code"  value="{{$res['code']}}">
                                <label for="material-gridf">code</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material">
                                <input required class="form-control" type="number" id="material-email" name="phone"  value="{{$res['phone']}}">
                                <label for="material-textarea-small">电话号码</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material form-material-primary">
                                <input  readonly  class="form-control" type="email" id="material-email" name="email" value="{{$res['email']}}">
                                <label for="material-color-primary">邮箱</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <select class="form-control" id="material-select" name="state" size="1">
                                    @if($res['state'] == 0)
                                    <option value="0" selected >普通用户</option>
                                    <option value="1" >管理员</option>
                                    <option value="2" >超级管理员</option>
                                    @elseif($res['state'] == 1)
                                    <option value="0" >普通用户</option>
                                    <option value="1" selected >管理员</option>
                                    <option value="2" >超级管理员</option>
                                    @else
                                    <option value="0"  >普通用户</option>
                                    <option value="1" >管理员</option>
                                    <option value="2" selected >超级管理员</option>
                                    @endif
                                </select>
                                <label for="material-select">权限</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="hidden" name="id" value="{{$res['id']}}">
                            <button class="btn btn-primary" type="submit">修改</button>
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