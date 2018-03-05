@extends('Layout.index')
@section('goods','open')
@section('goodsAdd','active')

@section('container')
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                添加商品 <small></small>
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
<div class="col-md-9">
    <!-- Default Elements -->
    <div class="block">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
            </ul>
            <h3 class="block-title">添加商品基本信息</h3>
        </div>
        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{url('/Admin/Goods/insert')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-xs-12" for="example-select">请选择分类</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="example-select" name="typeid" size="1">
                            <option value="0">请选择</option>
                            @foreach($res as $k=>$v)
                            <option value="{{$v['id']}}">{{$v['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12" for="example-text-input">商品名称</label>
                    <div class="col-sm-9">
                        <input required class="form-control" type="text" id="example-text-input" name="goods" placeholder="请输入商品名..">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12" for="example-email-input">商品厂商</label>
                    <div class="col-sm-9">
                        <input  class="form-control" type="text" id="example-email-input" name="company" placeholder="请输入商品厂商..">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12" for="example-email-input">商品评价</label>
                    <div class="col-sm-12">
                        <textarea name="descr" id="" cols="70" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group has-success">
                    <label class="col-xs-12" for="example-text-input-success">商品单价</label>
                    <div class="col-sm-9">
                        <input required  class="form-control" type="number" id="example-text-input-success" name="price" placeholder="请输入商品单价..">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12" for="example-file-multiple-input">请上传商品主图</label>
                    <div class="col-xs-12">
                        <input type="file" id="example-file-multiple-input" name="picname" multiple="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12" for="example-select">请选择商品状态</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="example-select" name="state" size="1">
                            <option value="0">新上架</option>
                            <option value="1">出售中</option>
                            <option value="2">已下架</option>
                        </select>
                    </div>
                </div>
                <div class="form-group has-error">
                    <label class="col-xs-12" for="example-text-input-error">商品库存</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="number" id="example-text-input-error" name="store" placeholder="请输入商品库存..">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <button class="btn btn-sm btn-primary" type="submit">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Default Elements -->
</div>
@endsection

@section('editorjs')
    <script src="./Admin/assets/js/plugins/ckeditor/ckeditor.js"></script>
@endsection