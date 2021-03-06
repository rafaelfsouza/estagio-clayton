<?php

namespace App\Http\Requests\Usuarios;

use Illuminate\Foundation\Http\FormRequest;

class Perfil extends FormRequest
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

    public function rules()
    {
        return [
            'perfil' => 'required'
        ];
    }
}
