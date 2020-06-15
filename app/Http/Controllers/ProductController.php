<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ReplyComment;
use App\Models\Comment;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProduct(Request $request)
    {

        $category = Category::all();

        if( $request->ajax() && isset($request->select)){
            $select = $request -> select; //brand
            switch ($select) {
                case 'abc':
                $product = DB::table('products')-> orderBy('pro_name', 'DESC')->paginate(6);
                 response()->json($product); //return to ajax
                 return view('frontend.products-filter', compact('product'));
                 break;
                 case 'new':
                 $product = DB::table('products')-> orderBy('id', 'DESC')->paginate(6);
                 response()->json($product); //return to ajax
                 return view('frontend.products-filter', compact('product'));
                 break;
                 case 'asc':
                 $product = DB::table('products') -> orderBy('pro_price', 'ASC')->paginate(6);
                 response()->json($product); //return to ajax
                 return view('frontend.products-filter', compact('product'));
                 break;
                 case 'desc':
                 $product = DB::table('products') -> orderBy('pro_price', 'DESC')->paginate(6);
                 response()->json($product); //return to ajax
                 return view('frontend.products-filter', compact('product'));
                 break;
                 default:
                 $product = DB::table('products') -> orderBy('id', 'DESC');
                 break;
             }


         }

         if ($request->ajax() && isset($request->start)) {
            $start =  str_replace(',','',$request->start); // min price value
            $end =  str_replace(',','', $request->end); // max price value
            $product = DB::table('products')
            ->where('pro_price', '>=', $start)->where('pro_price', '<=', $end)->orderby('pro_price', 'ASC')->paginate(6);
            $html = view('frontend.products-filter', compact('product'))->render();
            return response()-> json(['data' => $html] ); //return to ajax
        }


        if($request->ajax() && isset($request->filter_type)){
            $filter_type = $request->filter_type; //filter_type
            $product = DB::table('products')->whereIN('pro_type', explode( ',', $filter_type ))->paginate(6);
            $html = view('frontend.products-filter', compact('product'))->render();
            return response()-> json(['data' => $html] ); //return to ajax
        }


        if( $request->ajax() && isset($request->brand)){
            $brand = $request->brand; //brand
            $product = DB::table('products')->whereIN('pro_cate_id', explode( ',', $brand ))->paginate(6);
            $html = view('frontend.products-filter', compact('product'))->render();
            return response()-> json(['data' => $html] ); //return to ajax
        }


        else  {
           $product = Product::orderby('id', 'DESC')->paginate(6);
           $viewData = [
            'product' => $product,
            'category' => $category,
        ];
        return view('frontend.product',$viewData); 
    }


}

public function getProductType(Request $request, $name)
{
    $name = $request -> name;
    $product  = Product::where('pro_type', 'like', '%'.$name.'%')->paginate(6);
    return view('frontend.product',compact('product')); 
}

public function getProductDetail (Request $request){
    $url = $request->segment(2);
    $url = preg_split('/(-)/i', $url);
    if ($id = array_pop($url)) {
        $productDetail = Product::find($id);
        $cateProduct = Category::find($productDetail->pro_cate_id);
        $pro_detail = explode(',',$productDetail->pro_detail);
        // $pro_detail = $request->only('cpu','ram', 'screen', 'card','harddrive','weight', 'camera', 'port','pin');
        // $productDetail->pro_detail = implode(",", $pro_detail);

        $comment = Comment::where('idPro', $id)-> orderBy('id', 'DESC') ->limit(5) -> get();
        $reply = ReplyComment::where('rep_product_id', $id)-> orderBy('id', 'DESC')-> get();

        $ratingUser = Rating::with('user:id,name')->where('ra_product_id', $id)->orderby('id', 'DESC')->paginate(6);
//gom nhóm và tính tổng đánh giá
        $ratingsDashboard = Rating::groupBy('ra_number')
        ->where('ra_product_id', $id)
        ->select(DB::raw('count(ra_number) as total'), DB::raw('sum(ra_number) as sum'))
        ->addSelect('ra_number')
        ->get()->toArray();

        $arrayRating = [];
        if (!empty($ratingsDashboard)) {
                // lặp để lấy giá trị các đánh giá còn lại
            for ($i=1; $i <= 5 ; $i++) { 
                $arrayRating[$i] = [
                    "total" => 0,
                    "sum" => 0,
                    "ra_number" => 0
                ];
                foreach ($ratingsDashboard as $item) {
                        // kiểm tra xem arrayRating và số đánh giá trùng
                    if ($item['ra_number'] == $i) {
                        $arrayRating[$i] = $item;
                        continue;
                    }
                }
            }
        }
        $viewData = [
            'productDetail' => $productDetail,
            'cateProduct' => $cateProduct,
            'comment' => $comment,
            'reply' => $reply,
            'ratingUser' => $ratingUser,
            'arrayRating' => $arrayRating,
            'pro_detail' => $pro_detail
        ];
        return view('frontend.product-detail', $viewData);
    }

}

}
