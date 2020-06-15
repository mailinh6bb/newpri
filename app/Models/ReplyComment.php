<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReplyComment extends Model
{
	protected $table = 'reply_comments';
	protected $guarded = ['*'];
	public function comment(){
		return $this->belongsTo('App\Models\Comment','rep_comment_id', 'id');
	}

}
