<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table = 'comment';
	protected $guarded = ['*'];
	public function user(){
		return $this -> belongsto('App\Models\User', 'idUser', 'id');
	}
	public function product(){
		return $this -> belongsto('App\Models\Product', 'idPro', 'id');
	}
	public function reply(){
		return $this-> hasMany('App\Models\ReplyComment', 'rep_comment_id', 'id');
	}
}
