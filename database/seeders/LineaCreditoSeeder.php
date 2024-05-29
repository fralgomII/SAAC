<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LineaCredito;

class LineaCreditoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        lineacredito::create([
            'nombre'=>'Libre Inversión',
            'plazo'=>24,
            'valor'=>5000000,
            'interes_anual'=>22.8,
            'interes'=>1.9,
            'seguro_vida'=>0,
            'seguro_credito'=>0,
            'estado'=>'Activo'
        ]);
        lineacredito::create([
            'nombre'=>'Especial Aportes',
            'plazo'=>12,
            'valor'=>5000000,
            'interes_anual'=>12,
            'interes'=>1,
            'seguro_vida'=>0,
            'seguro_credito'=>0,
            'estado'=>'Activo',
        ]);
        lineacredito::create([
            'nombre'=>'Compra de Cartera Externa',
            'plazo'=>24,
            'valor'=>5000000,
            'interes_anual'=>12,
            'interes'=>1,
            'seguro_vida'=>0,
            'seguro_credito'=>0,
            'estado'=>'Activo',
        ]);
        lineacredito::create([
            'nombre'=>'Cupo Rotativo',
            'plazo'=>24,
            'valor'=>5000000,
            'interes_anual'=>24,
            'interes'=>2,
            'seguro_vida'=>0,
            'seguro_credito'=>0,
            'estado'=>'Activo',
        ]);
        lineacredito::create([
            'nombre'=>'Crédito vehiculo (Moto)',
            'plazo'=>24,
            'valor'=>7000000,
            'interes_anual'=>19.2,
            'interes'=>1.6,
            'seguro_vida'=>0,
            'seguro_credito'=>0,
            'estado'=>'Activo',
        ]);
        lineacredito::create([
            'nombre'=>'Educativo',
            'plazo'=>6,
            'valor'=>3000000,
            'interes_anual'=>18,
            'interes'=>1.5,
            'seguro_vida'=>0,
            'seguro_credito'=>0,
            'estado'=>'Activo',
        ]);
        lineacredito::create([
            'nombre'=>'Credilicencias',
            'plazo'=>6,
            'valor'=>2000000,
            'interes_anual'=>24,
            'interes'=>2,
            'seguro_vida'=>0,
            'seguro_credito'=>0,
            'estado'=>'Activo',
        ]);
        lineacredito::create([
            'nombre'=>'Credisoat',
            'plazo'=>6,
            'valor'=>2000000,
            'interes_anual'=>24,
            'interes'=>2,
            'seguro_vida'=>0,
            'seguro_credito'=>0,
            'estado'=>'Activo',
        ]);
        lineacredito::create([
            'nombre'=>'Credi-tecnomecanica',
            'plazo'=>6,
            'valor'=>2000000,
            'interes_anual'=>24,
            'interes'=>2,
            'seguro_vida'=>0,
            'seguro_credito'=>0,
            'estado'=>'Activo',
        ]);
        lineacredito::create([
            'nombre'=>'Crédito Progresando',
            'plazo'=>24,
            'valor'=>10000000,
            'interes_anual'=>15.6,
            'interes'=>1.3,
            'seguro_vida'=>0,
            'seguro_credito'=>0,
            'estado'=>'Activo',
        ]);
    }
}
