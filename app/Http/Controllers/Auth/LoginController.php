<?php

namespace Massaggi\Http\Controllers\Auth;

use Massaggi\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Massaggi\Http\Requests\Admin\page\LoginRequest;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /*  OJO A ESTE COMENTARIO TE PUEDE AHORRAR MUCHO TIEMPO LA NUEVA VALIDACION PARA QUE DIGA SI EL USUARIO EXISTE esta en el use Illuminate\Foundation\Auth\AuthenticatesUsers;  Y MENSAJE Q SE MUESTRA EN EL LANGUHE DE LARAVEL POR DEFECTO YA QUE LA VALIDACION DE ESTE TIPO SOLO LA ESTOY USANDO EN EL LOGIN*/ 

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
 {
        $login = $request->input($this->username());
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            return [ $field => $login, 'password' => $request->input('password')];
 }

public function username()
 {
 return 'login';
 }
}
