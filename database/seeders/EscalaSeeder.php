<?php

namespace Database\Seeders;

use App\Models\Escala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EscalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escala::create([
            'etiqueta' => 'Alerta',
            'rangoInicial' => 0,
            'rangoFinal' => 6,
            'edadId' => 1
        ]);

        Escala::create([
            'etiqueta' => 'Medio',
            'rangoInicial' => 7,
            'rangoFinal' => 13,
            'edadId' => 1
        ]);

        Escala::create([
            'etiqueta' => 'Medio-Alto',
            'rangoInicial' => 14,
            'rangoFinal' => 22,
            'edadId' => 1
        ]);

        Escala::create([
            'etiqueta' => 'Alto',
            'rangoInicial' => 23,
            'edadId' => 1
        ]);

        Escala::create([
            'etiqueta' => 'Alerta',
            'rangoInicial' => 0,
            'rangoFinal' => 19,
            'edadId' => 2
        ]);

        Escala::create([
            'etiqueta' => 'Medio',
            'rangoInicial' => 20,
            'rangoFinal' => 27,
            'edadId' => 2
        ]);

        Escala::create([
            'etiqueta' => 'Medio-Alto',
            'rangoInicial' => 28,
            'rangoFinal' => 34,
            'edadId' => 2
        ]);

        Escala::create([
            'etiqueta' => 'Alto',
            'rangoInicial' => 35,
            'edadId' => 2
        ]);

        Escala::create([
            'etiqueta' => 'Alerta',
            'rangoInicial' => 0,
            'rangoFinal' => 31,
            'edadId' => 3
        ]);

        Escala::create([
            'etiqueta' => 'Medio',
            'rangoInicial' => 32,
            'rangoFinal' => 39,
            'edadId' => 3
        ]);

        Escala::create([
            'etiqueta' => 'Medio-Alto',
            'rangoInicial' => 40,
            'rangoFinal' => 48,
            'edadId' => 3
        ]);

        Escala::create([
            'etiqueta' => 'Alto',
            'rangoInicial' => 49,
            'edadId' => 3
        ]);

        Escala::create([
            'etiqueta' => 'Alerta',
            'rangoInicial' => 0,
            'rangoFinal' => 42,
            'edadId' => 4
        ]);

        Escala::create([
            'etiqueta' => 'Medio',
            'rangoInicial' => 43,
            'rangoFinal' => 49,
            'edadId' => 4
        ]);

        Escala::create([
            'etiqueta' => 'Medio-Alto',
            'rangoInicial' => 50,
            'rangoFinal' => 56,
            'edadId' => 4
        ]);

        Escala::create([
            'etiqueta' => 'Alto',
            'rangoInicial' => 57,
            'edadId' => 4
        ]);

        Escala::create([
            'etiqueta' => 'Alerta',
            'rangoInicial' => 0,
            'rangoFinal' => 51,
            'edadId' => 5
        ]);

        Escala::create([
            'etiqueta' => 'Medio',
            'rangoInicial' => 52,
            'rangoFinal' => 60,
            'edadId' => 5
        ]);

        Escala::create([
            'etiqueta' => 'Medio-Alto',
            'rangoInicial' => 61,
            'rangoFinal' => 69,
            'edadId' => 5
        ]);

        Escala::create([
            'etiqueta' => 'Alto',
            'rangoInicial' => 70,
            'edadId' => 5
        ]);

        Escala::create([
            'etiqueta' => 'Alerta',
            'rangoInicial' => 0,
            'rangoFinal' => 61,
            'edadId' => 6
        ]);

        Escala::create([
            'etiqueta' => 'Medio',
            'rangoInicial' => 62,
            'rangoFinal' => 71,
            'edadId' => 6
        ]);

        Escala::create([
            'etiqueta' => 'Medio-Alto',
            'rangoInicial' => 72,
            'rangoFinal' => 83,
            'edadId' => 6
        ]);

        Escala::create([
            'etiqueta' => 'Alto',
            'rangoInicial' => 84,
            'edadId' => 6
        ]);

        Escala::create([
            'etiqueta' => 'Alerta',
            'rangoInicial' => 0,
            'rangoFinal' => 74,
            'edadId' => 7
        ]);

        Escala::create([
            'etiqueta' => 'Medio',
            'rangoInicial' => 75,
            'rangoFinal' => 86,
            'edadId' => 7
        ]);

        Escala::create([
            'etiqueta' => 'Medio-Alto',
            'rangoInicial' => 87,
            'rangoFinal' => 100,
            'edadId' => 7
        ]);

        Escala::create([
            'etiqueta' => 'Alto',
            'rangoInicial' => 101,
            'edadId' => 7
        ]);

        Escala::create([
            'etiqueta' => 'Alerta',
            'rangoInicial' => 0,
            'rangoFinal' => 89,
            'edadId' => 8
        ]);

        Escala::create([
            'etiqueta' => 'Medio',
            'rangoInicial' => 90,
            'rangoFinal' => 100,
            'edadId' => 8
        ]);

        Escala::create([
            'etiqueta' => 'Medio-Alto',
            'rangoInicial' => 101,
            'rangoFinal' => 114,
            'edadId' => 8
        ]);

        Escala::create([
            'etiqueta' => 'Alto',
            'rangoInicial' => 115,
            'edadId' => 8
        ]);

        Escala::create([
            'etiqueta' => 'Alerta',
            'rangoInicial' => 0,
            'rangoFinal' => 101,
            'edadId' => 9
        ]);
    }
}
