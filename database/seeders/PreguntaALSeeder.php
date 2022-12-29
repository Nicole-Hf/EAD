<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntaALSeeder extends Seeder
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
            'pregunta' => 'Busca sonido con la mirada',
            'edadId' => 1,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 2,
            'pregunta' => 'Dos sonidos guturales diferentes',
            'edadId' => 1,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 3,
            'pregunta' => 'Balbucea con las personas',
            'edadId' => 1,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 4,
            'pregunta' => '4 o más sonidos diferentes',
            'edadId' => 2,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 5,
            'pregunta' => 'Ríe a carcajadas',
            'edadId' => 2,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 6,
            'pregunta' => 'Reacciona cuando se le llama',
            'edadId' => 2,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 7,
            'pregunta' => 'Pronuncia 3 o más sílabas',
            'edadId' => 3,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 8,
            'pregunta' => 'Hace sonar la campana',
            'edadId' => 3,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 9,
            'pregunta' => 'Una palabra clara',
            'edadId' => 3,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 10,
            'pregunta' => 'Niega con la cabeza',
            'edadId' => 4,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 11,
            'pregunta' => 'Llama a la madre o acompañante',
            'edadId' => 4,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 12,
            'pregunta' => 'Entiende orden sencilla',
            'edadId' => 4,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 13,
            'pregunta' => 'Reconoce tres objetos',
            'edadId' => 5,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 14,
            'pregunta' => 'Combina dos palabras',
            'edadId' => 5,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 15,
            'pregunta' => 'Reconoce seis objetos',
            'edadId' => 5,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 16,
            'pregunta' => 'Nombra cinco objetos',
            'edadId' => 6,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 17,
            'pregunta' => 'Usa frases de tres palabras',
            'edadId' => 6,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 18,
            'pregunta' => 'Más de 20 palabras claras',
            'edadId' => 6,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 19,
            'pregunta' => 'Dice su nombre completo',
            'edadId' => 7,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 20,
            'pregunta' => 'Conoce alto-bajo, grande-pequeño',
            'edadId' => 7,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 21,
            'pregunta' => 'Usa oraciones completas',
            'edadId' => 7,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 22,
            'pregunta' => 'Define por uso cinco objetos',
            'edadId' => 8,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 23,
            'pregunta' => 'Repite tres dígitos',
            'edadId' => 8,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 24,
            'pregunta' => 'Describe bien el dibujo',
            'edadId' => 8,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 25,
            'pregunta' => 'Cuenta dedos de las manos',
            'edadId' => 9,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 26,
            'pregunta' => 'Distingue adelante-atrás, arriba-abajo',
            'edadId' => 9,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 27,
            'pregunta' => 'Nombra 4-5 colores',
            'edadId' => 9,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 28,
            'pregunta' => 'Expresa opiniones',
            'edadId' => 10,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 29,
            'pregunta' => 'Conoce izquierda y derecha',
            'edadId' => 10,
            'areaId' => 3,
        ]);

        Pregunta::create([
            'item' => 30,
            'pregunta' => 'Conoce días de la semana',
            'edadId' => 10,
            'areaId' => 3,
        ]);
    }
}
