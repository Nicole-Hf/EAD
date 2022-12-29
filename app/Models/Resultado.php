<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    protected $table = 'resultados';
    protected $fillable = [
        'resultado',
        'nroItem',
        'evaluacionId',
        'preguntaId'
    ];

    public function evaluacion() {
        return $this->belongsTo(Evaluacion::class, 'evaluacionId');
    }

    public function pregunta() {
        return $this->belongsTo(Pregunta::class, 'preguntaId');
    }
}
