<?php

namespace Massaggi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Massaggi\Role;
use Illuminate\Database\Eloquent\SoftDeletes;
use Massaggi\Traits\PermisionModule;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use PermisionModule;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cellphone','email','username', 'password','status','confirmed','confirmation_code', 'admin_app' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','username',
    ];

     public function roles()
        {
            return $this->belongsToMany(Role::class, 'assigned_role')
             ->withPivot('role_id');
        }
}
