<?php

namespace ProyectoPIS\Http\Requests;

use ProyectoPIS\Http\Requests\Request;

class AsociarRiesgosRequest extends Request
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
            'prob[]' => 'integer|between:0,100',
        ];
    }
}
