<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'email' => 'required|min:3|email',
            'nombreUsuario' => 'required|min:3',
            'password' => 'required|min:3',
            'password_confirmation' => 'required|same:password'
       ];
    }
}