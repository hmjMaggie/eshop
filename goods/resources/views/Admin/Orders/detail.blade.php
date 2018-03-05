@extends('Layout.index')
@section('orders','open')
@section('ordersList','active')

@section('container')
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    订单详情
                </h1>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li><a class="link-effect" href="">订单详情</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="block">
            <!-- DataTables init on table by adding .js-dataTable-simple class, functionality initialized in js/pages/base_tables_datatables.js -->
            <div class="col-lg-10">
                <!-- Masked Inputs (Bootstrap forms) -->
                <div class="block">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button"><i class="si si-settings"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">订单详情</h3>
                    </div>
                    <div class="block-content">
                        <form class="form-horizontal" action="" method="post">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-masked-date1">ID</label>
                                <div class="col-md-6">
                                    <input readonly class="js-masked-date form-control" type="text" id="example-masked-date1" name="example-masked-date1" value="{{$res['id']}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-masked-date2">订单ID</label>
                                <div class="col-md-6">
                                    <input readonly  class="js-masked-date-dash form-control" type="text" id="example-masked-date2" name="example-masked-date2"  value="{{$res['orderid']}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-masked-phone">商品ID</label>
                                <div class="col-md-6">
                                    <input readonly  class="js-masked-phone form-control" type="text" id="example-masked-phone" name="example-masked-phone"  value="{{$res['goodsid']}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-masked-phone-ext">商品名称</label>
                                <div class="col-md-6">
                                    <input readonly  class="js-masked-phone-ext form-control" type="text" id="example-masked-phone-ext"  value="{{$res['name']}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-masked-taxid">商品价格</label>
                                <div class="col-md-6">
                                    <input readonly  class="js-masked-taxid form-control" type="text" id="example-masked-taxid" name="example-masked-taxid"  value="{{$res['price']}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-masked-ssn">商品已售数量</label>
                                <div class="col-md-6">
                                    <input readonly  class="js-masked-ssn form-control" type="text" id="example-masked-ssn" name="example-masked-ssn"  value="{{$res['num']}}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Masked Inputs (Bootstrap forms) -->
            </div>
    </div>
    @endsection