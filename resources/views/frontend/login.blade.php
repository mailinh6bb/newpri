@extends('layouts.master')

@section('main')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
			<div class="col-first">
				<h1>Đăng nhập</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Đăng nhập</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="login_box_img">
					<img class="img-fluid" src="{{ url('/')}}/img/login.jpg" alt="">
					<div class="hover">
						<h4>Bạn là thành viên mới?</h4>
						<p>Đăng ký là thành viên để hưởng nhiều lợi ích và đặt mua hàng dễ dàng hơn.</p>
						<a class="primary-btn" href="{{route('get.user.register')}}">Đăng ký ngay</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="login_form_inner">
					<div>
						{{-- hiện thị lỗi sửa --}}
						@if (session('thongbao'))
						<div class="alert alert-danger">
							<ul>
								<li>{!!session('thongbao')!!}</li>
							</ul>
						</div>
						@endif
						<h3>Đăng nhập</h3>
						<form action="" method="POST">
							@csrf
							
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" required="" id="name" name="email" placeholder="Email tài khoản" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tên tài khoản'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" placeholder="Mật khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mật khẩu'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Ghi nhớ</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Đăng nhập</button>
								<a href="#">Quên mật khẩu?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Login Box Area =================-->
@stop