@extends('backend.layouts.backend-master')
@section('backend-main')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Đơn hàng</a></li>
    <li><a href="#">Chi tiết đơn hàng</a></li>
    <li class="active">#ĐH1</li>
</ul>
<!-- END BREADCRUMB -->                                                

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">                            
                    <h2>CHI TIẾT ĐƠN HÀNG MHD<strong>{{$orders -> id}}</strong></h2>
                    <div class="push-down-10 pull-right">
                        <button class="btn btn-primary"><span class="fa fa-print"></span> In</button>                                        
                    </div>
                    <!-- INVOICE -->
                    <div class="invoice">

                        <div class="row">
                            <div class="col-md-4">

                                <div class="invoice-address">
                                    <h5>Từ</h5>
                                    <h6>Công ty</h6>
                                    <p>Công Ty Cổ Phần Máy Tính Electro</p>
                                    <p>236 Hoàng Quốc Việt</p>
                                    <p>Cầu Giấy, Hà Nội</p>
                                    <p>Phone: 0944 126-876</p>
                                </div>

                            </div>
                            {{-- thông tin người nhận --}}
                            <div class="col-md-4">
                                @if (isset($orders))
                                <div class="invoice-address">
                                    <h5>Đến</h5>
                                    <h6>Nhà riêng</h6>
                                    <p>{{$orders -> user -> name}}</p>
                                    <p>{{$orders -> address}}</p>
                                    <p>Phone: {{ $orders -> phone}}</p>
                                </div> 
                                @endif
                            </div>
                            <div class="col-md-4">

                                <div class="invoice-address">
                                    <h5>Hóa đơn</h5>
                                    <table class="table table-striped">
                                        <tr>
                                            <td width="200">Mã hóa đơn:</td><td class="text-right">#MHD{{ $orders -> id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Ngày nhập hóa đơn:</td><td class="text-right">{{$orders -> created_at}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tổng hóa đơn:</strong></td><td class="text-right"><strong> {{ number_format($orders -> total, 0,',', '.')}} VNĐ</strong></td>
                                        </tr>
                                    </table>

                                </div>                                        

                            </div>
                        </div>
                        
                        <div class="table-invoice">
                            <table class="table">
                                <tr>
                                    <th>Chi tiết hóa đơn</th>
                                    <th class="text-center">Hình Ảnh</th>
                                    <th class="text-center">Số lượng</th>
                                    <th class="text-right">Giá Tiền</th>
                                </tr>
                                @if (isset($bills))
                                @foreach ($bills as $bill)
                                <tr>
                                    <td>
                                        <strong>{{ $bill -> product -> pro_name}}</strong>
                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.</p> --}}
                                    </td>
                                    <td class="text-right">
                                        <img src="img/product/{{$bill -> product -> pro_image}}" height="50px" width="50px">
                                    </td>
                                    <td class="text-center">{{$bill -> qty}}</td>
                                     <td class="text-center">{{ number_format($bill -> price_sale, 0, ',','.')}} VNĐ</td>
                                </tr>
                                @endforeach
                                @endif
                            </table>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Hình thức thanh toán</h4>
                                
                                <div class="paymant-table">
                                    {{-- <a href="#" class="active">
                                        <img src="{{ url('/') }}/public/admin/img/cards/paypal.png"/> PayPal
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                    <a href="#">
                                        <img src="{{ url('/') }}/public/admin/img/cards/visa.png"/> Visa
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a> --}}
                                    <a href="#">
                                        {{-- <img src="{{ url('/') }}/public/admin/img/cards/mastercard.png"/>  --}}
                                        Thanh toán khi nhận hàng
                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <h4>Khoản thanh toán</h4>
                                
                                <table class="table table-striped">
                                    <tr>
                                        <td width="200"><strong>Tạm tính:</strong></td><td class="text-right">{{number_format($orders -> total,0,',','.')}} VND</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Thuế (VAT 10%):</strong></td><td class="text-right">
                                            <?php
                                              echo  number_format($price_VAT = $orders -> total*(100-10)/100,0,',','.');
                                            ?> VND
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td><strong>Discount (2%):</strong></td><td class="text-right">$50.66</td>
                                    </tr> --}}
                                    <tr class="total">
                                        <td>Tổng thanh toán:</td><td class="text-right"><?php echo number_format($price_VAT,0,',','.') ?> VND</td>
                                    </tr>
                                </table>                                                
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right push-down-20">
                                    <button class="btn btn-primary"><span class="fa fa-mail-reply"></span> Quay về</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END INVOICE -->

                </div>
            </div>

        </div>
    </div>

</div>
<!-- END PAGE CONTENT WRAPPER -->      
@stop