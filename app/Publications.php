<?php

namespace Massaggi;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Massaggi\images;
use Massaggi\User;


class Publications extends Model 
{
    protected $table = 'Publicationss';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'description', 'price', 'user_id'];

 
     public function images(){
   		 return $this->hasMany(images::class, 'publication_id');
	}
	public function user(){
  		return $this->belongsTo(User::class);
	}
 
}
