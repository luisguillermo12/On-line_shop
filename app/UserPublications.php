<?php

namespace Massaggi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;


class UserPublications extends Model 
{

    protected $table = 'user_publications';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = ['user_id', 'publication_id', 'status'];
 
    
 
}
