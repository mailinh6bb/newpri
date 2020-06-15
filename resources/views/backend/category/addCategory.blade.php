@extends('backend.layouts.backend-master')
@section('backend-main')

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ route('admin.home') }}">Trang chủ</a></li>
    <li><a href="{{ route('admin.get.list.category') }}">Danh mục</a></li>
    <li class="active">Thêm danh mục</li>
</ul>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="post" action="{{ route('admin.post.create.category') }}">
                @csrf
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Thêm </strong>danh mục</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Tên danh mục</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" name="name" />
                                        </div>
                                       @if($errors->has('name'))
                                        <div class="help-block">
                                            {!!$errors->first('name')!!}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="check" for="exampleCheck1">
                                    <input type="checkbox" class="icheckbox" checked="checked" name="cate_status"
                                        id="exampleCheck1" />Nổi bật
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-default">Xóa trường</button>
                        <button type="submit" class="btn btn-primary pull-right">Thêm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
@stop