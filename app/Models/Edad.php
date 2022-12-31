<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edad extends Model
{
    use HasFactory;

    protected $table = 'edad';
    protected $fillable = [
        'rangoInicial',
        'rangoFinal'
    ];

    public function preguntas() {
        return $this->hasMany(Pregunta::class, 'edadId');
    }

    public function escalas() {
        return $this->hasMany(Pregunta::class, 'edadId');
    }
}
