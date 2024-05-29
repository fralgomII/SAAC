<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago_Aporte extends Model
{
    use HasFactory;

    public function asociado()
    {
        return $this->belongsTo(Asociado::class);
    }
}
