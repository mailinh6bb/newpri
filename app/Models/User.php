<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
	use Notifiable;

	protected $table = 'users';
	protected $fillable = [
		'name', 'email', 'password','sex','phone','address'
	];

	public function user_roles(){
		return $this->belongsToMany('App\Models\Role','user_roles');
	}
	public function roles()
	{
		return $this->hasManyThrough(
			'App\Models\Role', 'App\Models\UserRole',
			'user_id','id'
		);
	}
}
