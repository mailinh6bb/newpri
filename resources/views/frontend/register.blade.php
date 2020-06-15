@extends('layouts.master')

@section('main')
<style type="text/css">
	.error-text{
		color: red;
	}
</style>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
			<div class="col-first">
				<h1>Đăng ký</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Đăng ký</a>
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
						<h4>Bạn đã có tài khoản?</h4>
						{{-- <p>There are advances being made in science and technology everyday, and a good example of this is the</p> --}}
						<a class="primary-btn" href="{{route('get.user.login')}}">Đăng nhập ngay</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="login_form_inner">
					<div>
						<h3>Thông tin đăng ký</h3>
						<form action="" method="POST">
							@csrf
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Tên tài khoản" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tên tài khoản'">
								@if ($errors->has('name'))
								<span class="error-text">
									{{ $errors->first('name') }}
								</span>
								@endif
							</div>

							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="name" name="email"  required="" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
								@if ($errors->has('email'))
								<span class="error-text">
									{{ $errors->first('email') }}
								</span>
								@endif
							</div>

							<div class="col-md-12 form-group">
								<input type="number" class="form-control" id="name" name="phone"  required="" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'">
								@if ($errors->has('phone'))
								<span class="error-text">
									{{ $errors->first('phone') }}
								</span>
								@endif
							</div>

							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="address"  required="" placeholder="address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'address'">
								@if ($errors->has('address'))
								<span class="error-text">
									{{ $errors->first('address') }}
								</span>
								@endif
							</div>

							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" required="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mật khẩu'">
								@if ($errors->has('password'))
								<span class="error-text">
									{{ $errors->first('password') }}
								</span>
								@endif
							</div>

							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="rePassword" placeholder="Nhập lại mật khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập lại mật khẩu'">
								@if ($errors->has('rePassword'))
								<span class="error-text">
									{{ $errors->first('rePassword') }}
								</span>
								@endif
							</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Đăng ký</button>
								{{-- <a href="#">Forgot Password?</a> --}}
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