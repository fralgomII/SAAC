<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago_Credito extends Model
{
    use HasFactory;

    //protected $table = 'aportes';

    //protected $fillable = [
    //    'fecha_aporte',
    //    'asociado_id',
    //    'valor_aporte'
    //];

    public function asociado()
    {
        return $this->belongsTo(Asociado::class);
    }
}
