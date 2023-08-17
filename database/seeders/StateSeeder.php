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
        $states = [
            ['name' => 'Amazonas', 'acronym' => 'AM'],
            ['name' => 'São Paulo', 'acronym' => 'SP'],
            ['name' => 'Rio de Janeiro', 'acronym' => 'RJ'],
            ['name' => 'Minas Gerais', 'acronym' => 'MG'],
            ['name' => 'Rio Grande do Sul', 'acronym' => 'RS'],
        ];

        foreach ($states as $state) {
            State::create([
                'name' => $state['name'],
                'acronym' => $state['acronym']
            ]);
        }
    }
}
