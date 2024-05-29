<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recaudo extends Model
{
    use HasFactory;

    protected $table = 'recaudos';

    protected $fillable = [
        'fecha_recaudo',
        'asociado_id',
        'valor_recaudo'
    ];

    public function asociado()
    {
        return $this->belongsTo(Asociado::class);
    }
}