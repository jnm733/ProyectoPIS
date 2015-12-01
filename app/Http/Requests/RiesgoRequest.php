<?php

namespace ProyectoPIS\Http\Requests;

use ProyectoPIS\Http\Requests\Request;

class RiesgoRequest extends Request
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
        'nombreRiesgo' => 'required|min:4|max:100|unique:riesgo',
        'descripcion' => 'required|min:4',
        'factores' => 'required|min:4',
        'reduccion' => 'required|min:4',
        'supervision' => 'required|min:4',
        ];
    }
}
