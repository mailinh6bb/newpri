 <div class="container nopadding-right" >
   <ul class="cart-list">
    @if (isset($products))
    @foreach ($products as  $cart_item)
    <li style="margin-top: 5px; padding-left: 20px;">
        <a class="sm-cart-product" href="" style="margin-right: 20px;">
            <img src="img/product/{{$cart_item -> pro_image}}" width="50px" height="50px" alt="" >
        </a>
        <div class="small-cart-detail" >
            <a class="small-cart-name"href="">{{$cart_item -> pro_name}}</a>
            <span class="quantitys">Giá:<span>{{number_format($cart_item -> pro_price, 0, ',', '.')}}</span> VND</span>
        </div>
    </li>
    @endforeach
    @endif
  </ul>
</div>