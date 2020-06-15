<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
      return view('frontend.login');
    }
    public function postLogin(Request $request){
     $data = $request -> only('email', 'password');
     if (Auth::attempt($data) ){
      return redirect()->route('admin.frontend')-> with(['flash_level' => 'success', 'flash_message' => 'Đăng nhập thành công.']);;
    }
    else{
      return redirect() -> back()->with(['thongbao' => 'Tài Khoản Bạn Không Đúng!']);
    }
  }

  public function getRegister()
  {
    return view('frontend.register');
  }

  public function postRegister(Request $request){
   $user = New User();
   $this -> validate($request, [
    'name' => 'required|min:6',
    'password' => 'required|min:6|max:32',
    'rePassword' => 'required|same:password',
    'email' => 'required|unique:users,email'
  ],

  [

    'password.required' => 'Bạn chưa nhập Password',
    'password.min' => 'Mật khẩu phải có từ 6-32 ký tự',
    'password.max' => 'Mật khẩu phải có từ 6-32 ký tự',
    'rePassword.required' => 'Bạn nhập lại Mật Khẩu',
    'rePassword.same' => 'Mật khẩu không trùng nhau',
    'email.unique' => 'Email đã tồn tại',
    'name.required' => 'Vui lòng nhập tên của bạn.',
    'name.min' => 'Tên không được dưới 6 ký tự.'

  ]);
   $user -> name = $request-> name;
   $user -> email = $request -> email;
   $user -> phone = $request -> phone;
   $user -> address = $request -> address;
   $user -> password = bcrypt($request -> password);
   $user -> remember_token = $request -> _token;
   $user ->save();
   return redirect() -> route('get.user.login')-> with(['flash_level' => 'success', 'flash_message' => 'Đăng ký thành công. Vui lòng đăng nhập tài khoản']);
 }

 public function getLogout(){
  Auth::logout();
  return redirect()->route('admin.frontend');
}

}