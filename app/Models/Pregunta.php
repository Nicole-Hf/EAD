<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $table = 'pregunta';
    protected $fillable = [
        'item',
        'pregunta',
        'observacion',
        'resultado',
        'edadId',
        'areaId',
    ];

    public function edad() {
        return $this->belongsTo(Edad::class, 'edadId');
    }

    public function area() {
        return $this->belongsTo(Area::class, 'areaId');
    }

}
