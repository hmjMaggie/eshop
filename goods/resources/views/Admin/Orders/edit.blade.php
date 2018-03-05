@extends('Layout.index')
@section('orders','open')
@section('ordersList','active')


@section('container')
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
               编辑订单
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li><a class="link-effect" href="">编辑订单</a></li>
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
                <h3 class="block-title">编辑订单</h3>
            </div>
            <div class="block-content block-content-narrow">
                <form class="form-horizontal push-10-t" action="/Admin/Orders/update" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input required class="form-control" type="text" id="material-text" name="linkman" value="{{$res['linkman']}}">
                                <label for="material-text">联系人</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input required  class="form-control" type="text" id="material-password" name="address" value="{{$res['address']}}">
                                <label for="material-password">地址</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input required  class="form-control" type="number" id="material-password" name="code" value="{{$res['code']}}">
                                <label for="material-password">邮政编码</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material">
                                <input required  class="form-control" type="number" name="phone"  value="{{$res['phone']}}">
                                <label for="material-email">电话</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material">
                                <input readonly  class="form-control" type="number" id="material-email" name="total"  value="{{$res['total']}}">
                                <label for="material-email">订单总金额</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-7">
                            <div class="form-material">
                                <select class="form-control" id="material-select" name="status" size="1">
                                    @if($res['status'] == 0)
                                    <option value="0" selected>新订单</option>
                                    <option value="1" >已发货</option>
                                    <option value="2" >已收货</option>
                                    <option value="3" >无效订单</option>
                                    @elseif($res['status'] == 1)
                                    <option value="0" >新订单</option>
                                    <option value="1" selected>已发货</option>
                                    <option value="2" >已收货</option>
                                    <option value="3" >无效订单</option>
                                    @elseif($res['status'] == 2)
                                    <option value="0" >新订单</option>
                                    <option value="1" >已发货</option>
                                    <option value="2" selected>已收货</option>
                                    <option value="3" >无效订单</option>
                                    @elseif($res['status'] == 3)
                                    <option value="0" >新订单</option>
                                    <option value="1" >已发货</option>
                                    <option value="2" >已收货</option>
                                    <option value="3" selected>无效订单</option>
                                    @endif
                                </select>
                                <label for="material-select">请选择订单状态</label>
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