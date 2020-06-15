
@if (empty($product))
sorry, products not found
@else
@foreach ($product as $key => $proAll)
<div class="col-lg-4 col-md-6">
	<div class="single-product">
		<img class="img-fluid" src="img/product/{{$proAll -> pro_image}}" alt="">
		<div class="product-details">
			<a href="{{ route('get.product.detail',[$proAll -> pro_slug, $proAll ->id]) }}">{{ $proAll -> pro_name}}</a>
			<div class="price">
				<h6>$ {{ number_format($proAll -> pro_price, 0,',','.')}}</h6>
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
			</div>
		</div>
	</div>
</div>
@endforeach
@endif


<!-- Start Filter Bar -->
{{-- <div class="row">
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
{{-- 	</div>
</div>
 --}}
			<!-- End Filter Bar