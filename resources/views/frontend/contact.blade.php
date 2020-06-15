@extends('layouts.master')

@section('main')
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
				<div class="col-first">
					<h1>Liên hệ với chúng tôi</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Liên hệ</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Contact Area =================-->
	<section class="contact_area section_gap_bottom">
		<div class="container">
			<div id="mapBox" class="mapBox" data-lat="21.047105" data-lon="105.786521" data-zoom="13" data-info="Military Technical Academy"
			data-pin="{{ url('/') }}/public/img/logo.png"
			 data-mlat="21.047105" data-mlon="105.786521">
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="contact_info">
						<div class="info_item">
							<i class="lnr lnr-home"></i>
							<h6>234 Hoàng Quốc Việt</h6>
							<p>quận Cầu Giấy, Hà Nội</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">Hotline: 0944 126 876</a></h6>
							<p>Thời gian làm việc: 8:00 - 21:00<br>( Thứ 2 -> Chủ nhật)</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">hotro.electro@gmail.com</a></h6>
							<p>Giải đáp thắc mắc khiếu nại</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Tên của bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tên của bạn'">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email của bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email của bạn'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Tiêu đề" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tiêu đề'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Nội dung" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nội dung'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn">Gửi</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->

	<!--================Contact Success and Error message Area =================-->
	<div id="success" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Thank you</h2>
					<p>Your message is successfully sent...</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals error -->

	<div id="error" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Sorry !</h2>
					<p> Something went wrong </p>
				</div>
			</div>
		</div>
	</div>
	<!--================End Contact Success and Error message Area =================-->

@stop