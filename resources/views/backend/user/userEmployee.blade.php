@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Tài khoản</a></li>
    <li class="active">Nhân viên</li>
</ul>

<div class="page-content-wrap">

    <!-- START RESPONSIVE TABLES -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="page-head-text">
                        <h1 class="panel-title"><strong>Quản lý</strong> nhân viên</h1>
                        <div class="form-group pull-right">
                            <a href="{{ route('create.role')}}">
                                <button class="btn btn-primary btn-rounded"><span class="fa fa-plus"></span> Thêm mới Nhóm Quyền</button>
                            </a>
                            <a href="{{ route('employee.user.create') }}">
                                <button class="btn btn-primary btn-rounded"><span class="fa fa-plus"></span> Thêm mới nhân viên</button>
                            </a>            
                        </div>
                        
                    </div>
                </div>

                <div class="panel-body panel-body-table">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">ID</th>
                                    <th>Nhóm</th>
                                    <th width="120" class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody id="data">
                                {{-- đổ dữ liễu các role  --}}
                                     @php
                                $stt = 1;
                                @endphp
                                @if($groupUser)
                                @foreach($groupUser as $groupUser)
                                @if(!empty($groupUser->id))
                                <td>{{$stt++}}</td>
                                @else
                                <td></td>
                                @endif

                                @if(!empty($groupUser->name))

                                <td>{{$groupUser->name}}
                                    (<span style="color: red">
                                        {{!empty($groupUser->users)?$groupUser->users->count():'0'}}
                                    </span> )
                                </td>
                                @else
                                <td></td>
                                @endif

                                <td class="text-center">
                                    <a href="{{ route('employee.show', $groupUser -> id) }}">
                                        <button class="btn btn-warning btn-rounded btn-condensed btn-sm"><span
                                            class="fa fa-info"></span></button>
                                        </a>
                                        <a href="{{ route('edit.role', $groupUser -> id) }}">
                                            <button   class="btn btn-primary btn-rounded btn-condensed btn-sm"><span
                                                class="fa fa-pencil"></span></button>
                                            </a>
                                            <a href="{{ route('destroy.role', $groupUser -> id) }}">
                                                <button class="btn btn-danger btn-rounded btn-condensed btn-sm"
                                                onClick="delete_row('trow_3');"><span class="fa fa-times"></span>
                                            </button>
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