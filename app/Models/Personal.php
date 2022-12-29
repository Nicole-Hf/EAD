<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personal';
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'ci',
        'cargo',
        'sala',
        'userId',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'userId');
    }

    public function evaluaciones() {
        return $this->hasMany(Evaluacion::class, 'personalId');
    }
}
