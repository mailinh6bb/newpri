<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use App\Models\Permission;
class CheckACLMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$permission = '')
    {
       //lấy các quyền login vào hệ thông
        //b1 lấy tất cả cả role của user  và lấy cái id user hiện tại đang login vào hệt thống
        $listRoleOfUser = DB::table('users')
        ->join('user_roles', 'users.id', '=', 'user_roles.user_id')
        ->join('roles', 'user_roles.role_id', '=', 'roles.id')
        ->where('users.id',Auth()->user()->id)
        ->select('roles.*')
        ->get()->pluck('id')->toArray(); // có thể trả về nhiều id role vì 1 user có thể có nhiều quyền 
         // dd($listRoleOfUser);
        //Lấy tất cả các quyên khi user login vào hệ thông
        $listRoleOfUser = DB::table('roles')
        ->join('role_permissions', 'roles.id', '=', 'role_permissions.role_id')
        ->join('permissions','role_permissions.permission_id', '=', 'permissions.id')
        ->whereIn('roles.id',$listRoleOfUser) // lấy giá trị tại id
        ->select('permissions.*')
        ->get()->pluck('id')->unique();
            // dd($listRole);
        //lấy ra mã mà hình check phân quyền khi user vào

        $checkPermission = permission::where('name',$permission)->value('id');
              // dd($checkPermission);

            //kiểm tra user có được phép vào màng hình này không
            //check một phần tử có nằm trong colletion hay không
        if($listRoleOfUser->contains($checkPermission)){
            // dd($listRoleOfUser);
            return $next($request);
        }
        return redirect()->back()->with(['flash_level' => 'danger', 'flash_message' => 'Bạn không có quyền vào trang này! Cảm Ơn']);;;

        
    }
}