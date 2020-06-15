@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Tài khoản</a></li>
    <li class="active">Khách hàng</li>
</ul>
<!-- END BREADCRUMB -->
{{-- <!-- PAGE TITLE -->
 <div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Sortable Tables</h2>
</div>
<!-- END PAGE TITLE --> --}}

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <!-- START RESPONSIVE TABLES -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="page-head-text">
                        <h1 class="panel-title"><strong>Quản lý</strong> khách hàng</h1>
                    </div>
                </div>

                <div class="panel-body panel-body-table">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">ID</th>
                                    <th class="text-center" width="150">Tên tài khoản</th>
                                    <th width="100">Giới Tính</th>
                                    <th width="200" class="text-center">Email</th>
                                    <th width="120" class="text-center">Số điện thoại</th>
                                    <th width="300" class="text-center">Địa chỉ</th>
                                    <th width="120" class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($users))
                                @foreach ($users as $user)

                                <tr id="trow_3">
                                    <td class="text-center">1</td>
                                    <td class="text-center"><strong>{{$user -> name}}</strong></td>
                                    <td class="text-center">
                                     @if ($user['sex'] == 1)
                                     {{'Nam'}}
                                     @else
                                     {{'Nữ'}}
                                     @endif
                                 </td>
                                 <td class="text-center">{{$user -> email}}</td>
                                 <td class="text-center">{{$user -> phone}}</td>
                                 <td class="text-center">{{$user -> address}}</td>
                                 <td class="text-center">
                                    <a href="{{ route('delete.user', $user -> id) }}">
                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm"
                                        onClick="delete_row('trow_3');"><span class="fa fa-times"></span></button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- END RESPONSIVE TABLES -->

</div>
<!-- PAGE CONTENT WRAPPER 
@stop