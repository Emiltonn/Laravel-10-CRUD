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
            ['name' => 'São Paulo', 'state_acronym' => 'SP'],
            ['name' => 'Campinas', 'state_acronym' => 'SP'],
            ['name' => 'São José dos Campos', 'state_acronym' => 'SP'],
            ['name' => 'Rio de Janeiro', 'state_acronym' => 'RJ'],
            ['name' => 'Niterói', 'state_acronym' => 'RJ'],
            ['name' => 'Duque de Caxias', 'state_acronym' => 'RJ'],
            ['name' => 'Belo Horizonte', 'state_acronym' => 'MG'],
            ['name' => 'Contagem', 'state_acronym' => 'MG'],
            ['name' => 'Uberlândia', 'state_acronym' => 'MG'],
            ['name' => 'Manaus', 'state_acronym' => 'AM'],
            ['name' => 'Itacoatiara', 'state_acronym' => 'AM'],
            ['name' => 'Parintins', 'state_acronym' => 'AM'],
            ['name' => 'Porto Alegre', 'state_acronym' => 'RS'],
            ['name' => 'Caxias do Sul', 'state_acronym' => 'RS'],
            ['name' => 'Pelotas', 'state_acronym' => 'RS'],
        ];

        foreach ($cities as $city) {
            City::create([
                'name' => $city['name'],
                'state_id' => State::where('acronym', $city['state_acronym'])->value('id')
            ]);
        }
    }
}
