<?php

namespace Massaggi\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUSerRequest extends FormRequest
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
            
            'name'                  => 'required|max:190',
            'username'              => 'required|unique:users|max:190',
            'cellphone'             => 'required',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|min:8|max:10|confirmed|regex:(.*[A-Z].*)|regex:(.*[0-9].*)|regex:(.*[#\*_!@$%&-].*)',
            'password_confirmation' => 'required|min:8|max:10|regex:(.*[A-Z].*)|regex:(.*[0-9].*)|regex:(.*[#\*_!@$%&-].*)',
            'assignees_roles'       => 'required',
        ];
    }


      public function messages()
    {
        return [
            'name.required' => 'El Nombre es requerido.',
            'name.max' => 'campo nombre no debe tener mas de 190 caracteres.',
            'username.required' =>'El usuario es requerido.',
            'username.max' => 'campo usuario no debe tener mas de 190 caracteres.',
            'username.unique' => 'El username ya se encuentra registrado.',
            'cellphone.required' => 'El celular es requerido.',
            'email.required' => 'El Usuario es requerido.',
            'email.unique' => 'El Usuario ya se encuentra registrado.',
            'password.required' => 'La Contraseña es requerida.',
            'password.min' => 'La Contraseña debe tener al menos 8 caracteres.',
            'password.max' => 'La Contraseña debe tener máximo 10 caracteres.',
            'password.confirmed' => 'La Contraseña de Confirmación no coincide.',
            'password.regex' => 'Su contraseña debe contener al menos 1 caracter en mayúscula, 1 caracter en minúscula, 1 número y un caracter especial (# * _ ! @ # $ % & -). No se permiten espacios en blanco.',
            'password_confirmation.required' => 'La Contraseña de Confirmación es requerida.',
            'password_confirmation.min' => 'La Contraseña de Confirmación debe tener al menos 8 caracteres.',
            'password_confirmation.max' => 'La Contraseña de Confirmación debe tener máximo 10 caracteres.',
            'password_confirmation.regex' => 'Su contraseña de Confirmación debe contener al menos 1 caracter en mayúscula, 1 caracter en minúscula, 1 número y un caracter especial (# * _ ! @ $ % & -).  No se permiten espacios en blanco.',
            'assignees_roles.required' => 'El Usuario debe tener al menos un rol asociado.',
                 ];
    }
}
