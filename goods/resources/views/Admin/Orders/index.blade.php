@extends('Layout.index')
@section('orders','open')
@section('ordersList','active')


@section('container')
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    订单列表
                </h1>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>表格</li>
                    <li><a class="link-effect" href="">订单列表</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">订单列表</h3>
        </div>
        <div class="block-content">
            <!-- DataTables init on table by adding .js-dataTable-simple class, functionality initialized in js/pages/base_tables_datatables.js -->
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped js-dataTable-simple dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th class="text-center sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending" >ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" >用户ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" >商品ID</th>
                                    <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">联系人</th>
                                    <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">收货地址</th>
                                    <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">邮编</th>
                                    <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">电话</th>
                                    <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">添加时间</th>
                                    <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">总金额</th>
                                    <th class="text-center sorting_disabled"  rowspan="1" colspan="1" aria-label="Actions">状态</th>
                                    <th class="text-center sorting_disabled"  rowspan="1" colspan="1" aria-label="Actions">操作</th>
                                </tr>
                            </thead>
                            <tbody>

                            {{-- 遍历循环 --}}
                            @foreach($res as $k=>$v)

                            @if($k%2 == 1)
                                <tr role="row" class="odd">
                            @else
                                <tr role="row" class="even">
                            @endif

                                <td class="text-center sorting_1">{{$v['id']}}</td>
                                <td class="font-w600">{{$v['uid']}}</td>
                                <td class="font-w600">{{$v['goodsid']}}</td>
                                <td class="hidden-xs">{{$v['linkman']}}</td>
                                <td class="hidden-xs">{{$v['address']}}</td>
                                <td class="hidden-xs">{{$v['code']}}</td>
                                <td class="hidden-xs">{{$v['phone']}}</td>
                                <td class="hidden-xs">{{$v['addtime']}}</td>
                                <td class="hidden-xs">{{$v['total']}}</td>
                                <td class="hidden-xs">
                                    <span class="label {{$color[$v['status']]}}">{{$auth[$v['status']]}}</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="编辑"><a href="/Admin/Orders/edit/{{$v['id']}}"><i class="fa fa-pencil">
                                                        </i></a></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="删除"><a href="/Admin/Orders/delete/{{$v['id']}}"><i class="fa fa-times"></i></a></button>
                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="订单详情"><a href="/Admin/Orders/detail/{{$v['id']}}"><i class="fa fa-reorder"></i></a></button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing <strong>1</strong>-<strong>10</strong> of <strong>40</strong></div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="DataTables_Table_0" tabindex="0" id="DataTables_Table_0_previous"><a href="#"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button active" aria-controls="DataTables_Table_0" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">4</a></li><li class="paginate_button next" aria-controls="DataTables_Table_0" tabindex="0" id="DataTables_Table_0_next"><a href="#"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
        </div>
    </div>
    @endsection