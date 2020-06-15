<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestCategory;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller as Controllers;


class AdminCategoryController extends Controllers
{
    public function index()
    {   
        $categories = Category::all();
        $viewData =[
            'categories' => $categories,
            'index' => 0
        ];
        return view('backend.category.category',$viewData);
    }
    public function create()
    {
        return view('backend.category.addCategory');
    }
    public function store(Request $req)
    {
        $this->validate($req,[
            'name'=>'required'
        ],[
            'name.required' => 'Vui lòng nhập tên danh mục',

        ]);
        $categories = new Category();
        $categories->name = $req->name;
        $categories->cate_slug = Str::slug($req->name,'-');
        if($req->cate_status)
        {
            $categories->cate_status = 1;
        }else {
            $categories->cate_status = 0;
        }
        $categories->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.editCategory',compact('category'));
    }
    public function update(Request $req, $id)
    {
        $category = Category::find($id);
        $category->name = $req->name;
        $category->cate_slug = Str::slug($req->name,'-');
        if($req->cate_status)
        {
            $category->cate_status = 1;
        }else {
            $category->cate_status = 0;
        }
        $category->save();
        return redirect()->back();
    }
    public function action($action,$id)
    {
       if(isset($action))
       {   
            $category   = Category::find($id);
           switch($action)
           {
               case 'delete':
                $category->delete();
               break;
           }
       }
       return redirect()->route('admin.get.list.category');
    }
    
}
