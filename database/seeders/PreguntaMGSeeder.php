<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntaMGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pregunta::create([
            'item' => 1,
            'pregunta' => 'Levanta la cabeza en pronta',
            'edadId' => 1,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 2,
            'pregunta' => 'Levanta la cabeza y pecho en pronta',
            'edadId' => 1,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 3,
            'pregunta' => 'Sostiene cabeza al levantarlo de los brazos',
            'edadId' => 1,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 4,
            'pregunta' => 'Control de cabeza sentado',
            'edadId' => 2,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 5,
            'pregunta' => 'Se voltea de un lado a otro',
            'edadId' => 2,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 6,
            'pregunta' => 'Intenta sentarse solo',
            'edadId' => 2,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 7,
            'pregunta' => 'Se sostiene sentado con ayuda',
            'edadId' => 3,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 8,
            'pregunta' => 'Se arrastra en posición prona',
            'edadId' => 3,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 9,
            'pregunta' => 'Se sienta por sí solo',
            'edadId' => 3,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 10,
            'pregunta' => 'Gatea bien',
            'edadId' => 4,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 11,
            'pregunta' => 'Se agarra y sostiene de pie',
            'edadId' => 4,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 12,
            'pregunta' => 'Se para solo',
            'edadId' => 4,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 13,
            'pregunta' => 'Da pasitos solo',
            'edadId' => 5,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 14,
            'pregunta' => 'Camina solo bien',
            'edadId' => 5,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 15,
            'pregunta' => 'Corre',
            'edadId' => 5,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 16,
            'pregunta' => 'Patea a la pelota',
            'edadId' => 6,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 17,
            'pregunta' => 'Lanza la pelota con las manos',
            'edadId' => 6,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 18,
            'pregunta' => 'Salta en los dos pies',
            'edadId' => 6,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 19,
            'pregunta' => 'Se empina en ambos pies',
            'edadId' => 7,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 20,
            'pregunta' => 'Se levanta sin usar las manos',
            'edadId' => 7,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 21,
            'pregunta' => 'Camina hacia atrás',
            'edadId' => 7,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 22,
            'pregunta' => 'Camina en punta de pies',
            'edadId' => 8,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 23,
            'pregunta' => 'Se para en un solo pie',
            'edadId' => 8,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 24,
            'pregunta' => 'Lanza y agarra la pelota',
            'edadId' => 8,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 25,
            'pregunta' => 'Camina en línea recta',
            'edadId' => 9,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 26,
            'pregunta' => 'Tres o más pasos en un pie',
            'edadId' => 9,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 27,
            'pregunta' => 'Hace rebotar y agarra la pelota',
            'edadId' => 9,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 28,
            'pregunta' => 'Salta a pies juntillas cuerda a 25 cms',
            'edadId' => 10,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 29,
            'pregunta' => 'Hace caballitos alternando los pies',
            'edadId' => 10,
            'areaId' => 1,
        ]);

        Pregunta::create([
            'item' => 30,
            'pregunta' => 'Salta desde 60 cms de altura',
            'edadId' => 10,
            'areaId' => 1,
        ]);
    }
}
