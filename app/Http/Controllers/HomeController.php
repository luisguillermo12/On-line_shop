<?php

namespace Massaggi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Massaggi\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Auth;
use Massaggi\User;
use Massaggi\Publications;
use Massaggi\images;
use Massaggi\ParametersSystem;



class HomeController extends Controller
{

    public function index(){
        return view('welcome');
    }
    
    
    public function welcome (){
        $publications = Publications::get();

    if (!Auth::guest()){
        $cart = User::where('id', Auth::user()->id)->first()->cart;
        $in_the_cart = $publications->intersect($cart);
    } 
        $parameter = ParametersSystem::where('code', 2)->first(); 
     

             if (!Auth::guest()){
                    return view('welcome')   
                      ->with('in_the_cart', $in_the_cart)
                    ->with('parameter', $parameter)
                    ->with('publications', $publications);
              
            }else {
                     return view('welcome')   
                    ->with('parameter', $parameter)
                    ->with('publications', $publications);
            }
    }



}
