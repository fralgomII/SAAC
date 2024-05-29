<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaCredito extends Model
{
    use HasFactory;

    protected $table = 'lineacreditos';

    protected $fillable = [
        'nombre',
        'plazo',
        'valor',
        'interes_anual',
        'interes',
        'seguro_vida',
        'seguro_credito',
        'estado'
    ];
}