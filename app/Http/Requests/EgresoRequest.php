<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EgresoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'fecha_egreso' => 'nullable|date',
            'cedula' => 'nullable|string|max:10',
            'nombre' => 'nullable|string|max:80',
            'concepto' => 'nullable|string|max:254',
            'forma_pago' => 'nullable|string|max:20',
            'valor' => 'nullable|numeric',
            'interes_rfte' => 'nullable|numeric',
            'valor_rfte' => 'nullable|numeric',
            'interes_rica' => 'nullable|numeric',
            'valor_rica' => 'nullable|numeric',
            'valor_egreso' => 'nullable|numeric',
        ];
    }

    public function messages()
    {
        return [
            'fecha_egreso.date' => 'El campo fecha de egreso debe ser una fecha válida.',
            'cedula.max' => 'El campo cédula no puede tener más de :max caracteres.',
            'nombre.max' => 'El campo nombre no puede tener más de :max caracteres.',
            'concepto.max' => 'El campo concepto no puede tener más de :max caracteres.',
            'forma_pago.max' => 'El campo forma de pago no puede tener más de :max caracteres.',
            'valor.numeric' => 'El valor del egreso debe ser un valor numérico.',
            'interes_rfte.numeric' => 'El valor del interes de la retención en la fuente debe ser un valor numérico.',
            'valor_rfte.numeric' => 'El valor de la retención en la fuente debe ser un valor numérico.',
            'interes_rica.numeric' => 'El valor del interes de la retención ICA debe ser un valor numérico.',
            'valor_rica.numeric' => 'El valor de la retención ICA debe ser un valor numérico.',
            'valor_egreso.numeric' => 'El valor total del egreso debe ser un valor numérico.',
        ];
    }
}