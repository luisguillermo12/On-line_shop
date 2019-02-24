<?php

namespace Massaggi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;


class Images extends Model 
{
    protected $table = 'images';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'primary', 'route'];
 
     
 
}
