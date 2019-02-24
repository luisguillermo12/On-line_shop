<?php

namespace Massaggi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class PermissionRole extends Model 
{
    protected $table = 'permission_role';
    protected $primarykey = 'id';
    protected $fillable = ['permission_id','role'];
 
}
