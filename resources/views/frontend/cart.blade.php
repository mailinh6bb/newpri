@extends('layouts.master')

@section('main')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
            <div class="col-first">
                <h1>Giỏ hàng</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Giỏ hàng</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Sổ lượng</th>
                            <th scope="col" width="200">Tổng</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                        $i=1;
                        @endphp
                        @foreach ($content as $cart_item)
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="{{ url('/')}}/public/img/product/macair-1.jpg" alt="">
                                    </div>
                                    <div class="media-body" style="font-weight:bold ">
                                        <p>{{$cart_item -> name}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>{{ number_format($cart_item -> price, 0, ',', '.')}} VNĐ</h5>
                                Đã Giảm : {{$cart_item-> options -> sale}} %
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="text" name="qty"  min='1' data-id="{{ $cart_item->rowId }}"  value="{{ $cart_item -> qty}}" class=" input-text qty">
                                    <input type="hidden" name="" class="pro_id{{$cart_item -> rowId}}" value="{{$cart_item -> id}}">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                    class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{number_format($cart_item -> price * $cart_item -> qty,0, ',', '.')}} VNĐ</h5>
                                </td>
                            </tr>
                            @php
                            $i++;
                            @endphp
                            @endforeach
                            <tr class="bottom_button">
                                <td>
                                    <a class="gray_btn" href="#">Cập nhật giỏ hàng</a>
                                </td>                    
                                <td>
                                    <h5>Tổng</h5>
                                </td>
                                <td></td>
                                <td>
                                    <h5 style="font-size: 18px;font-weight:bold">{{$total}} VNĐ</h5>
                                </td>
                            </tr>

                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="#">Tiếp tục mua sắm</a>
                                        <a class="primary-btn" href="{{ route('get.checkout') }}">Thanh toán</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
    @stop
    @section('script')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function(){
            $('.qty').blur(function(){
                let rowid = $(this).data('id');
                let proid = $(".pro_id"+rowid).val();
                $.ajax({
                    url : 'cart-update/'+rowid,
                    type : 'POST',
                    dataType : 'json',
                    data : {
                        qty : $(this).val(),
                        proid: proid,
                    },
                    success : function(data){
                        if(data.error){
                           alert(data.error);
                            location.reload();
                        }else{
                            alert(data.result);
                         location.reload();
                     }
                 }
             });
            });
        });
    </script>
    @stop