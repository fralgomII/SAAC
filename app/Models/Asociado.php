<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asociado extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_afiliacion',
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'tipo_documento',
        'cedula',
        'fecha_expedicion',
        'dpto_expedicion',
        'lugar_expedicion',
        'fecha_nacimiento',       
        'edad',
        'dpto_nacimiento',
        'lugar_nacimiento',
        'nacionalidad',
        'cedula_representante',
        'nombre_representante',
        'edad_representante',
        'genero',
        'estado_civil',
        'personas_adultos',
        'personas_menores',
        'cabeza_familia',
        'tipo_vivienda',
        'estrato',
        'dpto',
        'ciudad',
        'direccion',
        'telefono',
        'celular',
        'email',
        'nivel_educativo',
        'profesion',
        'idiomas',
        'hobbies',
        'autoriza_residencia',
        'autoriza_trabajo',
        'autoriza_familiar',
        'autoriza_email',
        'autoriza_telefono',
        'autoriza_datos',
        'estado',
    ];

    // Relación uno a uno con el modelo Economica
    public function economicas()
    {
        return $this->hasOne(Economica::class);
    }

    // Relación uno a uno con el modelo Activo
    public function activos()
    {
        return $this->hasOne(Activo::class);
    }

    // Relación uno a uno con el modelo Activo
    public function conocimientos()
    {
        return $this->hasOne(Conocimiento::class);
    }

    // Relación uno a uno con el modelo Activo
    public function referencias()
    {
        return $this->hasOne(Referencia::class);
    }

    // Relación uno a muchos con el modelo Aportes
    public function aportes()
    {
        return $this->hasMany(AsociadoAporte::class);
    }
}