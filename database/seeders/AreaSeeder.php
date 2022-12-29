<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'nombre' => 'MOTRICIDAD GRUESA',
            'siglas' => 'MG'
        ]);

        Area::create([
            'nombre' => 'MOTRICIDAD FINO ADAPTATIVA',
            'siglas' => 'MFA'
        ]);

        Area::create([
            'nombre' => 'AUDICION LENGUAJE',
            'siglas' => 'AL'
        ]);

        Area::create([
            'nombre' => 'PERSONAL SOCIAL',
            'siglas' => 'PS'
        ]);
    }
}
