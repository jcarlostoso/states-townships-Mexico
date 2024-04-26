<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        State::create([
            'id' => 1,
            ' number' => '01',
            ' name' => 'Aguascalientes'
        ]);



        State::create([
            'id' => 2,
            ' number' => '02',
            ' name' => 'Baja California'
        ]);



        State::create([
            'id' => 3,
            ' number' => '03',
            ' name' => 'Baja California Sur'
        ]);



        State::create([
            'id' => 4,
            ' number' => '04',
            ' name' => 'Campeche'
        ]);



        State::create([
            'id' => 5,
            ' number' => '05',
            ' name' => 'Coahuila de Zaragoza'
        ]);



        State::create([
            'id' => 6,
            ' number' => '06',
            ' name' => 'Colima'
        ]);



        State::create([
            'id' => 7,
            ' number' => '07',
            ' name' => 'Chiapas'
        ]);



        State::create([
            'id' => 8,
            ' number' => '08',
            ' name' => 'Chihuahua'
        ]);



        State::create([
            'id' => 9,
            ' number' => '09',
            ' name' => 'Ciudad de México'
        ]);



        State::create([
            'id' => 10,
            ' number' => '10',
            ' name' => 'Durango'
        ]);



        State::create([
            'id' => 11,
            ' number' => '11',
            ' name' => 'Guanajuato'
        ]);



        State::create([
            'id' => 12,
            ' number' => '12',
            ' name' => 'Guerrero'
        ]);



        State::create([
            'id' => 13,
            ' number' => '13',
            ' name' => 'Hidalgo'
        ]);



        State::create([
            'id' => 14,
            ' number' => '14',
            ' name' => 'Jalisco'
        ]);



        State::create([
            'id' => 15,
            ' number' => '15',
            ' name' => 'México'
        ]);



        State::create([
            'id' => 16,
            ' number' => '16',
            ' name' => 'Michoacán de Ocampo'
        ]);



        State::create([
            'id' => 17,
            ' number' => '17',
            ' name' => 'Morelos'
        ]);



        State::create([
            'id' => 18,
            ' number' => '18',
            ' name' => 'Nayarit'
        ]);



        State::create([
            'id' => 19,
            ' number' => '19',
            ' name' => 'Nuevo León'
        ]);



        State::create([
            'id' => 20,
            ' number' => '20',
            ' name' => 'Oaxaca'
        ]);



        State::create([
            'id' => 21,
            ' number' => '21',
            ' name' => 'Puebla'
        ]);



        State::create([
            'id' => 22,
            ' number' => '22',
            ' name' => 'Querétaro'
        ]);



        State::create([
            'id' => 23,
            ' number' => '23',
            ' name' => 'Quintana Roo'
        ]);



        State::create([
            'id' => 24,
            ' number' => '24',
            ' name' => 'San Luis Potosí'
        ]);



        State::create([
            'id' => 25,
            ' number' => '25',
            ' name' => 'Sinaloa'
        ]);



        State::create([
            'id' => 26,
            ' number' => '26',
            ' name' => 'Sonora'
        ]);



        State::create([
            'id' => 27,
            ' number' => '27',
            ' name' => 'Tabasco'
        ]);



        State::create([
            'id' => 28,
            ' number' => '28',
            ' name' => 'Tamaulipas'
        ]);



        State::create([
            'id' => 29,
            ' number' => '29',
            ' name' => 'Tlaxcala'
        ]);



        State::create([
            'id' => 30,
            ' number' => '30',
            ' name' => 'Veracruz de Ignacio de la Llave'
        ]);



        State::create([
            'id' => 31,
            ' number' => '31',
            ' name' => 'Yucatán'
        ]);



        State::create([
            'id' => 32,
            ' number' => '32',
            ' name' => 'Zacatecas'
        ]);
    }
}
