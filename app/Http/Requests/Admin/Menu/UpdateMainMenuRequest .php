<?php
namespace Massaggi\Http\Requests\Admin\Menu;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMainMenuRequest extends FormRequest
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
            'menu_name' => 'required|max:190',
           
        ];
    }

    public function messages()
    {
        return [
            'menu_name.required' => 'El Nombre del menu es requerido.',
            'menu_name.max' => 'El Nombre debe poseer menos de 190 caracteres.',
            //'menu_name.unique' => 'menu ya registrado.',  
          ];
    }
}
