<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded =[''];
    public function categories()
    {
        return $this->belongsTo('App\Models\Category');
    } 
    public function getCategory()
    {
        $cate = Category::find($this->pro_cate_id);
        if(isset($cate))
         {return $cate->name;}
    }
     public function product_type(){
        return $this->belongsTo('App\Models\ProductType','pro_type', 'id');
    }
}