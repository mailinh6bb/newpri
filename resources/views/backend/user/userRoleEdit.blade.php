@extends('backend.layouts.backend-master')
@section('backend-main')

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Tài khoản</a></li>
    <li><a href="#">Quản trị nhân viên</a></li>
    <li class="active">Sửa quyền quản trị</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <form action="" method="POST" class="form-horizontal">
                @csrf
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Sửa </strong>quyền quản trị</h3>
                    </div>

                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tên vai trò quản trị cần sửa</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input id="name" name="name"  value="{{ $role -> name}}" type="text" class="form-control">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Phân quyền quản trị cần sửa</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="row">
                                    {{-- đổ dữ liễu permission --}}
                                    @foreach($listPermission as $permission)
                                    <div class="col-md-3">
                                        <label class="check">
                                            <input  name="permissionID[]" type="checkbox" value="{{$permission->id}}" {{$permissionID->contains($permission->id) ? 'checked' : ''}} value="{{$permission->id}}" class="icheckbox"/>
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
                        <a href="">
                            <button type="submit" class="btn btn-primary pull-right">Lưu</button>
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- END PAGE CONTENT WRAPPER -->
@stop