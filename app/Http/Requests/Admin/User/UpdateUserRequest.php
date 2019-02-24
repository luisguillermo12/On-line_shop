<?php

namespace Massaggi\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name'                  => 'required',
            'username'              => 'required',
            'cellphone'             => 'required',
            'email'                 => 'required|email',
            'assignees_roles'       => 'required',
        ];
    }


      public function messages()
    {
        return [
            'name.required' => 'El Nombre es requerido.',
            'username.required' => 'El usuario es requerido.',
            'cellphone.required' => 'El celular es requerido.',
            'email.required' => 'El Usuario es requerido.',
            'assignees_roles.required' => 'El Usuario debe tener al menos un rol asociado.',
                 ];
    }
}
