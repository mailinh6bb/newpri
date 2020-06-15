<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.category.category');
    }
    public function create()
    {
        return view('backend.category.addCategory');
    }
}
