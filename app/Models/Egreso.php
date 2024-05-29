<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    use HasFactory;

    protected $table = 'egresos';

    protected $fillable = [
        'fecha_egreso',
        'asociado_id',
        'valor_egreso'
    ];

    public function asociado()
    {
        return $this->belongsTo(Asociado::class);
    }
}
