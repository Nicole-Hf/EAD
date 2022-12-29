<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'area';
    protected $fillable = [
        'nombre',
        'siglas',
    ];

    public function resultados() {
        return $this->hasMany(Resultado::class, 'areaId');
    }

    public function preguntas() {
        return $this->hasMany(Pregunta::class, 'areaId');
    }
}
