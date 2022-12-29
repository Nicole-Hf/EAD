<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntaMFASeeder extends Seeder
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
            'pregunta' => 'Abre y mira sus manos',
            'edadId' => 1,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 2,
            'pregunta' => 'Sostiene objeto en la mano',
            'edadId' => 1,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 3,
            'pregunta' => 'Se lleva objeto a la boca',
            'edadId' => 1,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 4,
            'pregunta' => 'Agarra objetos voluntariamente',
            'edadId' => 2,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 5,
            'pregunta' => 'Sostiene un objeto en cada mano',
            'edadId' => 2,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 6,
            'pregunta' => 'Pasa objeto de una mano a otra',
            'edadId' => 2,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 7,
            'pregunta' => 'Manipula varios objetos a la vez',
            'edadId' => 3,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 8,
            'pregunta' => 'Agarra objeto pequeño con los dedos',
            'edadId' => 3,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 9,
            'pregunta' => 'Agarra cubo con pulgar e índice',
            'edadId' => 3,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 10,
            'pregunta' => 'Mete y saca objetos en caja',
            'edadId' => 4,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 11,
            'pregunta' => 'Agarra tercer objeto sin soltar otros',
            'edadId' => 4,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 12,
            'pregunta' => 'Busca objetos escondidos',
            'edadId' => 4,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 13,
            'pregunta' => 'Hace torre de tres cubos',
            'edadId' => 5,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 14,
            'pregunta' => 'Pasa hojas de un libro',
            'edadId' => 5,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 15,
            'pregunta' => 'Anticipa salida del objeto',
            'edadId' => 5,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 16,
            'pregunta' => 'Tapa bien la caja',
            'edadId' => 6,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 17,
            'pregunta' => 'Hace garabatos circulares',
            'edadId' => 6,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 18,
            'pregunta' => 'Hace torre de 5 o más cubos',
            'edadId' => 6,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 19,
            'pregunta' => 'Ensarta 6 o más cuentas',
            'edadId' => 7,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 20,
            'pregunta' => 'Copia línea horizontal y vertical',
            'edadId' => 7,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 21,
            'pregunta' => 'Separa objetos grandes y pequeños',
            'edadId' => 7,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 22,
            'pregunta' => 'Figura humana rudimentaria I',
            'edadId' => 8,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 23,
            'pregunta' => 'Corta papel con las tijeras',
            'edadId' => 8,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 24,
            'pregunta' => 'Copia cuadrado y círculo',
            'edadId' => 8,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 25,
            'pregunta' => 'Dibuja figura humana II',
            'edadId' => 9,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 26,
            'pregunta' => 'Agrupa color y forma',
            'edadId' => 9,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 27,
            'pregunta' => 'Dibuja escalera imita',
            'edadId' => 9,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 28,
            'pregunta' => 'Agrupa por color forma y tamaño',
            'edadId' => 10,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 29,
            'pregunta' => 'Reconstruye escalera 10 cubo',
            'edadId' => 10,
            'areaId' => 2,
        ]);

        Pregunta::create([
            'item' => 30,
            'pregunta' => 'Dibuja casa',
            'edadId' => 10,
            'areaId' => 2,
        ]);
    }
}
