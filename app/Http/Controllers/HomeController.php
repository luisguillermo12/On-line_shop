<?php

namespace Massaggi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Massaggi\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Auth;
use Massaggi\User;


class HomeController extends Controller
{

    public function index(){
             swal()->info('Usuario Registrado ','debe confirmar su correo electronico !',['timer'=>15000, 'width'=> 800 ]);
        return view('welcome');
    }



}
