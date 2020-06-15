@extends('layouts.master')

@section('main')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
  <div class="container">
    <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
      <div class="col-first">
        <h1>Thanh toán</h1>
        <nav class="d-flex align-items-center">
          <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
          <a href="single-product.html">Thanh toán</a>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
  <div class="container">
    <div class="billing_details">
      <div class="row">
        @if (Auth::user())
        <div class="col-lg-8">
          <h3>Thông tin đơn hàng</h3>
          <form action="" method="POST">
            @csrf
            <div class="col-md-12 form-group p_star">
              <label for="name">Tên</label>
              <input type="text" class="form-control" id="name" name="name" value="{{Auth::user() -> name}}">

            </div>
            <div class="col-md-12 form-group p_star">
              <label for="name">Phone</label>
              <input type="text" class="form-control" id="number" name="phone" value="{{Auth::user() -> phone}}">

            </div>
            <div class="col-md-12 form-group p_star">
              <label for="name">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="{{Auth::user() -> email}}">
            </div>

            <div class="col-md-12 form-group p_star">
              <label for="name">Địa Chỉ</label>
              <input type="text" class="form-control" id="add1" name="address" value="{{Auth::user() -> address}}">

            </div>
            <div class="col-md-12 form-group p_star">
              <label for="name">Ghi Chú</label>
              <input type="text" class="form-control" id="note" name="note">
              <span class="placeholder" data-placeholder="Ghi chú"></span>
            </div>
            <div class="col-md-12 form-group p_star">
              <span style="color:red">Quá trình mất 1 ít thời gian để gởi Mail. Hãy đợi trong giây lát!</span>
            </div>

            <div class="col-md-offset-3 col-md-6  form-group p_star">
              <button type="submit" value="submit" class="btn btn-info"> XÁC NHẬN </button>
            </div>
          </form>
        </div>
        @endif

        <div class="col-lg-4">
          <div class="order_box">
            <h2>Đơn hàng</h2>
            <ul class="list">
              <li><a href="#">Sản phẩm <span>Thành tiền</span></a></li>
              @if(isset($content))
              @foreach($content as $item)
              <li>
                <a href="#">{{ $item->name }} <span class="middle">x{{ $item->qty }}</span>
                  <span class="last">{{ number_format($item->qty* $item->price, 0, '.', '.')}} VNĐ</span>
                </a>
              </li>
              <hr>

              @endforeach
              @endif
              <li>Tổng Tiền:{{ \Cart::subTotal() }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Checkout Area =================-->
@stop