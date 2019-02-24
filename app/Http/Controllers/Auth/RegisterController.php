<?php

namespace Massaggi\Http\Controllers\Auth;

use Massaggi\User;
use Massaggi\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{

use RegistersUsers;
protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest');
    }
    protected function validator(array $data)
    {
       $messages= [

            'name.required' => 'El Nombre es requerido.',
            'cellphone.required' => 'El celular es requerido.',
            'cellphone.unique' => 'celular ya registrado.',
            'email.required' => 'El Usuario es requerido.',
            'email.unique' => 'El Usuario ya se encuentra registrado.',
            'username.required' => 'El user name es requerido.',
            'username.unique' => 'El user ya se encuentra registrado.',
            'username.max' => 'El user no debe tener mas de 50 caracteres.',
            'password.required' => 'La Contraseña es requerida.',
            //'password.min' => 'La Contraseña debe tener al menos 8 caracteres.',
            //'password.max' => 'La Contraseña debe tener máximo 10 caracteres.',
            'password.confirmed' => 'La Contraseña de Confirmación no coincide.',
           // 'password.regex' => 'Su contraseña debe contener al menos 1 caracter en mayúscula, 1 caracter en minúscula, 1 número y un caracter especial (# * _ ! @ # $ % & -). No se permiten espacios en blanco.',
            'password_confirmation.required' => 'La Contraseña de Confirmación es requerida.'

        ];

        return Validator::make($data, [
            'username'              => 'required|max:50|unique:users',
            'name'                  => 'required|max:190',
            'cellphone'             => 'required|max:190|unique:users',
            'email'                 => 'required|email|unique:users|max:190',
            //'password'              => 'required|min:8|max:10|confirmed|regex:(.*[A-Z].*)|regex:(.*[0-9].*)|regex:(.*[#\*_!@$%&-].*)'
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required'
        ], $messages );
 

    }

    protected function create(array $data){   
    

                $data['confirmation_code'] = str_random(64);
                $User = User::create([
                        'username' => $data['username'],
                        'name' => $data['name'],
                        'cellphone' => $data['cellphone'],
                        'email' => $data['email'],
                        'password' => bcrypt($data['password']),
                        'confirmation_code' => $data['confirmation_code']
                    ]);
                

               // Mail::send('mails.confirmation_mail', $data, function($message) use ($data) {
                //$message->to($data['email'], $data['name'])->subject('Por favor confirma tu correo'); });

                return  $User;
    
    }

   

}
