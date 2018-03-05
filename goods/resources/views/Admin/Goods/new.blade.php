@extends('Layout.index')
@section('goods','open')
@section('goodsNew','active')

@section('container')
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    查看上新商品 <small></small>
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
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">查看上新商品</h3>
        </div>
        <div class="block-content">
            <!-- DataTables init on table by adding .js-dataTable-simple class, functionality initialized in js/pages/base_tables_datatables.js -->
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped js-dataTable-simple dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr role="row">
                        <th class="text-center sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"  aria-sort="ascending" aria-label=": activate to sort column descending" >ID</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" aria-label="Name: activate to sort column ascending" >类别</th>
                        <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0"  aria-label="Email: activate to sort column ascending">名称</th>
                        <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0"  aria-label="Access: activate to sort column ascending">厂商</th>
                        <th class="text-center sorting_disabled"  aria-label="Actions">描述</th>
                        <th class="text-center sorting_disabled"  aria-label="Actions">价格</th>
                        <th class="text-center sorting_disabled" aria-label="Actions">图片</th>
                        <th class="text-center sorting_disabled"  aria-label="Actions">状态</th>
                        <th class="text-center sorting_disabled"  aria-label="Actions">库存量</th>
                        <th class="text-center sorting_disabled" aria-label="Actions">已购买</th>
                        <th class="text-center sorting_disabled"  aria-label="Actions">点击量</th>
                        <th class="text-center sorting_disabled"  aria-label="Actions">更改时间</th>
                        <th class="text-center sorting_disabled" aria-label="Actions">创建时间</th>
                        <th class="text-center sorting_disabled"  aria-label="Actions">操作</th>
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
                            <td class="font-w600">{{$v['typeid']}}</td>
                            <td class="hidden-xs">{{$v['goods']}}</td>
                            <td class="hidden-xs">{{$v['company']}}</td>
                            <td class="hidden-xs">{{$v['descr']}}</td>
                            <td class="hidden-xs">{{$v['price']}}</td>
                            <td class="hidden-xs"><img width="35" src="/Uploads/{{$v['picname']}}" alt=""></td>
                            <td class="hidden-xs">
                                <span class="label label-success">上新</span>
                            </td>
                            <td class="hidden-xs">{{$v['store']}}</td>
                            <td class="hidden-xs">{{$v['num']}}</td>
                            <td class="hidden-xs">{{$v['clicknum']}}</td>

                            <td class="hidden-xs">{{$v['updated_at']}}</td>
                            <td class="hidden-xs">{{$v['created_at']}}</td>

                            <td class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="编辑"><a href="/Admin/Goods/edit/{{$v['id']}}"><i class="fa fa-pencil">
                                            </i></a></button>
                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="删除"><a href="/Admin/Goods/delete/{{$v['id']}}"><i class="fa fa-times"></i></a></button>
                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="下架"><a href="/Admin/Goods/inrecycle/{{$v['id']}}"><i class="fa fa-recycle"></i></a></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                </tbody>

                        </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing <strong>1</strong>-<strong>10</strong> of <strong>40</strong></div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="DataTables_Table_0" tabindex="0" id="DataTables_Table_0_previous"><a href="#"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button active" aria-controls="DataTables_Table_0" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">4</a></li><li class="paginate_button next" aria-controls="DataTables_Table_0" tabindex="0" id="DataTables_Table_0_next"><a href="#"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
        </div>
    </div>
@endsection

