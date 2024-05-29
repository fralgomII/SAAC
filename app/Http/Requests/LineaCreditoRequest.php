<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LineaCreditoRequest extends FormRequest
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
            'plazo' => 'required|string|max:3',
            'valor' => 'required|numeric',    
            'interes_anual' => 'nullable|numeric',        
            'interes' => 'nullable|numeric',
            'seguro_vida' => 'nullable|numeric',
            'seguro_credito' => 'nullable|numeric',
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
            'plazo.required' => 'El plazo es obligatorio.',
            'plazo.string' => 'El plazo debe ser una cadena de texto.',
            'plazo.max' => 'El plazo no puede exceder los 3 caracteres.',
            'valor.numeric' => 'El interés máximo debe ser un valor numérico.',
            'interes_anual.numeric' => 'El interés mínimo debe ser un valor numérico.',
            'interes.numeric' => 'El interés mínimo debe ser un valor numérico.',
            'seguro_vida.numeric' => 'El interés máximo debe ser un valor numérico.',
            'seguro_credito.numeric' => 'El interés máximo debe ser un valor numérico.',
            'estado.string' => 'El estado debe ser una cadena de texto.',
            'estado.max' => 'El estado no puede exceder los 20 caracteres.',
        ];
    }
}
