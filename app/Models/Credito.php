<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha_credito',
        'asociado_id',
        'lineacredito_id',
        'interes_anual',
        'interes_credito',
        'seguro_deudor',
        'seguro_credito',
        'plazo_credito',
        'valor_credito',
        'valor_cuota',
        'estado',
    ];

    /**
     * Obtiene el asociado del crédito.
     */
    public function asociado()
    {
        return $this->belongsTo(Asociado::class);
    }

    /**
     * Obtiene la linea de crédito asociada al crédito.
     */
    public function lineacredito()
    {
        return $this->belongsTo(LineaCredito::class);
    }

    // Definir la relación con MovimientoCredito
    public function movimientos()
    {
        return $this->hasMany(MovimientoCredito::class);
    }
}