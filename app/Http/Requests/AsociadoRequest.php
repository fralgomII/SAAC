<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsociadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //'fecha_afiliacion' => 'required|date',
            //'nombre' => 'required|string|max:80',
            //'genero' => 'required|in:Masculino,Femenino,Intersexual',
            //'tipo_documento' => 'required|string|max:5',
            //'cedula' => 'required|string|max:10|unique:asociados,cedula',
            //'fecha_expedicion' => 'required|date',
            //'lugar_expedicion' => 'required|string|max:30',
            //'dpto_expedicion' => 'required|string|max:30',
            //'fecha_nacimiento' => 'required|date',
            //'edad' => 'required|integer|min:0',
            //'lugar_nacimiento' => 'required|string|max:30',
            //'dpto_nacimiento' => 'required|string|max:30',
            //'celular' => 'required|string|max:20',
            //'direccion' => 'required|string|max:80',
            //'ciudad' => 'required|string|max:30',
            //'dpto' => 'required|string|max:30',
            //'email' => 'required|string|email|max:80|unique:asociados,email',
            //'estado_civil' => 'required|string|max:15',
            //'tipo_vivienda' => 'required|string|max:6',
            //'estrato' => 'required|integer|min:1|max:6',
            //'nivel_educativo' => 'required|string|max:15',
            //'profesion' => 'required|string|max:30',
            //'estado' => 'required|in:Activo,Retirado,Suspendido',
        ];
    }
    public function messages()
    {
        return [
            'fecha_afiliacion.required' => 'La fecha de afiliación es obligatoria.',
            'fecha_afiliacion.date' => 'El campo fecha de afiliación debe ser una fecha válida.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre debe ser una cadena de texto.',
            'nombre.max' => 'El nombre no puede exceder los 80 caracteres.',
            'genero.required' => 'El género es obligatorio.',
            'genero.in' => 'El género seleccionado no es válido.',
            'tipo_documento.required' => 'El tipo de documento es obligatorio.',
            'tipo_documento.string' => 'El tipo de documento debe ser una cadena de texto.',
            'tipo_documento.max' => 'El tipo de documento no puede exceder los 5 caracteres.',
            'cedula.required' => 'El número de cédula es obligatorio.',
            'cedula.string' => 'El número de cédula debe ser una cadena de texto.',
            'cedula.max' => 'El número de cédula no puede exceder los 10 caracteres.',
            'cedula.unique' => 'El número de cédula ya está en uso.',
            'fecha_expedicion.required' => 'La fecha de expedición es obligatoria.',
            'fecha_expedicion.date' => 'El campo fecha de expedición debe ser una fecha válida.',
            'lugar_expedicion.required' => 'El lugar de expedición es obligatorio.',
            'lugar_expedicion.string' => 'El lugar de expedición debe ser una cadena de texto.',
            'lugar_expedicion.max' => 'El lugar de expedición no puede exceder los 30 caracteres.',
            'dpto_expedicion.required' => 'El departamento de expedición es obligatorio.',
            'dpto_expedicion.string' => 'El departamento de expedición debe ser una cadena de texto.',
            'dpto_expedicion.max' => 'El departamento de expedición no puede exceder los 30 caracteres.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_nacimiento.date' => 'El campo fecha de nacimiento debe ser una fecha válida.',
            'edad.required' => 'La edad es obligatoria.',
            'edad.integer' => 'La edad debe ser un número entero.',
            'edad.min' => 'La edad mínima permitida es 0.',
            'lugar_nacimiento.required' => 'El lugar de nacimiento es obligatorio.',
            'lugar_nacimiento.string' => 'El lugar de nacimiento debe ser una cadena de texto.',
            'lugar_nacimiento.max' => 'El lugar de nacimiento no puede exceder los 30 caracteres.',
            'dpto_nacimiento.required' => 'El departamento de nacimiento es obligatorio.',
            'dpto_nacimiento.string' => 'El departamento de nacimiento debe ser una cadena de texto.',
            'dpto_nacimiento.max' => 'El departamento de nacimiento no puede exceder los 30 caracteres.',
            'celular.required' => 'El celular es obligatorio.',
            'celular.string' => 'El celular debe ser una cadena de texto.',
            'celular.max' => 'El celular no puede exceder los 20 caracteres.',
            'direccion.required' => 'La dirección es obligatoria.',
            'direccion.string' => 'La dirección debe ser una cadena de texto.',
            'direccion.max' => 'La dirección no puede exceder los 80 caracteres.',
            'ciudad.required' => 'La ciudad es obligatoria.',
            'ciudad.string' => 'La ciudad debe ser una cadena de texto.',
            'ciudad.max' => 'La ciudad no puede exceder los 30 caracteres.',
            'dpto.required' => 'El departamento es obligatorio.',
            'dpto.string' => 'El departamento debe ser una cadena de texto.',
            'dpto.max' => 'El departamento no puede exceder los 30 caracteres.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.string' => 'El correo electrónico debe ser una cadena de texto.',
            'email.email' => 'El correo electrónico debe ser una dirección de correo electrónico válida.',
            'email.max' => 'El correo electrónico no puede exceder los 80 caracteres.',
            'email.unique' => 'Ya existe un asociado con este correo electrónico.',
            'estado_civil.required' => 'El estado civil es obligatorio.',
            'estado_civil.string' => 'El estado civil debe ser una cadena de texto.',
            'estado_civil.max' => 'El estado civil no puede exceder los 15 caracteres.',
            'tipo_vivienda.required' => 'El tipo de vivienda es obligatorio.',
            'tipo_vivienda.string' => 'El tipo de vivienda debe ser una cadena de texto.',
            'tipo_vivienda.max' => 'El tipo de vivienda no puede exceder los 6 caracteres.',
            'estrato.required' => 'El estrato es obligatorio.',
            'estrato.integer' => 'El estrato debe ser un número entero.',
            'estrato.min' => 'El estrato mínimo permitido es 1.',
            'estrato.max' => 'El estrato máximo permitido es 6.',
            'nivel_educativo.required' => 'El nivel educativo es obligatorio.',
            'nivel_educativo.string' => 'El nivel educativo debe ser una cadena de texto.',
            'nivel_educativo.max' => 'El nivel educativo no puede exceder los 15 caracteres.',
            'profesion.required' => 'La profesión es obligatoria.',
            'profesion.string' => 'La profesión debe ser una cadena de texto.',
            'profesion.max' => 'La profesión no puede exceder los 30 caracteres.',
            'estado.required' => 'El estado es obligatorio.',
            'estado.in' => 'El estado seleccionado no es válido.',
        ];
    }
}
