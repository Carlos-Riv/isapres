<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoinFormRequest extends FormRequest
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
            'name' => array('required','regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/'),
            'email' => 'required|email',
            'phone' => 'required|digits:8',
            'message' => 'nullable|max:200',
            'isapre' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre requerido',
            'name.regex' => 'Formato no válido. Ingresa sólo letras',
            'email.required' => 'Email requerido',
            'email.email' => 'Formato no válido. Sólo aceptamos emails.',
            'phone.required' => 'Fono requerido',
            'phone.digits' => 'Fono debe tener 8 digitos',
            'message.max' => 'Mensaje max 200 caracteres',
            'isapre.required' => 'Isapre requerida'
        ];
    }
}
