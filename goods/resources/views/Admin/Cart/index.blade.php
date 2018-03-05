@extends('Layout.index')
@section('cart','open')
@section('cartList','active')


@section('container')
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    购物车列表
                </h1>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>表格</li>
                    <li><a class="link-effect" href="">购物车列表显示</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">购物车列表</h3>
        </div>
        <div class="block-content">
            <!-- DataTables init on table by adding .js-dataTable-simple class, functionality initialized in js/pages/base_tables_datatables.js -->
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped js-dataTable-simple dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th class="text-center sorting_disabled" aria-label="Actions">ID</th>
                                    <th class="text-center sorting_disabled"  aria-label="Actions">用户ID</th>
                                    <th class="text-center sorting_disabled"  aria-label="Actions">商品ID</th>
                                    <th class="text-center sorting_disabled"  aria-label="Actions">备注</th>
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

                                <td class="text-center">{{$v['id']}}</td>
                                <td class="text-center">{{$v['uid']}}</td>
                                <td class="text-center">{{$v['goodsid']}}</td>
                                <td class="text-center">ID为{{$v['uid']}}的用户，购物车里面有id为{{$v['goodsid']}}的商品</td>
                            @endforeach

                            </tbody>
                        </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing <strong>1</strong>-<strong>10</strong> of <strong>40</strong></div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="DataTables_Table_0" tabindex="0" id="DataTables_Table_0_previous"><a href="#"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button active" aria-controls="DataTables_Table_0" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">4</a></li><li class="paginate_button next" aria-controls="DataTables_Table_0" tabindex="0" id="DataTables_Table_0_next"><a href="#"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
        </div>
    </div>
    @endsection