@extends('backend.layouts.backend-master')
@section('backend-main')

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Tài khoản</a></li>
    <li><a href="#">Quản trị nhân viên</a></li>
    <li class="active">Thêm mới quản trị</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            {{-- hiện thị lỗi sửa --}}
            @if (session('thongbao'))
            <div class="alert alert-success">
                <ul>
                    <li>{!!session('thongbao')!!}</li>
                </ul>
            </div>
            @endif
            <form action="" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Thêm mới</strong> quản trị</h3>
                    </div>

                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tên vai trò quản trị</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input id="name" name="name" type="text" class="form-control">
                                </div>
                                <span style="color:red">{{$errors->first('name')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Phân quyền quản trị</label>
                            <div class="col-md-6 col-xs-12">
                             <span style="color:red">{{$errors->first('permissionID')}}</span>
                             <div class="row">
                                {{-- đổ dữ liễu permission --}}
                                @foreach($listPermission as $permission)
                                <div class="col-md-3">
                                    <label class="check">
                                        <input type="checkbox" name="permissionID[]" value="{{$permission->id}}" class="icheckbox"/>
                                        {{$permission->display_name}}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="reset" class="btn btn-default">Xóa trường</button>
                    <button type="submit" class="btn btn-primary pull-right">Lưu</button>
                </div>
            </div>
        </form>

    </div>
</div>

</div>
<!-- END PAGE CONTENT WRAPPER -->
@stop