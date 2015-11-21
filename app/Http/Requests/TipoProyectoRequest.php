<?php

namespace ProyectoPIS\Http\Requests;

use ProyectoPIS\Http\Requests\Request;

class TipoProyectoRequest extends Request
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
            'tipo' => 'min:4|required|unique:tipoProyecto',
        ];
    }
}
