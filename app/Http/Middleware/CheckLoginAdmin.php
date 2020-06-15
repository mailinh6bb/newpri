<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Illuminate\Support\Facades\Auth;
class CheckLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $listRoleOfUser = DB::table('user_roles')->where('user_id',Auth()->user()->id)->first();

        if(!empty($listRoleOfUser->user_id) && $listRoleOfUser->role_id > 0){
            return $next($request);
        }  
        else{
            //về lại đăng nhập ngược trang user
           return redirect()->route('admin.frontend')-> with(['flash_level' => 'danger', 'flash_message' => 'Xin Lỗi Bạn Không Có Quyền Vào Trang Này!']);;
        }
    }
}


