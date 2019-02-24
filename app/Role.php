<?php

namespace Massaggi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Role extends Model 
{
    protected $table = 'roles';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'todos', 'SORT'];
 
     
 public function permissions()
        {
            return $this->belongsToMany(Permission::class, 'permission_role')
             ->withPivot('permission_id');
        }

     public function users()
        {
            return $this->belongsToMany(user::class, 'assigned_role')
             ->withPivot('user_id');
        }

}
