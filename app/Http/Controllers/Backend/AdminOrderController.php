<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Bill;
use Carbon\Carbon;
class AdminOrderController extends Controller
{
    // danh sách sản phẩm
    public function getOrderApprove()
    {
        $orders = Order::where('status',1)->paginate(4);
        return view('backend.order.orderApprove',compact('orders'));
        // return view('backend.order.orderApprove');
    }
    public function reset($id)
    {
        $orders = Order::find($id);
        $orders->status = 1;
        $orders->save();
        // App\Models\Orders::where('id', $id)
        //       ->update(['status' => 1]);
        return redirect()->back();
    }
    // danh sách đơn hàng
    public function getOrderNotApprove()
    {
        $orders = Order::where('status',0)->paginate(4);
        return view('backend.order.orderNotApprove',compact('orders'));
    }

    // Kiểm tra và duyệt đợn hàng
    public function actionOrder($action, $id){
      $orders = Order::find($id);  

      if ($action) {
        switch ($action) {
            case 'status':
            $bills= Bill::where('order_id',$id)->get();
            if ($bills) {
                foreach ($bills as $bill) {
                    $product = Product::find($bill -> product_id);
                    $product -> pro_amount = $product -> pro_amount - $bill -> qty;
                    $product -> save();
                }
            }
            $orders -> status = 1;
            $orders -> updated_at = Carbon::now();
            $orders -> save();
            return redirect()->route('admin.get.list.order.not');
            break;
            case 'delete':
            if ($orders) {
                $bills = Bill::where('order_id', $id)-> get();
                foreach ($bills as $value) {
                    $bill = Bill::find($value -> id);
                    $bill -> delete();
                }
                $orders -> delete($id);
            }
            
            return redirect()->back();
            break;
        }
    }
}


// Chi tiết Đơn hàng
public function showOrderDetail($id)
{
    $orders = Order::find($id);
    $bills = Bill::where('order_id', $id)->get();
    return view('backend.order.orderDetail',['orders' => $orders, 'bills' => $bills]);
}



// public function getCart()
// {
//     $products = Product::all();
//     $categories = Category::all();
//     $viewData =[
//         'categories' => $categories,
//         'products' => $products,
//         'index' => 0
//     ];
//     return view('backend.order.addOrder',$viewData);
// }
// public function cart()  {
//     $cartCollection = \Cart::getContent();
//         // dd($cartCollection);
//     return view('frontend.cart')->with(['cartCollection' => $cartCollection]);
// }
// public function clear(){
//     \Cart::clear();
//     return view('backend.order.addOrder');
// }
// public function remove(Request $request){
//     \Cart::remove($request->id);
//     return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
// }
// public function getupdate($id){
//     $order = Order::find($id);
//     $order_detail = explode(',',$order->info_order);
//     $viewData =[
//         'order' => $order,
//         'order_detail' => $order_detail,
//         'index' => 0
//     ];
//     return view('backend.order.updateOrder',$viewData);
// }
// public function update(Request $request){
//         // dd($request);
//     \Cart::update($request->id,['quantity' => [
//         'relative' => false,
//         'value' => $request->qty
//     ]
// ]);
//     \Cart::update($request->id,
//         array(
//             'quantity' => array(
//                 'relative' => false,
//                 'value' => $request->qty
//             ),
//         ));
//     return redirect()->back();
// }
// public function add(Request $request)
// {
//    \Cart::add([
//     'id' => $request->id,
//     'name' => $request->pro_name,
//     'price' => $request->pro_price,
//     'quantity' => $request->quantity,
//     'attributes' => ['image' => $request->pro_image]
// ]);
//    return redirect()->back();
// }
// public function checkout()
// {
//     $cartCollection = \Cart::getContent();
//     return view('frontend.checkout',compact('cartCollection'));
// }

// public function saveOrder(Request $request)
// {
//     $cartCollection = \Cart::getContent();
//     $order = new Orders();
//     $order->nameguest = $request->name;
//     $order->emailguest = $request->email;
//     $order->phone = $request->phone;
//     $order->address = $request->address;
//     $order->note = $request->note;
//     $detail = [];
//     foreach($cartCollection as $item)
//     {
//        array_push($detail,$item->name);
//        array_push($detail,$item->quantity);
//        array_push($detail,$item->price);
//    }
//    $order->info_order = implode(",", $detail);
//    $order->price_order = \Cart::getTotal();
//    $order->status = 0;
//    $order->save();
//    \Cart::clear();
//    return route('admin.get.list.order.not');

// }
// public function action($action,$id)
// {
//     if(isset($action))
//     {   
//        $orders   = Orders::find($id);
//        switch($action)
//        {
//         case 'delete':
//         $orders->delete();
//         break;
//     }
// }
// return redirect()->back();
// }
}
