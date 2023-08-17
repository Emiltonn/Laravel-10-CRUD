<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'São Paulo'],
            ['name' => 'Campinas'],
            ['name' => 'São José dos Campos'],
            ['name' => 'Rio de Janeiro'],
            ['name' => 'Niterói'],
            ['name' => 'Duque de Caxias'],
            ['name' => 'Belo Horizonte'],
            ['name' => 'Contagem'],
            ['name' => 'Uberlândia'],
            ['name' => 'Manaus'],
            ['name' => 'Itacoatiara'],
            ['name' => 'Parintins'],
            ['name' => 'Porto Alegre'],
            ['name' => 'Caxias do Sul'],
            ['name' => 'Pelotas'],
        ];

        foreach ($cities as $city) {
            City::create([
                'name' => $city['name'],
                'state_id' => State::where('acronym', $city['acronym'])->value('id')
            ]);
        }
    }
}
