<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $table = 'evaluacion';
    protected $fillable = [
        'fecha',
        'peso',
        'altura',
        'edadMeses',
        'resultadoMG',
        'resultadoMF',
        'resultadoAL',
        'resultadoPS',
        'total',
        'contadorCero',
        'contadorUno',
        'personalId',
        'infanteId',
    ];

    public function personal() {
        return $this->belongsTo(Personal::class, 'personalId');
    }

    public function infante() {
        return $this->belongsTo(Infante::class, 'infanteId');
    }

    public function resultados() {
        return $this->hasMany(Resultado::class, 'evaluacionId');
    }

    public function getAllTests($infanteId) {
        return $this->where('infanteId', $infanteId)->orderBy('id', 'DESC')->get();
    }
}
