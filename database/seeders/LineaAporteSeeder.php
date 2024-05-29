<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LineaAporte;

class LineaAporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        lineaaporte::create([
            'nombre'=>'Aporte Voluntario',
            'estado'=>'Activo'
        ]);
        lineaaporte::create([
            'nombre'=>'Aporte a Fondo de Vivienda',
            'estado'=>'Activo'
        ]);
        lineaaporte::create([
            'nombre'=>'Aporte a Fondo de Vehiculo',
            'estado'=>'Activo'
        ]);
        lineaaporte::create([
            'nombre'=>'Aporte a Fondo de Microempresa',
            'estado'=>'Activo'
        ]);
        lineaaporte::create([
            'nombre'=>'Aporte a Fondo de la Vista',
            'estado'=>'Activo'
        ]);
        lineaaporte::create([
            'nombre'=>'Aporte para Ahorro Programado',
            'estado'=>'Activo'
        ]);
        lineaaporte::create([
            'nombre'=>'Aporte Progresandito',
            'estado'=>'Activo'
        ]);
        lineaaporte::create([
            'nombre'=>'Aporte Extra',
            'estado'=>'Activo'
        ]);
        lineaaporte::create([
            'nombre'=>'Aporte para Ahorro Fijo',
            'estado'=>'Activo'
        ]);
    }
}
