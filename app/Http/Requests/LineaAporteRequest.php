<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LineaAporteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Puedes ajustar esto según la lógica de autorización de tu aplicación
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:80',
            'estado' => 'nullable|string|max:20',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de la línea de crédito es obligatorio.',
            'nombre.string' => 'El nombre de la línea de crédito debe ser una cadena de texto.',
            'nombre.max' => 'El nombre de la línea de crédito no puede exceder los 80 caracteres.',
            'estado.string' => 'El estado debe ser una cadena de texto.',
            'estado.max' => 'El estado no puede exceder los 20 caracteres.',
        ];
    }
}
