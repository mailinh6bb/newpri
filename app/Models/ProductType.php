<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
 protected $table = 'product_type';
    protected $guarded =[''];
    public function product(){
		return $this->belongsToMany('App\Models\Product','pro_type');
	}
	
}
