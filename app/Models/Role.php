<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Role extends Model
{	use SoftDeletes;
    protected $table = 'roles';
    protected $fillable = 
    [
    	'name'
    ];

     public function users(){
        return $this->belongsToMany('App\Models\User','user_roles');
    }
     public function Permissions(){
        return $this->belongsToMany('App\Models\Permission','role_permissions');
    }
}
