<?php

namespace Massaggi\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserPageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'username'              => 'required|max:50|unique:users',
            'name'                  => 'required|max:190',
            'cellphone'             => 'required|max:190|unique:users',
            'email'                 => 'required|email|unique:users|max:190',
            'password'              => 'required|min:8|max:10|confirmed|regex:(.*[A-Z].*)|regex:(.*[0-9].*)|regex:(.*[#\*_!@$%&-].*)',
            'password_confirmation' => 'required|min:8|max:10|regex:(.*[A-Z].*)|regex:(.*[0-9].*)|regex:(.*[#\*_!@$%&-].*)',
        ];
    }


      public function messages()
    {
        return [
            'name.required' => 'El Nombre es requerido.',
            'cellphone.required' => 'El celular es requerido.',
            'cellphone.unique' => 'celular ya registrado.',
            'email.required' => 'El Usuario es requerido.',
            'email.unique' => 'El Usuario ya se encuentra registrado.',

            'username.required' => 'El user name es requerido.',
            'username.unique' => 'El user ya se encuentra registrado.',
            'username.max' => 'El user no debe tener mas de 50 caracteres.',

            'password.required' => 'La Contraseña es requerida.',
            'password.min' => 'La Contraseña debe tener al menos 8 caracteres.',
            'password.max' => 'La Contraseña debe tener máximo 10 caracteres.',
            'password.confirmed' => 'La Contraseña de Confirmación no coincide.',
            'password.regex' => 'Su contraseña debe contener al menos 1 caracter en mayúscula, 1 caracter en minúscula, 1 número y un caracter especial (# * _ ! @ # $ % & -). No se permiten espacios en blanco.',
            'password_confirmation.required' => 'La Contraseña de Confirmación es requerida.',
            'password_confirmation.min' => 'La Contraseña de Confirmación debe tener al menos 8 caracteres.',
            'password_confirmation.max' => 'La Contraseña de Confirmación debe tener máximo 10 caracteres.',
            'password_confirmation.regex' => 'Su contraseña de Confirmación debe contener al menos 1 caracter en mayúscula, 1 caracter en minúscula, 1 número y un caracter especial (# * _ ! @ $ % & -).  No se permiten espacios en blanco.',
                 ];
    }
}
