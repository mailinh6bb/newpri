<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            return view('backend.index');
        }
        else{
            return view('backend.login');
        }
        
    }
}
