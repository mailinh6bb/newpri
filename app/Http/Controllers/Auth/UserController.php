<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.user.userEmployee');
    }
    public function create()
    {
        return view('backend.user.userEmployeeCreate');
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
    public function edit($id)
    {
       
    }
    public function update(Request $req, $id)
    {
       
    }
    public function action($action,$id)
    {
       
    }
    
}
