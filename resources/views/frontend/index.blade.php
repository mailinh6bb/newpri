@extends('layouts.master')
@section('main')
<section class="banner-area">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-start">
			<div class="col-lg-12">
				<div class="active-banner-slider owl-carousel">
					<!-- single-slide -->
					<div class="row single-slide align-items-center d-flex">
						<div class="col-lg-5 col-md-6">
							<div class="banner-content">
								<h1>The New <br>Macbook 16"</h1>
								<p>MacBook Pro 16 inch được cho là sẽ ra mắt vào thời gian tới và thay thế cho dòng MacBook Pro 15 inch hiện tại, đây sẽ là một chiếc MacBook với rất nhiều thay đổi đến từ Apple và sẽ khác biệt hẳn so với những dòng MacBook 15 inch từ 2016 đến nay vốn chủ yếu chỉ nâng cấp cấu hình, chính vì vậy đây là một sản phẩm rất đáng mong chờ.</p>
								<div class="add-bag d-flex align-items-center">
									<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
									<span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" src="img/banner/banner-img.png" alt="">
							</div>
						</div>
					</div>
					<!-- single-slide -->
					<div class="row single-slide">
						<div class="col-lg-5">
							<div class="banner-content">
								<h1>The New <br>Macbook 16"</h1>
								<p>MacBook Pro 16 inch được cho là sẽ ra mắt vào thời gian tới và thay thế cho dòng MacBook Pro 15 inch hiện tại, đây sẽ là một chiếc MacBook với rất nhiều thay đổi đến từ Apple và sẽ khác biệt hẳn so với những dòng MacBook 15 inch từ 2016 đến nay vốn chủ yếu chỉ nâng cấp cấu hình, chính vì vậy đây là một sản phẩm rất đáng mong chờ.</p>
								<div class="add-bag d-flex align-items-center">
									<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
									<span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" src="img/banner/banner-img.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- start features Area -->
<section class="features-area section_gap">
	<div class="container">
		<div class="row features-inner">
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon1.png" alt="">
					</div>
					<h6>Miễn phí vận chuyển</h6>
					<p>Miễn phí vận chuyển toàn quốc</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon2.png" alt="">
					</div>
					<h6>Chính sách đổi trả</h6>
					<p>Chính sách đổi trả đặc biệt</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon3.png" alt="">
					</div>
					<h6>Hỗ trợ 24/7</h6>
					<p>Luôn lắng nghe ý kiến khách hàng</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon4.png" alt="">
					</div>
					<h6>Bảo mật thanh toán</h6>
					<p>Thanh toán an toàn, nhanh chóng</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end features Area -->

<!-- Start category Area -->
<section class="category-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-12">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c1.jpg" alt="">
							<a href="{{ route('get.list.product.type', ['1']) }}">
								<div class="deal-details">
									<h6 class="deal-title">Laptop chơi game</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c2.jpg" alt="">
							<a href="{{ route('get.list.product.type', ['3']) }}">
								<div class="deal-details">
									<h6 class="deal-title">Laptop văn phòng</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
							<a href="{{ route('get.list.product.type', ['5']) }}">
								<div class="deal-details">
									<h6 class="deal-title">Laptop mỏng nhẹ</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c4.jpg" alt="">
							<a href="{{ route('get.list.product.type', ['2']) }}">
								<div class="deal-details">
									<h6 class="deal-title">Laptop đồ họa</h6>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-deal">
					<div class="overlay"></div>
					<img class="img-fluid w-100" src="img/category/c5.jpg" alt="">
					<a href="{{ route('get.list.product.type', ['4']) }}">
						<div class="deal-details">
							<h6 class="deal-title">Laptop doanh nhân</h6>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End category Area -->

<!-- start product Area -->
<section class="owl-carousel active-product-area section_gap">
	<!-- single product slide -->
	<div class="single-product-slider">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Sản Phẩm Mới Nhất</h1>
					</div>
				</div>
			</div>
			
			<div class="row">
				<!-- single product -->
				@if (isset($productNews))
				@foreach ($productNews as $element => $proNews)
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<div class="product-image">
							<img class="img-fluid-product" src="img/product/{{$proNews -> pro_image}}" alt="">
						</div>
						<div class="product-details">
							<a href="{{ route('get.product.detail',[$proNews -> pro_slug, $proNews ->id]) }}">{{$proNews -> pro_name}}</a>
							<div class="price">
								<h6>Giá: <strong>{{number_format($proNews -> pro_price)}} VNĐ</strong></h6>
								<h6 class="l-through">sale: {{ $proNews -> pro_sale}} %</h6>
							</div>
							<div class="prd-bottom">
								
								<a href="{{ route('add.cart', $proNews -> id) }}" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">Thêm vào<br>giỏ hàng</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Thêm vào<br>yêu thích</p>
								</a>
										{{-- <a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a> --}}
									</div>
								</div>
								
							</div>
						</div>
						@endforeach
						@endif
					</div>
				</div>
			</div>
			<!-- single product slide -->
			<div class="single-product-slider">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6 text-center">
							<div class="section-title">
								<h1>Sản Phẩm Bán Chạy</h1>
								{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
									dolore
								magna aliqua.</p> --}}
							</div>
						</div>
					</div>
					<div class="row">
						<!-- single product -->
						@if (isset($productHots))
						@foreach ($productHots as $element => $proHot)
						<div class="col-lg-3 col-md-6">
							<div class="single-product">
								<div class="product-image">
									<img class="img-fluid-product" src="img/product/{{ $proHot -> pro_image}}" alt="">
								</div>
								<div class="product-details">
									<a href="{{ route('get.product.detail',[$proHot -> pro_slug, $proHot ->id]) }}"> {{$proHot -> pro_name}}</a>
									<div class="price">
										<h6>Giá: <strong>{{ $proHot -> pro_price }}</strong></h6>
										<h6 class="l-through">sale: {{$proHot -> pro_sale}} %</h6>
									</div>
									<div class="prd-bottom">
										
										<a href="{{ route('add.cart', $proHot -> id) }}" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">Thêm vào<br>giỏ hàng</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Thêm vào<br>yêu thích</p>
										</a>
											{{-- <a href="" class="social-info">
												<span class="lnr lnr-sync"></span>
												<p class="hover-text">compare</p>
											</a>
											<a href="" class="social-info">
												<span class="lnr lnr-move"></span>
												<p class="hover-text">view more</p>
											</a> --}}
										</div>
									</div>
									
								</div>
							</div>
							@endforeach
							@endif
							
						</div>
					</div>
				</div>
			</section>
			<!-- end product Area -->
			
			<!-- Start exclusive deal Area -->
			<section class="exclusive-deal-area">
				<div class="container-fluid">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding exclusive-left">
							<div class="row clock_sec clockdiv" id="clockdiv">
								<div class="col-lg-12">
									<h1>Exclusive Hot Deal Ends Soon!</h1>
									<p>Who are in extremely love with eco friendly system.</p>
								</div>
								<div class="col-lg-12">
									<div class="row clock-wrap">
										<div class="col clockinner1 clockinner">
											<h1 class="days">150</h1>
											<span class="smalltext">Days</span>
										</div>
										<div class="col clockinner clockinner1">
											<h1 class="hours">23</h1>
											<span class="smalltext">Hours</span>
										</div>
										<div class="col clockinner clockinner1">
											<h1 class="minutes">47</h1>
											<span class="smalltext">Mins</span>
										</div>
										<div class="col clockinner clockinner1">
											<h1 class="seconds">59</h1>
											<span class="smalltext">Secs</span>
										</div>
									</div>
								</div>
							</div>
							<a href="" class="primary-btn">Shop Now</a>
						</div>
						<div class="col-lg-6 no-padding exclusive-right">
							<div class="active-exclusive-product-slider">
								<!-- single exclusive carousel -->
								<div class="single-exclusive-slider">
									<img class="img-fluid" src="img/product/surface-1.png" alt="">
									<div class="product-details">
										<div class="price">
											<h6>Giá: <strong>$150.00</strong></h6>
											<h6 class="l-through">$210.00</h6>
										</div>
										<h4>Microsoft surface</h4>
										<div class="add-bag d-flex align-items-center justify-content-center">
											<a class="add-btn" href=""><span class="ti-bag"></span></a>
											<span class="add-text text-uppercase" style="color:#000">Thêm vào giỏ hàng</span>
										</div>
									</div>
								</div>
								<!-- single exclusive carousel -->
								<div class="single-exclusive-slider">
									<img class="img-fluid" src="img/product/surface-1.png" alt="">
									<div class="product-details">
										<div class="price">
											<h6>Giá: <strong>$150.00</strong></h6>
											<h6 class="l-through">$210.00</h6>
										</div>
										<h4>Microsoft surface</h4>
										<div class="add-bag d-flex align-items-center justify-content-center">
											<a class="add-btn" href=""><span class="ti-bag"></span></a>
											<span class="add-text text-uppercase" style="color:#000">Thêm vào giỏ hàng</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End exclusive deal Area -->
			
			<!-- Start brand Area -->
			<section class="brand-area section_gap">
				<div class="container">
					<div class="row">
						<a class="col single-img" href="#">
							<img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
						</a>
						<a class="col single-img" href="#">
							<img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
						</a>
						<a class="col single-img" href="#">
							<img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
						</a>
						<a class="col single-img" href="#">
							<img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
						</a>
						<a class="col single-img" href="#">
							<img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
						</a>
					</div>
				</div>
			</section>
			<!-- End brand Area -->
			
			<!-- Start related-product Area -->
		{{-- <section class="related-product-area section_gap_bottom">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Deals of the Week</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r1.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Black lace Heels</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r2.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Black lace Heels</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r3.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Black lace Heels</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r5.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Black lace Heels</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r6.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Black lace Heels</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r7.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Black lace Heels</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r9.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Black lace Heels</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r10.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Black lace Heels</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r11.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Black lace Heels</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="ctg-right">
							<a href="#" target="_blank">
								<img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
@stop()