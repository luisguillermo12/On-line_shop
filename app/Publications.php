<?php

namespace Massaggi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;


class Publications extends Model 
{
    protected $table = 'Publications';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'description', 'price'];
 
     
 
}
