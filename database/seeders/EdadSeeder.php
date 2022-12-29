<?php

namespace Database\Seeders;

use App\Models\Edad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EdadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Edad::create([
            'rangoInicial' => 1,
            'rangoFinal' => 3
        ]);

        Edad::create([
            'rangoInicial' =>4,
            'rangoFinal' => 6
        ]);

        Edad::create([
            'rangoInicial' => 7,
            'rangoFinal' => 9
        ]);

        Edad::create([
            'rangoInicial' => 10,
            'rangoFinal' => 12
        ]);

        Edad::create([
            'rangoInicial' => 13,
            'rangoFinal' => 18
        ]);

        Edad::create([
            'rangoInicial' => 19,
            'rangoFinal' => 24
        ]);

        Edad::create([
            'rangoInicial' => 25,
            'rangoFinal' => 36
        ]);

        Edad::create([
            'rangoInicial' => 37,
            'rangoFinal' => 48
        ]);

        Edad::create([
            'rangoInicial' => 49,
            'rangoFinal' => 60
        ]);

        Edad::create([
            'rangoInicial' => 61,
            'rangoFinal' => 72
        ]);


    }
}
