<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class RolePermission extends Model
{	use SoftDeletes;
    protected $table = 'role_permissions';
    protected $fillable = 
    [
    	'role_id','permission_id'
    ];
}
