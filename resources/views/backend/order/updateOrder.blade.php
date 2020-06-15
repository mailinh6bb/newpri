@extends('backend.layouts.backend-master')
@section('backend-main')
</section>
    <div class="container">
        <div class="cart">
            <div class="table-responsive-sm">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Sản phẩm</th>
                            <th class="text-center" scope="col">Sổ lượng</th>
                            <th class="text-center" scope="col">Tổng</th>
                            <th class="text-center" scope="col">Giá</th>
                            <th class="text-center" scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($order_detail)
                    @for($key = 0; $key < count($order_detail); $key+=3)
                        <tr>
                            <td>
                                <p>{{ $order_detail[$key] }}</p>
                            </td>
                            <td>
                                <h5>{{ $order_detail[$key+2] }}</h5>
                            </td>
                            <form action="" method="POST">
                                    {{ csrf_field() }}
                                <td>
                                    <div class="product_count">
                                        <input  type="hidden" value="{{$key }}" id="id" name="id">
                                        <input type="number" name="qty" id="sst{{$key}}"  value="{{ $order_detail[$key+1] }}">
                                    </div>
                                </td>
                                <td>
                                    <p>{{ $order_detail[$key+1]*$order_detail[$key+2] }}</p>
                                </td>
                                <td>
                                    <a class="btn btn-success" href="#">Cập nhật</a>
                                    <a class="btn btn-danger" href="#">Xoa</a>
                                </td>
                            </form>
                        </tr>
                    @endfor
                    @endif
                        <tr class="bottom_button">
                            <td>
                                <!-- <a class="btn btn-success" href="#">Cập nhật giỏ hàng</a> -->
                            </td>
                            <td></td>
                            <td>

                            </td>
                            <td>
                                <h5>Tổng</h5>
                            </td>
                            <td>
                                <h5>{{ $order->price_order }}</h5>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                                <td>

                                </td>
                                <td></td>
                                <td>

                                </td>
                                <td>

                                </td>
                            <td>
                                <div class="btn btn-default">
                                    <a class="primary-btn" href="">Quay lai</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@stop
