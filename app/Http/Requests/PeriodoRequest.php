<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeriodoRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'mes' => 'nullable|string|max:2',
            'año' => 'nullable|string|max:4',
            'nombre' => 'nullable|string|max:80',
            'estado' => 'nullable|string|max:20',
        ];
    }

    public function messages()
    {
        return [
            'mes.max' => 'El campo mes no debe exceder los 2 caracteres.',
            'año.max' => 'El campo año no debe exceder los 4 caracteres.',
            'nombre.max' => 'El campo nombre no debe exceder los 80 caracteres.',
            'estado.max' => 'El campo estado no debe exceder los 20 caracteres.',
        ];
    }
}
