<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CartController extends Controller
{
    public function getOrderApprove()
    {
        return view('backend.order.orderApprove');
    }
    public function getOrderNotApprove()
    {
        return view('backend.order.orderNotApprove');
    }
    public function showOrder()
    {
        return view('backend.order.orderDetail');
    }
    public function getCart()
    {
        $products = Product::all();
        $categories = Category::all();
        $viewData =[
            'categories' => $categories,
            'products' => $products,
            'index' => 0
        ];
        return view('backend.order.addOrder',$viewData);
    }
    public function cart()  {
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
        return view('cart')->with(['cartCollection' => $cartCollection]);
    }
    public function add(Request $request)
    {
     \Cart::add([
        'id' => $request->id,
        'name' => $request->pro_name,
        'price' => $request->pro_price,
        'quantity' => $request->quantity,
        'option' => ['avatar' => $request->pro_image]
    ]);
        return redirect()->back();
    }


}
