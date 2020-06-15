@extends('layouts.master')

@section('main')
<style>
	.review_item .media .media-body i {
		color: gray; 
	}
	.product_description_area .tab-content .total_rate .rating_list .list li a i {
		color: gray; 
	}
	.list_star i:hover{
		cursor: pointer;
	}
	.list_text {
		display: inline-block;
		margin-left: 10px;
		position: relative;
		background: #52b858;
		color: #fff;
		padding: 2px 8px;
		box-sizing: border-box;
		font-size: 12px;
		border-radius: 2px;
		display: none;
	}
	#rating_user .active {
		color: #fbd600;
	}
	#rating_form .active {
		color: #fbd600;
	}
	.list_star .rating_active {
		color: #ff9705;
	}
	.list_text::after {
		right: 100%;
		top: 50%;
		border: solid transparent;
		content: " ";
		height: 0;
		width: 0;
		position: absolute;
		pointer-events: none;
		border-color: rgba(82,184,88,0);
		border-right-color: #52b858;
		border-width: 6px;
		margin-top: -6px;
	}
</style>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
			<div class="col-first">
				<h1>Chi tiết sản phẩm</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
					<a href="#">Sản phẩm<span class="lnr lnr-arrow-right"></span></a>
					<a href="single-product.html">APPLE MACBOOK AIR 13 </a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<div class="product_image_area">
	<div class="container">
		<div class="row s_product_inner">
			<div class="col-lg-6">
				<div class="s_Product_carousel">
					@if (isset($productDetail))
					<div class="single-prd-item">
						<img class="img-fluid" src="img/product/{{$productDetail -> pro_image}}" alt="">
					</div>
					<div class="single-prd-item">
						<img class="img-fluid" src="img/product/{{$productDetail -> pro_image}}" alt="">
					</div>
					<div class="single-prd-item">
						<img class="img-fluid" src="img/product/{{$productDetail -> pro_image}}" alt="">
					</div>
					<div class="single-prd-item">
						<img class="img-fluid" src="img/product/{{$productDetail -> pro_image}}" alt="">
					</div>
					@endif
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				@if (isset($productDetail))
				<div class="s_product_text">
					<h3>{{ $productDetail -> pro_name}}</h3>
					<h2><span>Giá:<span> {{number_format($productDetail -> pro_price)}} VNĐ</h2>
					<ul class="list">
						<li><a class="active" href="#"><span>Danh mục</span> : {{ $cateProduct -> name}}</a></li>
						<li><a href="#"><span>Tình trạng</span> : Có sẵn</a></li>
					</ul>
					<p>{{ $productDetail -> pro_content}}</p>
					<div class="product_count">
						<label for="qty">Số lượng:</label>
						<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
						<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
						class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
						<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="{{ route('add.cart', $productDetail -> id) }}">Thêm vào giỏ hàng</a>
							{{-- <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a> --}}
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
				</div>
				@endif
				
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link  active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Giới thiệu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					aria-selected="false">Thông số kỹ thuật</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					aria-selected="false">Bình luận</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					aria-selected="false">Đánh giá</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p> {{ $productDetail -> pro_content}}</p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							@if (isset($pro_detail))
								<tr>
									<td>
										<h5><strong>Bộ xử lý CPU:</strong></h5>
									</td>
									<td>
										<h5>{{ $pro_detail[0] }}</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Bộ nhớ RAM:</strong></h5>
									</td>
									<td>
										<h5>{{ $pro_detail[1] }}</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Màn hình:</strong></h5>
									</td>
									<td>
										<h5>{{ $pro_detail[2] }}</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Card màn hình:</strong></h5>
									</td>
									<td>
										<h5>{{ $pro_detail[3] }}</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Ổ cứng:</strong></h5>
									</td>
									<td>
										<h5>{{ $pro_detail[4] }}B</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Kích thước và trọng lượng:</strong></h5>
									</td>
									<td>
										<h5>{{ $pro_detail[5] }}</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Camera:</strong></h5>
									</td>
									<td>
										<h5>{{ $pro_detail[6] }}</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Cổng kết nối:</strong></h5>
									</td>
									<td>
										<h5>{{ $pro_detail[7] }}</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><strong>Pin và sạc:</strong></h5>
									</td>
									<td>
										<h5>{{ $pro_detail[8] }}</h5>
									</td>
								</tr>							@endif
							<tbody>
							</tbody>
						</table>
					</div>
				</div>


				{{-- comment --}}
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
								@if (isset($comment))
								@foreach ($comment as $cm)
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{ url('/')}}/img/blog/c2.jpg" alt="">
										</div>
										<div class="media-body">
											<h4>{{ $cm ->user -> name}}</h4>
											<h5>
												@php
												\Carbon\Carbon::setlocale('vi');
												echo \Carbon\Carbon::createFromTimeStamp(strtotime($cm->created_at))->diffForHumans();
												@endphp
											</h5>
											<a class="reply_btn"  href="javascript:void(0)" data-cm ="{{$cm -> id}}">Trả lời</a>
										</div>
									</div>
									<p>{{ $cm -> content}}</p>
									@if (isset($reply))
									@foreach ($reply as $rep_item)
									@if ($rep_item -> rep_comment_id == $cm -> id)
									<div class="review_item reply">
										<div class="media">
											<div class="d-flex">
												<img src="{{ url('/')}}/public/img/product/review-2.png" alt="">
											</div>
											<div class="media-body">
												<h4>{{ $rep_item -> rep_name}}</h4>
												<h5>
													@php
													\Carbon\Carbon::setlocale('vi');
													echo \Carbon\Carbon::createFromTimeStamp(strtotime($rep_item->created_at))->diffForHumans();
													@endphp
												</h5>
											</div>
										</div>
										<p>{{ $rep_item ->rep_content}}</p>
									</div>
									@endif	
									@endforeach
									@endif

									{{-- Phần Reply Comment --}}
									<div id="formComment{{$cm -> id}}" style="display:none;">
										<div style=" margin-top: 15px; width: 400px; margin-left: 30px;">
											Họ Tên: <input  type="text" class="form-control rep_name{{$cm -> id}}" value="">
											<br>
											Nội Dung:
											<textarea  id="rep_content{{$cm -> id}}" class="form-control" rows="3" placeholder="Vui lòng nhập đánh giá của bạn!"></textarea>
											<a href="{{ route('post.reply.comment', $productDetail -> id) }}" class="btn btn-info btn_reply" data-rl="{{$cm -> id}}" style="background: #288ad6; margin: 10px;color: white; border-radius: 8px;">Trả Lời</a>
										</div>
									</div>
								</div>
								@endforeach

								@endif




							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Đăng bình luận</h4>
								@if (Auth::check())
								<form class="row contact_form" action="{{ route('get.user.comment', $productDetail -> id) }}" method="POST" id="contactForm" novalidate="novalidate">
									{!!csrf_field()!!}
									<div class="col-md-12">
										<div form-group>
											<LABEL> Người Dùng: <B>{{Auth::user() -> name}} </B></LABEL>
										</div>
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Nội dung"></textarea>
											@if ($errors->has('message'))
											<span class="error-text">
												{{ $errors->first('message') }}
											</span>
											@endif
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Đăng</button>
									</div>
								</form>
								@else
								<p>Vui lòng đăng nhập để bình luận...!</p>
								<br>
								<a class="primary-btn" href="{{ route('get.user.login') }}">Đăng nhập ngay</a>
								@endif

							</div>
						</div>
					</div>
				</div>
				{{-- end comment --}}



				{{-- // lấy trung bình lượt đánh giá  chia số lần đánh giá--}}
				<?php
				$age = 0;
				if ($productDetail -> pro_total_rating) {
					$age = round($productDetail -> pro_total_number/ $productDetail -> pro_total_rating, 1);
				} 
				?>
				<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
										<h5>Đánh giá chung</h5>
										<h4>{{$age}}</h4>
										<h6>({{ $productDetail -> pro_total_rating}} đánh giá)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Dựa trên {{ $productDetail -> pro_total_rating}} đánh giá</h3>
										<ul class="list">
											@foreach ($arrayRating as $key =>  $ar_item)
											<?php 
											$itemAge = round(($ar_item['total']/$productDetail->pro_total_rating)*100, 0);
											?>
											<li id="rating_form">
												<a href="#">{{$key}} Sao 
													@for ($i = 1; $i <= 5 ; $i++)
													<a href="#"><i class="fa fa-star {{$i <= $ar_item['total'] ? 'active' : ''}}"></i></a>
													@endfor
													{{$ar_item['total']}} đánh giá
												</a>
											</li>
											@endforeach
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list">
								@if (isset($ratingUser))
								@foreach ($ratingUser as $ra_user)
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="http://localhost/datn/public/img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>{{ $ra_user -> user -> name}}</h4>
											<div id="rating_user">
												@for ($i = 1; $i <= 5 ; $i++)
												<a href="#"><i class="fa fa-star {{$i <= $ra_user -> ra_number ? 'active' : ''}}"></i></a>
												@endfor
											</div>
										</div>
									</div>
									<p>{{ $ra_user -> ra_content}}</p>
								</div>
								@endforeach
								@endif

							</div>
						</div>


						@if (Auth::check())
						{{-- /// Form đánh giá  --}}
						<div class="col-lg-6">
							<div class="review_box">
								<div class="form_rating">
									<div style="display: flex; margin-top: 15px; font-size: 15px;" >
										<p style="	margin-bottom: 0px;">Chọn Đánh Giá Cho Sản Phẩm</p>
										<span class="list_star" style="margin: 0 15px;">
											@for ($i = 1; $i <= 5 ; $i++)
											<i class="fa fa-star" data-key={{ $i}}></i>
											@endfor
										</span>
										<span class="list_text"></span>
										<input type="hidden" name="" value="" class="number_rating" placeholder="">
									</div>
									<div style=" margin-top: 15px;">
										<textarea name="rating" id="ra_content" class="form-control" rows="5" placeholder="Vui lòng nhập đánh giá của bạn!"></textarea>
									</div>
									<div style=" margin-top: 15px; ">
										<a href="{{ route('post.rating.product', $productDetail-> id) }}" class="js_rating_product" style=" width: 200px;background: #288ad6; padding: 6px; color: white; border-radius: 8px;">Gởi Đánh Giá</a>
									</div>
								</div>
							</div>
						</div>
						{{-- //// end form đánh giá --}}
						@else
						<div class="review_box">
							<div style="display: flex; margin-top: 15px; font-size: 15px;" >
								<p style="	margin-bottom: 0px;">Chọn Đánh Giá Cho Sản Phẩm</p>
								<span class="list_star" style="margin: 0 15px;">
									@for ($i = 1; $i <= 5 ; $i++)
									<i class="fa fa-star" data-key={{ $i}}></i>
									@endfor
								</span>
								<span class="list_text"></span>
								<input type="hidden" name="" value="" class="number_rating" placeholder="">
							</div>
							<hr>
							<p>Vui lòng đăng nhập để đánh giá..!</p>
							<br>
							<a class="primary-btn" href="{{ route('get.user.login') }}">Đăng nhập ngay</a>

						</div>
						@endif

					</div>
				</div>


			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

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
								<a href="#"><img src="{{ url('/')}}/public/img/r1.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/')}}/public/img/r2.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/')}}/public/img/r3.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/')}}/public/img/r5.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/')}}/public/img/r6.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/')}}/public/img/r7.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/')}}/public/img/r9.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/')}}/public/img/r10.jpg" alt=""></a>
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
								<a href="#"><img src="{{ url('/')}}/public/img/r11.jpg" alt=""></a>
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
							<img class="img-fluid d-block mx-auto" src="{{ url('/')}}/public/img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End related-product Area -->
	@stop
	@section('script')
	<script>
		$(function(){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$(".reply_btn").click(function(event){
				event.preventDefault();
				let idUserArt = $(this).attr('data-cm');
				$("#formComment"+idUserArt).css("display",'block');
			});
			$(".btn_reply").click(function(){
				event.preventDefault();
				let idArtCmt = $(this).attr('data-rl');
				let rep_name = $(".rep_name"+idArtCmt).val();
				let rep_content = $("#rep_content"+idArtCmt).val();
				let url = $(this).attr('href');
				$.ajax({
					url: url,
					type:"POST",
					data: {
						rep_name: rep_name,
						idArtCmt: idArtCmt,
						rep_content: rep_content	
					},
					success: function(result){
						if (result.code == 1) {
							alert("Gởi Comment thành công! Cảm Ơn Bạn");
							location.reload();
						}
					}
				});			

			});	
		});


	//
// Phần đánh giá sản phẩm
	//
	$(function(){
		let listStar = $(".list_star .fa");
		listRatingText = {
			'1' : 'Không Thích',
			'2' : 'Tạm Được',
			'3' : 'Bình Thường',
			'4' : 'Tốt',
			'5' : 'Rất Tốt',
		}

		listStar.mouseover(function(){
			let $this = $(this);
			let number = $this.attr('data-key');
			listStar.removeClass('rating_active');
			$(".number_rating").val(number);
			$.each(listStar, function(key, value){
				if (key + 1 <= number) {
					$(this).addClass('rating_active');
				}
			});
			$(".list_text").text('').text(listRatingText[number]).show();		
		});
		$(".js_rating_action").click(function(event){
			event.preventDefault();
			if ($(".form_rating").hasClass('hide')) {
				$(".form_rating").addClass('active').removeClass('hide');
			}
			else {
				$(".form_rating").addClass('hide').removeClass('active');
			}

		})
		$(".js_rating_product").click(function(event){
			event.preventDefault();
			let content = $("#ra_content").val();
			let number = $(".number_rating").val();
			let url = $(this).attr('href');

			if (content && number) {
				$.ajax({
					url: url,
					type: 'POST',
					data:{
						number : number,
						r_content : content
					}
				}).done(function(result) {
					if (result.code == 1) {
						alert("Gởi đánh giá thành công!");
						location.reload();
					}
				});
			}

		})
		// lấy giá trị storage
		// // lưu id sản phẩm vo storage
		// let idProduct = $("#content_product").attr('data-id');
		// let products = localStorage.getItem('products');

		// if (products == null) {
		// 	arrayProduct = new Array();
		// 	arrayProduct.push(idProduct)
		// 	localStorage.setItem('products', JSON.stringify(arrayProduct))
		// }
		// else {
		// 	// lấy giá trị mảng id đã lưu và chuyển về mảng
		// 	products = $.parseJSON(products)
		// 	if (products.indexOf(idProduct) == -1) {
		// 		products.push(idProduct);
		// 		localStorage.setItem('products', JSON.stringify(products));
		// 	}
		// }
	});
</script>
@stop