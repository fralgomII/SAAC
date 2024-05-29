<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAporteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Puedes ajustar la lógica de autorización según tus necesidades
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fecha_aporte' => 'required|date',
            'aportante_id' => 'required|exists:aportantes,id',
            'valor_aporte' => 'required|numeric|min:0',
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
            'fecha_aporte.required' => 'La fecha del aporte es obligatoria.',
            'fecha_aporte.date' => 'El campo fecha del aporte debe ser una fecha válida.',
            'aportante_id.required' => 'El aportante es obligatorio.',
            'aportante_id.exists' => 'El aportante seleccionado no es válido.',
            'valor_aporte.required' => 'El valor del aporte es obligatorio.',
            'valor_aporte.numeric' => 'El valor del aporte debe ser un número.',
            'valor_aporte.min' => 'El valor del aporte no puede ser negativo.',
        ];
    }
}
