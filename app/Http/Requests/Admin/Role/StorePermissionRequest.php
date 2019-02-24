<?php
namespace Massaggi\Http\Requests\Admin\Role;
use Illuminate\Foundation\Http\FormRequest;

class StorePermissionRequest extends FormRequest
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
            'name' => 'required|max:190|unique:permissions',
            'display_name' => 'required|max:190',
            'sort' => 'required',
            'module' => 'required|max:190',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El Nombre del permiso es requerido.',
            'name.max' => 'El Nombre debe poseer menos de 190 caracteres.',
            'name.unique' => 'permiso ya esta creado.',
            'display_name.required' => 'display name requerido',
            'display_name.max' => 'El display name debe poseer menos de 190 caracteres.',
            'sort.required' =>'sort es requerido',
            'module.required' => 'El modulo es requerido.',
            'module.max' => 'El modulo debe poseer menos de 190 caracteres.',
  
          ];
    }
}
