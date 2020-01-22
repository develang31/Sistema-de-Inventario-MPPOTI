<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidarCampoUrl;
class ValidacionArea extends FormRequest
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
 	'nombre_area'=>'required|max:150|unique:areas,nombre_area,'.$this->route('id_area'),
	'id_sede'=>'required',
	'sigla_area'=>'required',
        'url' => ['required', 'max:100', new ValidarCampoUrl],
        'icono' => 'nullable|max:50'
        ];
    }
}
