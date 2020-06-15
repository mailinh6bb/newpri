<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Models\User;
use Mail;
use Carbon\Carbon;
class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function getforgetpassword()
    {
        return view('backend.forgetpassword');
    }
    // public function getresetpassword()
    // {
    //     return view('backend.email.reset');
    // }
    public function postforgetpassword(Request $request)
    {
        $email = $request->email;
        $errors='Email không tồn tại ! Vui lòng nhập lại';
        $checkemail = User::where('email',$email)->first();
        // dd($checkemail->id);
        if(!$checkemail)
        {
            return view('backend.forgetpassword',compact('errors'));
        }
        else
        {
            // dd($checkemail->id);
            return view('email.reset',compact('checkemail'));
        }
        // $code = bcrypt(md5(time().$email));
        // $checkemail->code = $code;
        // $checkemail->email_verified_at = Carbon::now();
        // $checkemail->save();
        // $url = route('admin.get.resetpassword',['code' => $checkemail->code,'name'=>$name]);
        // $data =[
        //     'route' => $url
        // ];
        // Mail::send('email.reset_password', $data, function($message) use ($email){
	    //     $message->to($email, 'Visitor')->subject('Lấy lại mật khẩu');
	    // });
    }
    public function postresetpassword(Request $request)
    {
        $errors='Mật khẩu nhập lại không trùng khớp !';
        if($request->password != $request->resetpassword)
        {
            return view('email.reset',compact('errors'));
        }
        $user = User::where('id',$request->id)->first();
        $user->password = bcrypt($request->resetpassword);
        $user->save();

        return view('backend.login');

    }
}
