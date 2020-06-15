<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded =[''];
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
    public function delProduct()
    {
        $product = Product::where('pro_cate_id',$this->id);
        return $product;
    }
}
