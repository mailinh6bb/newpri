<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	protected $table = 'ratings';
	protected $guarded = [''];
	public function user(){
		return $this->belongsTo('App\Models\User','ra_user_id', 'id');
	}
	public function product(){
		return $this->belongsTo('App\Models\Product','ra_product_id', 'id');
	}

}

