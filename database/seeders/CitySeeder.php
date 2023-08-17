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
            ['name' => 'São Paulo', 'acronym' => 'SP'],
            ['name' => 'Campinas', 'acronym' => 'CP'],
            ['name' => 'São José dos Campos', 'acronym' => 'SJC'],
            ['name' => 'Rio de Janeiro', 'acronym' => 'RJ'],
            ['name' => 'Niterói', 'acronym' => 'NT'],
            ['name' => 'Duque de Caxias', 'acronym' => 'DC'],
            ['name' => 'Belo Horizonte', 'acronym' => 'BH'],
            ['name' => 'Contagem', 'acronym' => 'CG'],
            ['name' => 'Uberlândia', 'acronym' => 'UB'],
            ['name' => 'Manaus', 'acronym' => 'MN'],
            ['name' => 'Itacoatiara', 'acronym' => 'IT'],
            ['name' => 'Parintins', 'acronym' => 'PR'],
            ['name' => 'Porto Alegre', 'acronym' => 'PA'],
            ['name' => 'Caxias do Sul', 'acronym' => 'CS'],
            ['name' => 'Pelotas', 'acronym' => 'PT'],
        ];

        foreach ($cities as $city) {
            City::create([
                'name' => $city['name'],
                'acronym' => $city['acronym'],
                'state_id' => State::where('acronym', $city['acronym'])->value('id')
            ]);
        }
    }
}
