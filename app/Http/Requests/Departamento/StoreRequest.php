<?php

namespace App\Http\Requests\Departamento;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'nombre'=> 'required|string|max:150|unique:departamentos',
            
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'Este campo es requerido',
            'nombre.string' => 'El valor no es correcto',
            'nombre.max' => 'Solo se permiten 150 caracteres',
            'nombre.unique'=> 'El nombre del departamento ya se encuentra registrado',

        ];

     
    }
}
