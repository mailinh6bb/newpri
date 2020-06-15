<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    public function index()
    { 
        $user = Auth::user();
        if($user && $user->level > 1)
        {
            $message = 'Bạn không đủ thẩm quyền';
            return view('backend.index',compact('message'));
        }
        else{
            return view('backend.user.userEmployee');
        }
    }
    public function create()
    {   
        $user = Auth::user();
        if(!$user)
        {
            return redirect()->route('admin.get.login');
        }
        else{
            return view('backend.user.userEmployeeCreate');
        }
        
    }
    public function store(Request $req)
    {
        $users = new  User();
        $users->name = $req->name;
        $users->sex = $req->sex;
        $users->birthday =$req->birthday;
        $users->email =$req->email;
        $users->phone =$req->phone;
        $users->address =$req->address;
        $users->password=bcrypt($req->password);
        $users->level =$req->level;
        $users->save();
        return redirect()->route('get.register');
    }
}
