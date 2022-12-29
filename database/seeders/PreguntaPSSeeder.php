<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntaPSSeeder extends Seeder
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
            'pregunta' => 'Reconoce a la madre',
            'edadId' => 1,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 2,
            'pregunta' => 'Sonríe al acariciarlo',
            'edadId' => 1,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 3,
            'pregunta' => 'Se voltea cuando se le habla',
            'edadId' => 1,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 4,
            'pregunta' => 'Coge manos del examinador',
            'edadId' => 2,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 5,
            'pregunta' => 'Acepta y coge juguete',
            'edadId' => 2,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 6,
            'pregunta' => 'Pone atención a la conversación',
            'edadId' => 2,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 7,
            'pregunta' => 'Ayuda a sostener taza para beber',
            'edadId' => 3,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 8,
            'pregunta' => 'Reacciona imagen en el espejo',
            'edadId' => 3,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 9,
            'pregunta' => 'Imita aplausos',
            'edadId' => 3,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 10,
            'pregunta' => 'Entrega juguete al examinador',
            'edadId' => 4,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 11,
            'pregunta' => 'Pide un juguete u objeto',
            'edadId' => 4,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 12,
            'pregunta' => 'Bebe en taza solo',
            'edadId' => 4,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 13,
            'pregunta' => 'Señala una prenda de vestir',
            'edadId' => 5,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 14,
            'pregunta' => 'Señala dos partes del cuerpo',
            'edadId' => 5,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 15,
            'pregunta' => 'Avisa higiene personal',
            'edadId' => 5,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 16,
            'pregunta' => 'Señala 5 partes del cuerpo',
            'edadId' => 6,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 17,
            'pregunta' => 'Trata de contar experiencias',
            'edadId' => 6,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 18,
            'pregunta' => 'Control diurno de la orina',
            'edadId' => 6,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 19,
            'pregunta' => 'Diferencia niño-niña',
            'edadId' => 7,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 20,
            'pregunta' => 'Dice nombre papá y mamá',
            'edadId' => 7,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 21,
            'pregunta' => 'Se baña solo manos y cara',
            'edadId' => 7,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 22,
            'pregunta' => 'Puede desvestirse solo',
            'edadId' => 8,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 23,
            'pregunta' => 'Comparte juego con otros niños',
            'edadId' => 8,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 24,
            'pregunta' => 'Tiene amigo especial',
            'edadId' => 8,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 25,
            'pregunta' => 'Puede vestirse y desvestirse solo',
            'edadId' => 9,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 26,
            'pregunta' => 'Sabe cuántos años tiene',
            'edadId' => 9,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 27,
            'pregunta' => 'Organiza juegos',
            'edadId' => 9,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 28,
            'pregunta' => 'Hace mandados',
            'edadId' => 10,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 29,
            'pregunta' => 'Conoce nombre vereda-barrio o pueblo de residencia',
            'edadId' => 10,
            'areaId' => 4,
        ]);

        Pregunta::create([
            'item' => 30,
            'pregunta' => 'Comenta vida familiar',
            'edadId' => 10,
            'areaId' => 4,
        ]);
    }
}
