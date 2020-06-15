@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ route('admin.home')}}">Trang chủ</a></li>
    <li><a href="{{ route('admin.get.list.product')}}">Sản phẩm</a></li>
    <li class="active">Danh sách sản phẩm</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- START RESPONSIVE TABLES -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="page-head-text col-md-4">
                            <h1 class="panel-title"><strong>Quản lý</strong> sản phẩm</h1>
                        </div>
                        <div class="page-head-controls col-md-8">'.'
                            <div class="row">
                                <div class="col-md-9">
                                    <form action="">
                                        <div class="input-group" style="display: inline-flex;">
                                            <span class="input-group-addon"><span class="fa fa-search"></span></span>
                                            <input name="name" type="text" class="form-control"
                                            placeholder="Nhập sản phẩm cần tìm kiếm"
                                            value="{{ \Request::get('name') }}">
                                            <div class="form-group" style="margin:0px">
                                                <!-- <label for="inputState">Danh mục</label> -->
                                                <select class="form-control select" name="cate" id="inputState">
                                                    <!-- <option>Danh mục</option> -->
                                                    @if($categories)
                                                    @foreach($categories as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ \Request::get('cate') == $item->id ? "selected = 'selected'" : ""  }}>
                                                        {{ $item->name }}
                                                    </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{ route('admin.get.create.product')}}">
                                        <button class="btn btn-primary btn-rounded" style="width:100%"><span
                                            class="fa fa-plus"></span> Thêm
                                        sản phẩm</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-6">
                        <form action="" class="form-inline" style="margin-bottom :15px">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Search"
                                    value="{{ \Request::get('name') }}">
                            </div>
                            <div class="form-group">
                                <select name="cate" id=""
                                    style="padding: 7px 0px;border-radius: 8%;border: 1px solid #ccc;">
                                    <option value="">Danh mục </option>
                                    @if($categories)
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ \Request::get('cate') == $item->id ? "selected = 'selected'" : ""  }}>
                                        {{ $item->name }}
                                    </option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div> --}}

                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">ID</th>
                                    <th width="250" class="text-center">Tên sản phẩm</th>
                                    <th class="text-center">Mô tả</th>
                                    <th width="150" class="text-center">Hình ảnh</th>
                                    <th width="150" class="text-center">Loại</th>
                                    <th width="120" class="text-center">Giá</th>
                                    <th width="100" class="text-center">Danh mục</th>
                                    <th width="50" class="text-center">Trạng thái</th>
                                    <th width="120" class="text-center">Ngày nhập</th>
                                    <th width="120" class="text-center">Hành động</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if(isset($products))
                                @foreach($products as $product )
                                <tr>
                                    <td class="text-center">{{ $product->id }}</td>
                                    <td><strong>{{ $product->pro_name}}</strong></td>
                                    <td style="display: -webkit-box; -webkit-line-clamp: 4; overflow:
                                    hidden; -webkit-box-orient: vertical;border-width:1px 0 0 0">
                                    {{$product->pro_content}}</td>
                                    <td class="text-center"><img class="img-fluid" style="width:100px"
                                        {{-- src="{{ asset("img/product/$product->pro_image")}}" alt=""></td> --}}
                                        src="{{asset("/img/product/$product->pro_image")}}" alt=""></td>
                                        <td class="text-center">{{ $product->product_type->name}}</td>
                                        <td class="text-center">{{ number_format($product->pro_price) }} VNĐ</td>
                                        <?php
                                        $category=DB::table('categories')->where('id',$product->id)->first();
                                        ?>
                                        <td class="text-center">
                                            {{ $product->getCategory() }}
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.get.action.product',['status', $product -> id]) }}">
                                                @if ($product -> status == 1)
                                                <button type="button" class="btn btn-success">
                                                    Hiển Thị
                                                </button>
                                                @else
                                                <button type="button" class="btn btn-danger">
                                                    Đã Ẩn
                                                </button>
                                                @endif

                                            </a>
                                        </td>
                                        <td class="text-center">{{ date_format($product->created_at,'d/m/Y H:i:s') }}</td>
                                        <td class="text-center">
                                            <a>
                                               <button class="btn btn-danger btn-rounded btn-condensed btn-sm notiDelete"><span
                                                class="fa fa-times"></span></button>
                                            </a>
                                            <a href="{{ route('admin.get.edit.product',$product->id) }}">
                                                <button class="btn btn-primary btn-rounded btn-condensed btn-sm">
                                                    <span class="fa fa-pencil"></span></button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>

                                <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
                                    <div class="mb-container">
                                        <div class="mb-middle">
                                            <div class="mb-title"><span class="fa fa-times"></span> Xác nhận
                                                <strong>Xóa Sản Phẩm</strong> ?</div>
                                                <div class="mb-content">
                                                    <p>Nếu bạn muốn xóa sản phẩm này</p>
                                                    <p>Hãy ấn XÓA</p>
                                                </div>
                                                <div class="mb-footer">
                                                    <div class="pull-right">
                                                        <button class="btn btn-warning btn-lg mb-control-yes">
                                                            <a
                                                           href="{{ route('admin.get.action.product',['delete',$product->id])}}">Xóa</a>
                                                        </button>
                                                        <button class="btn btn-default btn-lg mb-control-close">Hủy</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MESSAGE BOX-->

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- END RESPONSIVE TABLES -->

            </div>
            @stop
