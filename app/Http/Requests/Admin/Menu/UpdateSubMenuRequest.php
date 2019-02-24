<?php
namespace Massaggi\Http\Requests\Admin\Menu;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSubMenuRequest extends FormRequest
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
            'id_main_menus' => 'required',
            'menu_link'=>'required|max:190',
            'title_seo'=>'required|max:190|',
           
        ];
    }

    public function messages()
    {
        return [
            'menu_name.required' => 'El Nombre del menu es requerido.',
            'menu_name.max' => 'El Nombre debe poseer menos de 190 caracteres.',
            'id_main_menus.required'=>'el menu padre es requerido',
            'menu_link.required' => 'El la ruta es requerida requerido.', 
            'menu_link.max' => 'la ruta debe poseer menos de 190 caracteres.',
            'title_seo.required' => ' titulo del seo requerido.',
            'title_seo.max' => 'El tituloseo debe poseer menos de 190 caracteres.',  
          ];
    }
}
