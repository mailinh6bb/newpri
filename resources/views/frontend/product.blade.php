@extends('layouts.master')

@section('main')
<div id="category">
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
				<div class="col-first">
					<h1>Tất cả sản phẩm</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Sản phẩm</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Danh mục</div>
					<ul class="main-categories">	
						<?php $productType = DB::table('product_type')->get();
						?>
						@foreach($productType as $pro_type)			
						<li class="filter-list">
							<input class="pixel-radio filter_type"  type="checkbox" id="apple" value="{{$pro_type->id}}" name="filter_type">
							<label for="apple">{{ucwords($pro_type -> name)}}</label>
						</li>
						@endforeach
					</ul>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Hãng sản xuất</div>
					<div class="common-filter">
						<ul>
							<?php $cats = DB::table('categories')->orderby('name', 'ASC')->get();?>
							@foreach($cats as $cat)
							<li class="filter-list"><input class="pixel-radio try" type="checkbox" id="brandId" value="{{$cat->id}}" ><label for="apple"> {{ucwords($cat->name)}}<span>({{App\Models\Product::where('pro_cate_id',$cat->id)->count()}})</span></label></li>
							@endforeach
						</ul>
					</div>
					<div class="common-filter">
						<div class="head">Khoảng giá</div>
						<div class="list-group">
							<div class="price-range-area">


								<div id="slider-range"></div>
								<br>
								<b class="pull-left">$
									<input size="2" type="text" id="amount_min" name="start_price"
									value="15" style="border:0px; font-weight: bold; color:green; width: 80px;" readonly="readonly" />
								</b>

								<b class="pull-right">$
									<input size="2" type="text"  id="amount_max" name="end_price" value="65"
									style="border:0px; font-weight: bold; color:green; width: 80px" readonly="readonly"/>
								</b>

							</div>
						</div>    
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<form class="tree-most" id="form-order" method="get">
					<div class="filter-bar d-flex flex-wrap align-items-center">
						<div class="sorting">
							<select name="orderby" class="filter-select">
								<option  value="abc">Sắp xếp theo tên</option>
								<option value="new">Mới nhất</option>
								<option value="asc">Giá tăng dần</option>
								<option  value="desc">Giá giảm dần</option>
							</select>
						</div>
					</div>
				</form>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<div >
					<section class="lattest-product-area pb-40 category-list">
						<div class="row"  id="updateDiv">


							<!-- single product -->
							@if (count($product) == 0)
							<div class="col-lg-4 col-md-6">
								Sorry, Products Not Found!
							</div>
							@else
							@foreach ($product as $key => $proAll)
							<div class="col-lg-4 col-md-6">
								<div class="single-product">
									<img class="img-fluid" src="img/product/{{$proAll -> pro_image}}" alt="">
									<div class="product-details">
										<a href="{{ route('get.product.detail',[$proAll -> pro_slug, $proAll ->id]) }}">{{ $proAll -> pro_name}}</a>
										<div class="price">
											<h6>{{ number_format($proAll -> pro_price, 0,',','.')}} VNĐ</h6>
											<h6 class="l-through">Sale: {{$proAll -> pro_sale}} %</h6>
										</div>
										<div class="prd-bottom">

											<a href="{{ route('add.cart', $proAll -> id) }}" class="social-info">
												<span class="ti-bag"></span>
												<p class="hover-text">Thêm vào<br> giỏ hàng</p>
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

						{{-- phân trang --}}
						<!-- Start Filter Bar -->

					{{-- 	<div class="clearfix "> </div>
						<div class="filter-bar d-flex flex-wrap align-items-center">
							<div class="sorting mr-auto">
								<select>
									<option value="1">Show 12</option>
									<option value="1">Show 12</option>
									<option value="1">Show 12</option>
								</select>
							</div> --}}
							<div class="pagination">
								{{$product->links()}}
							</div>
						{{-- </div> --}}
						<!-- End Filter Bar -->



					</div>

				</section>

				
			</div>
			
			<!-- End Best Seller -->
			
		</div>
	</div>
</div>

<!-- Start related-product Area -->
	{{-- <section class="related-product-area section_gap">
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
								<a href="#"><img src="{{ url('/') }}/public/img/r1.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/') }}/public/img/r2.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/') }}/public/img/r3.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/') }}/public/img/r5.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/') }}/public/img/r6.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/') }}/public/img/r7.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/') }}/public/img/r9.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/') }}/public/img/r10.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/') }}/public/img/r11.jpg" alt=""></a>
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
							<img class="img-fluid d-block mx-auto" src="{{ url('/') }}/public/img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End related-product Area -->

	<!-- Modal Quick Product View -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="container relative">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="product-quick-view">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="quick-view-carousel">
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="quick-view-content">
								<div class="top">
									<h3 class="head">Mill Oil 1000W Heater, White</h3>
									<div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">$149.99</span></div>
									<div class="category">Category: <span>Household</span></div>
									<div class="available">Availibility: <span>In Stock</span></div>
								</div>
								<div class="middle">
									<p class="content">Mill Oil is an innovative oil filled radiator with the most modern technology. If you are
										looking for something that can make your interior look awesome, and at the same time give you the pleasant
									warm feeling during the winter.</p>
									<a href="#" class="view-full">View full Details <span class="lnr lnr-arrow-right"></span></a>
								</div>
								<div class="bottom">
									<div class="color-picker d-flex align-items-center">Color:
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
									</div>
									<div class="quantity-container d-flex align-items-center mt-15">
										Quantity:
										<input type="text" class="quantity-amount ml-15" value="1" />
										<div class="arrow-btn d-inline-flex flex-column">
											<button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
											<button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
										</div>

									</div>
									<div class="d-flex mt-20">
										<a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
										<a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
										<a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop