<?php

namespace Database\Seeders;

use App\Models\Infante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Infante::create([
            'nombre' => 'Emma Justine',
            'apellidoPaterno' => 'Acevedo',
            'apellidoMaterno' => 'Martinez',
            'edad' => 3,
            'sexo' => 'F',
            'fechaNacimiento' => '2019-06-30',
            'nombreMadre' => 'Rosalia Martinez',
            'nombrePadre' => 'Juan Carlos Acevedo',
            'telefonoEmergencia' => '65248754',
            'sala' => 3,
        ]);

        Infante::create([
            'nombre' => 'Estefania',
            'apellidoPaterno' => 'Roca',
            'apellidoMaterno' => 'Guzman',
            'edad' => 1,
            'sexo' => 'F',
            'fechaNacimiento' => '2021-08-30',
            'nombreMadre' => 'María Isabel Guzman Acevedo',
            'nombrePadre' => 'Juan Carlos Roca',
            'telefonoEmergencia' => '625215452',
            'sala' => 1,
        ]);

        Infante::create([
            'nombre' => 'Martin Ronaldo',
            'apellidoPaterno' => 'Rodriguez',
            'apellidoMaterno' => 'Terceros',
            'edad' => 3,
            'sexo' => 'M',
            'fechaNacimiento' => '2019-12-04',
            'nombreMadre' => 'Claudia Terceros Fernandez',
            'nombrePadre' => 'Luis Martin Rodriguez Farfan',
            'telefonoEmergencia' => '645121212',
            'sala' => 3,
        ]);

        Infante::create([
            'nombre' => 'Alejandro',
            'apellidoPaterno' => 'Mendez',
            'apellidoMaterno' => 'Mendez',
            'edad' => 4,
            'sexo' => 'M',
            'fechaNacimiento' => '2018-10-10',
            'nombreMadre' => 'Catalina Mendez Flores',
            'nombrePadre' => 'Bernardo Mendez Lopez',
            'telefonoEmergencia' => '649212123',
            'sala' => 4,
        ]);

        Infante::create([
            'nombre' => 'Emeli',
            'apellidoPaterno' => 'Barahona',
            'apellidoMaterno' => 'Telez',
            'edad' => 2,
            'sexo' => 'F',
            'fechaNacimiento' => '2020-01-30',
            'nombreMadre' => 'Ximena Andrea Telez Melgar',
            'nombrePadre' => 'Eduardo Barhona Roca',
            'telefonoEmergencia' => '648221111',
            'sala' => 2,
        ]);

        Infante::create([
            'nombre' => 'Gala Elizabeth',
            'apellidoPaterno' => 'Molina',
            'apellidoMaterno' => 'Martinez',
            'edad' => 2,
            'sexo' => 'F',
            'fechaNacimiento' => '2020-07-30',
            'nombreMadre' => 'Elizabeth Gemma Martinez',
            'nombrePadre' => 'Gael Molina Fernandez',
            'telefonoEmergencia' => '647821111',
            'sala' => 2,
        ]);

        Infante::create([
            'nombre' => 'David Jesse',
            'apellidoPaterno' => 'Blanco',
            'apellidoMaterno' => 'Fontanet',
            'edad' => 1,
            'sexo' => 'M',
            'fechaNacimiento' => '2021-05-13',
            'nombreMadre' => 'Rosalie Fontanet Cuellar',
            'nombrePadre' => 'Juan Carlos Blanco Guzman',
            'telefonoEmergencia' => '632548744',
            'sala' => 1,
        ]);

        Infante::create([
            'nombre' => 'Thomas',
            'apellidoPaterno' => 'Blanco',
            'apellidoMaterno' => 'Fontanet',
            'edad' => 2,
            'sexo' => 'M',
            'fechaNacimiento' => '2020-03-15',
            'nombreMadre' => 'Rosalie Fontanet Cuellar',
            'nombrePadre' => 'Juan Carlos Blanco Guzman',
            'telefonoEmergencia' => '632548744',
            'sala' => 2,
        ]);
    }
}
