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
        $parameter = ParametersSystem::where('code', 2)->first(); 
        $publications = Publications::get();
            return view('welcome')
            ->with('parameter', $parameter)
            ->with('publications', $publications);
    }



}
