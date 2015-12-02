<?php

namespace ProyectoPIS\Http\Requests;

use ProyectoPIS\Http\Requests\Request;

class ProyectoRequest extends Request
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
        'nombreProyecto' => 'required|min:4|max:100|unique:proyecto',
        'descripcion' => 'required|min:4',
        'fechaInicio' => 'required|date|after:yesterday',
        'fechaFin' => 'required|date|after:fechaInicio',

        ];
    }
}
