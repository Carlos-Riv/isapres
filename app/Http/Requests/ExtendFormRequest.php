<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ExtendFormRequest extends FormRequest
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
            'name' => [ 'required','regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/' ],
            'last_name' => [ 'required', 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/' ],
            'email' => 'required|email',
            'rut' => [ 'required', 'regex:/^\d{7,8}-[\d|kK]{1}$/' ],
            'phone' => 'required|digits:8',
            // 'birthdate' => 'required',
            'salary' => 'required',
            'work' => [ 'required',Rule::in(['dependiente', 'independiente']) ],
            'responsibilities' => 'required | digits_between:0,7',
            'city' => [ 'required', 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/' ],
            'commune' => [ 'required', 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/' ],
            'isapre_id' => 'required | exists:isapres,id',
            'message' => 'nullable | max:200'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre requerido.',
            'name.regex' => 'Formato no válido. Ingresa sólo letras.',
            'last_name.required' => 'Apellido requerido.',
            'last_name.regex' => 'Formato no válido. Ingresa sólo letras.',
            'email.required' => 'Email requerido.',
            'email.email' => 'Formato no válido.',
            'rut.required' => 'Rut requerido.',
            'rut.regex' => 'Formato no válido. Favor sin puntos y con guión.',
            'phone.required' => 'Fono requerido.',
            'phone.digits' => 'Fono debe tener 8 digitos.',
            'salary.required' => 'Renta requerido.',
            'salary.numeric' => 'Formto no válido. Sólo números.',
            'work.required' => 'Tipo de trabjo requerido.',
            'work.in' => 'Favor seleccione una opción.',
            'responsibilities.required' => 'Cargas requerido.',
            'responsibilities.digits_between' => 'Favor seleccione una opción.',
            'city.required' => 'Ciudad requerido.',
            'city.regex' => 'Formato no válido, Ingresa sólo letras.',
            'commune.required' => 'Comuna requerido',
            'commune.regex' => 'Formato no válido. Ingresa sólo letras.',
            'isapre_id.required' => 'Isapre requerido.',
            'isapre_id. exists' => 'Isapre no existe en nuestros registros.',
            'message.max' => 'Mensaje max 200 caracteres.'
        ];
    }
}
