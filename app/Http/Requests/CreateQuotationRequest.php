<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuotationRequest extends FormRequest
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
            'last_name' => array('required', 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/'),
            'rut' => array('required', 'regex:/^\d{7,8}-[\d|kK]{1}$/'),
            'email' => 'required|email',
            'phone' => 'required|digits:8',
            'city' => array('required', 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/'),
            'isapre_select' => 'required|digits:1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre requerido',
            'name.regex' => 'Formato no válido. Ingresa sólo letras',

            'last_name.required' => 'Apellido requerido',
            'last_name.regex' => 'Formato no válido. Ingresa sólo letras',

            'rut.required' => 'Rut requerido',
            'rut.regex' => 'Formato no válido. Ingresa sin puntos y con guión.',

            'email.required' => 'Email requerido',
            'email.email' => 'Formato no válido. Sólo aceptamos emails.',

            'phone.required' => 'Número cel requerido',
            'phone.digits' => 'Formato no válido. Ingresa tu número de 8 digitos',

            'city.required' => 'Ciudad requerida',
            'city.regex' => 'Formato no válido. Ingresa sólo letras',

            'isapre_select.required' => 'Isapre requerida',
            'isapre_select.digits' => 'Isapre debe ser un digito',
        ];
    }
}