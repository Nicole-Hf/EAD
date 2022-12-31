<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escala extends Model
{
    use HasFactory;

    protected $table = 'escalas';
    protected $fillable = [
        'etiqueta',
        'rangoInicial',
        'rangoFinal',
        'edadId'
    ];

    public function edad() {
        return $this->belongsTo(Edad::class, 'edadId');
    }
}
