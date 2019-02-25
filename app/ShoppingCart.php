<?php

namespace Massaggi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Massaggi\images;
use Massaggi\Publications;


class ShoppingCart extends Model 
{
    protected $table = 'shopping_cart';
    protected $primarykey = 'id';
    protected $fillable = ['user_id', 'publication_id'];


      

}
