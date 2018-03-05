@extends('Layout.index')
@section('type','open')
@section('good','open')
@section('typeAdd','active')

@section('container')
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    修改分类信息<small></small>
                </h1>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>修改表单</li>
                    <li><a class="link-effect" href=""></a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content content-narrow">
        <!-- Forms Row -->
        <div class="row">
            <div class="col-lg-8">
                <!-- Bootstrap Forms Validation -->
                <h2 class="content-heading">Bootstrap Forms</h2>
                <div class="block">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button"><i class="si si-settings"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">修改分类</h3>
                    </div>
                    <div class="block-content block-content-narrow">
                        <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/base_forms_validation.js) -->
                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-bootstrap form-horizontal" action="/Admin/Type/update" method="post" novalidate="novalidate">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="val-username">修改分类名称</label>
                                <div class="col-md-7">
                                    <input class="form-control" type="text" id="val-username" name="name" value="{{$res[0]['name']}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <input type="hidden" name="id" value="{{$id}}">
                                    <button class="btn btn-sm btn-primary" type="submit">提交</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Bootstrap Forms Validation -->
            </div>
       </div>
        <!-- END Forms Row -->

    </div>
@endsection