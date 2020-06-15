<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
 protected $table = 'bills';
    protected $guarded =[''];
    public function product(){
		return $this->belongsTo('App\Models\Product','product_id', 'id');
	}
	public function order(){
		return $this->belongsTo('App\Models\Order','order_id', 'id');
	}
}
