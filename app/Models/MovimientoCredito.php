<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoCredito extends Model
{
    use HasFactory;
    protected $fillable = [
        'credito_id',
        'cuota',
        'interes',
        'capital',
        'seguro_deudor',
        'seguro_credito',
        'valor_cuota',
        'valor_abono',
        'valor_saldo',
    ];
    
    /**
     * Obtiene el encabezado del crédito.
     */
    public function credito()
    {
        return $this->belongsTo(Credito::class);
    }
}
