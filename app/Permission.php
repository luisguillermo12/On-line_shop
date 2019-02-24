<?php

namespace Massaggi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Permission extends Model 
{
    protected $table = 'permissions';
    protected $primarykey = 'id';
    protected $fillable = ['display_name', 'sort', 'module', 'status'];
 
     

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
