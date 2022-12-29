<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infante extends Model
{
    use HasFactory;

    protected $table = 'infante';
    protected $fillable = [
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'edad',
        'sexo',
        'fechaNacimiento',
        'image',
        'sala',
        'nombreMadre',
        'nombrePadre',
        'telefonoEmergencia'
    ];

    public function evaluaciones() {
        return $this->hasMany(Evaluacion::class, 'infanteId');
    }

    public function getAllChildren() {
        return $this->orderBy('id', 'DESC')->get();
    }
}
