<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaAporte extends Model
{
    use HasFactory;

    protected $table = 'lineaaportes';

    protected $fillable = [
        'nombre',
        'estado'
    ];
}
