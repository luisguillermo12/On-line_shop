<?php

namespace Massaggi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class AssignedRole extends Model 
{
    protected $table = 'assigned_role';
    protected $primarykey = 'id';
    protected $fillable = ['user_id', 'role_id'];
 
     

/*    public function permissions()
        {
            return $this->belongsToMany(Permission::class, 'permission_role')
             ->withPivot('permission_id');
        }

     public function users()
        {
            return $this->belongsToMany(user::class, 'assigned_roles')
             ->withPivot('user_id');
        }*/
}
