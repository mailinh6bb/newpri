<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{ asset('/')}}">
	<!-- <base href="{{ asset('public')}}/"> -->
	
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Electro</title>
	<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/themify-icons.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/owl.carousel.css"/>
		<link rel="stylesheet" href="css/nice-select.css"/>
		<link rel="stylesheet" href="css/nouislider.min.css"/>
		<link rel="stylesheet" href="css/ion.rangeSlider.css"/>
		<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css"/>
		<link rel="stylesheet" href="css/magnific-popup.css"/>
		<link rel="stylesheet" href="css/main.css"/>

		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	</head>
	<body>
		{{-- Kiểm trả và thông báo   --}}
		@if (Session::has('flash_message'))
		<div class="alert alert-{!!Session::get('flash_level')!!} alert-dismissible" style="width:900px; position: fixed; z-index: 100; top: 15px;left: 50%; transform: translateX(-50%); text-align: center">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong style="text-align: center;">{!!Session::get('flash_message')!!}</strong>
		</div>
		@endif
		{{-- HEADER --}}
		@include('layouts.header')
		{{-- /HEADER --}}

		{{-- MAIN --}}
		<div>
			@yield('main')
		</div>
		{{-- /MAIN --}}

		{{-- FOOTER --}}
		@include('layouts.footer')
		{{-- /FOOTER --}}

		{{-- <script src="js/vendor/jquery-2.2.4.min.js"></script> --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/countdown.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<!--gmaps Js-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script src="js/gmaps.min.js"></script>
		<script src="js/main.js"></script>
		@yield('script')
		<script>
			$(function(){
				event.preventDefault();
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 50000000,
					values: [0, 50000000],
					slide: function(event, ui) {
						$("#amount_min").val(addCommas(ui.values[0].toString()));
						$("#amount_max").val(addCommas(ui.values[1]));
						var start = $('#amount_min').val();
						var end = $('#amount_max').val();
						$.ajax({
							type: 'get',
							dataType: 'json',
							url: '',
							data: "start=" + start + "& end=" + end,
							success: function (response) {
								console.log(response);
								$('#updateDiv').html("").append(response.data);
							}
						});
					}
				});
				$("#amount_min").val($("#slider-range").slider("values", 0));
				$("#amount_max").val($("#slider-range").slider("values", 1));
				$("#amount_min").change(function() {
					$("#slider-range").slider("values", 0, $(this).val());
				});
				$("#amount_max").change(function() {
					$("#slider-range").slider("values", 1, $(this).val());
				})
				

				$("#keySearch").keyup(function(){
					let key = $("#keySearch").val();
					let urlSearch = '{{ route('get.form.search') }}';
					if (key =="") {
						$("#form_search").css("display", 'none');
					}
					else {
						$.ajax({
							url: urlSearch,
							method: "GET",
							data: {
								key: key
							},
							success: function(result){
								$("#form_search").html("").append(result.data);
								$("#form_search").css("display", 'block');
							}
						}) 
					}

				})  

				
				$('.try').click(function(){
					// event.preventDefault();
					var brand = [];

					$('.try').each(function(){
						if($(this).is(":checked")){

							brand.push($(this).val());
						}
					});
					Finalbrand  = brand.toString();

					$.ajax({
						type: 'get',
						dataType: 'json', // lỗi html hum pữa nếu bạn trả về
						url: 'san-pham-type',
						data: "brand=" + Finalbrand,
						success: function (response) {
							console.log(response);
							$('#updateDiv').html("").append(response.data);
						}
					});
				}); 


				$('.filter_type').click(function(){
					var type = [];
					$('.filter_type').each(function(){
						if($(this).is(":checked")){

							type.push($(this).val());
						}
					});
					Finaltype  = type.toString();

					$.ajax({
						type: 'get',
						dataType: 'json',
						url: 'san-pham-type',
						data: "filter_type=" + 	Finaltype,
						success: function (response) {
							console.log(response);
							$('#updateDiv').html("").append(response.data);
						}
					});
				});  

				$('.filter-select').change(function(){
					event.preventDefault();
					var select = $(".filter-select :selected").val();
					$.ajax({
						type: 'get',
						dataType: 'html',
						url: 'san-pham-type',
						data: "select=" + select,
						success: function (response) {
							console.log(response);
							$('#updateDiv').html(response);
						}
					});
				})

			});
			function addCommas(nStr){
				nStr += '';
				x = nStr.split('.');
				x1 = x[0];
				x2 = x.length > 1 ? '.' + x[1] : '';
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(x1)) {
					x1 = x1.replace(rgx, '$1' + ',' + '$2');
				}
				return x1 + x2;
			}
		</script>
	</body>

	</html>
