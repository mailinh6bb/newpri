<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\ReplyComment;
use App\Models\Product;
use App\Models\Rating;
use Carbon\Carbon;
class CommentController extends Controller
{
	public function saveComment(Request $request,$id){
		$comment = New Comment();
		$this -> validate($request, [
			'message' => 'required|min:6',
		],

		[
			'message.required' => 'Vui lòng nhập nội dung.',
			'message.min' => 'không được dưới 6 ký tự.'

		]);
		$comment -> idUser = Auth::user() -> id;
		$comment -> idPro = $id;
		$comment -> content = $request -> message;
		$comment -> save();
		return redirect()->back();
	}
	// phần reply comment
	public function replyComment(Request $request, $id){

		if ($request -> ajax()) {
			$replyComment = new ReplyComment();
			$replyComment -> rep_user_id = Auth::user()-> id ? Auth::user() -> id : 'NA';
			$replyComment -> rep_product_id = $id;
			$replyComment -> rep_comment_id = $request -> idArtCmt;
			$replyComment -> rep_name = $request -> rep_name;
			$replyComment -> rep_content = $request -> rep_content;
			$replyComment -> created_at = Carbon::now();
			$replyComment -> updated_at = Carbon::now();
			$replyComment -> save();
			return  response()->json(['code' => '1']);	
		};
	}

	public function saveRating(Request $request, $id){
		if ($request -> ajax()) {
			Rating::insert([
				'ra_product_id' => $id,
				'ra_number' => $request -> number,
				'ra_content' => $request -> r_content,
				'ra_user_id' => Auth::user()-> id,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			]);
			$product = Product::find($id);
			$product -> pro_total_number += $request -> number;
			$product -> pro_total_rating += 1;
			$product -> save();
			return  response()->json(['code' => '1']);
		}
	}
}
