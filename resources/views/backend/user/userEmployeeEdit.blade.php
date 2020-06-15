@extends('backend.layouts.backend-master')
@section('backend-main')

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Tài khoản</a></li>
    <li><a href="#">Quản trị nhân viên</a></li>
    <li class="active">Sửa nhân viên</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
{{-- hiện thị lỗi sửa --}}
@if (session('thongbao'))
<div class="alert alert-success">
    <ul>
        <li>{!!session('thongbao')!!}</li>
    </ul>
</div>
@endif
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <form action="" method="POST"  class="form-horizontal">
                @csrf
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Thêm mới</strong> nhân viên</h3>
                    </div>

                    <div class="panel-body">



                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Họ và tên</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input name="name" type="text" class="form-control" id="" value="{{!empty($user->name)?$user->name:''}}" >
                                </div>
                                <span style="color:red">{{$errors->first('name')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Giới tính</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="row">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="sex" class="custom-control-input" value="1" {{!empty($user->sex)==1?'checked':''}} >
                                        <label class="custom-control-label" for="customRadioInline1">Nam</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="sex" class="custom-control-input" value="0" {{!empty($user->sex)==0?'checked':''}}>
                                        <label class="custom-control-label" for="customRadioInline2">Nữ</label>
                                    </div>
                                    <br>    
                                    <span style="color:red">{{$errors->first('sex')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Ngày sinh</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    <input name="birthday" type="date" class="form-control" id="" value="{{!empty($user->birthday)?$user->birthday:''}}">
                                </div>
                                <span style="color:red">{{$errors->first('birthday')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Email</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                    <input name="email" type="email"  disabled="" class="form-control" id="" value="{{!empty($user->email)?$user->email:''}}" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Số điện thoại</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                    <input name="phone" type="text" class="form-control" id="" value="{{!empty($user->phone)?$user->phone:''}}" >
                                </div>
                                <span style="color:red">{{$errors->first('phone')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Địa chỉ</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-home"></span></span>
                                    <input name="address" type="text" class="form-control" id="" value="{{!empty($user->address)?$user->address:''}}" >
                                </div>
                                <span style="color:red">{{$errors->first('address')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Mật khẩu</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                    <input name="password" type="password" class="form-control" id="" >
                                </div>
                                <span style="color:red">{{$errors->first('password')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nhập lại mật khẩu</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                    <input name="rePassword" type="password" class="form-control" id="" >
                                </div>
                                <span style="color:red">{{$errors->first('rePassword')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Vai trò</label>
                            <div class="col-md-6 col-xs-12">
                                <select name="roleID[]" id="input" class="mdb-select md-form form-control" multiple>
                                    @foreach($listRole as $role)
                                    <option {{$listUserOfRole->contains($role->id) ? 'selected' : ''}}  value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                <span style="color:red">{{$errors->first('roleID')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="reset" class="btn btn-default">Xóa trường</button>
                        <button type="submit" class="btn btn-primary pull-right">Thêm</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- END PAGE CONTENT WRAPPER -->
<!-- END PAGE CONTENT WRAPPER -->
@stop