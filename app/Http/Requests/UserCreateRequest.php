<?php

namespace ProyectoPIS\Http\Requests;

use ProyectoPIS\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'name' => 'min:4|required|unique:users',
            'email' => 'email|min:4|required|unique:users',
            'password' => 'min:4|required|confirmed',
        ];
    }
}
