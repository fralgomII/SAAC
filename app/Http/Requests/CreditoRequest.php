<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreditoRequest extends FormRequest
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
            'fecha_credito' => 'required|date',
            'aportante_id' => 'required|exists:aportantes,id',
            'lineacredito_id' => 'required|exists:lineacreditos,id',
            'interes_credito' => 'required|numeric|min:0',
            'plazo_credito' => 'required|numeric|min:0',
            'valor_credito' => 'required|numeric|min:0',
            'valor_cuota' => 'required|numeric|min:0',
            'estado' => 'required|in:Solicitado,En Estudio,Aprobado,Rechazado',
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
            'fecha_credito.required' => 'La fecha del crédito es obligatoria.',
            'fecha_credito.date' => 'La fecha del crédito debe ser una fecha válida.',
            'aportante_id.required' => 'El aportante es obligatorio.',
            'aportante_id.exists' => 'El aportante seleccionado no es válido.',
            'lineacredito_id.required' => 'La línea de crédito es obligatorio.',
            'lineacredito_id.exists' => 'La línea de crédito seleccionado no es válido.',
            'interes_credito.required' => 'El interés del crédito es obligatorio.',
            'interes_credito.numeric' => 'El interés del crédito debe ser un valor numérico.',
            'interes_credito.min' => 'El interés del crédito no puede ser negativo.',
            'plazo_credito.required' => 'El plazo del crédito es obligatorio.',
            'plazo_credito.numeric' => 'El plazo del crédito debe ser un valor numérico.',
            'plazo_credito.min' => 'El plazo del crédito no puede ser negativo.',
            'valor_credito.required' => 'El valor del crédito es obligatorio.',
            'valor_credito.numeric' => 'El valor del crédito debe ser un valor numérico.',
            'valor_credito.min' => 'El valor del crédito no puede ser negativo.',
            'valor_cuota.required' => 'El valor de la cuota es obligatorio.',
            'valor_cuota.numeric' => 'El valor de la cuota debe ser un valor numérico.',
            'valor_cuota.min' => 'El valor de la cuota no puede ser negativo.',
            'estado.required' => 'El estado es obligatorio.',
            'estado.in' => 'El estado seleccionado no es válido.',
        ];
    }
}