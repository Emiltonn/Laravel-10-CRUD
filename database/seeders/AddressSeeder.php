<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addresses = [
            ['street' => 'Rua Alegria', 'street_number' => '123', 'zip_code' => '12345-678', 'city_id' => rand(1, 15), 'customer_id' => 1],
            ['street' => 'Avenida Esperança', 'street_number' => '456', 'zip_code' => '67890-123', 'city_id' => rand(1, 15), 'customer_id' => 2],
            ['street' => 'Travessa Paz', 'street_number' => '789', 'zip_code' => '54321-987', 'city_id' => rand(1, 15), 'customer_id' => 3],
            ['street' => 'Rua Cliente 4', 'street_number' => '4', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 4],
            ['street' => 'Rua Cliente 5', 'street_number' => '5', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 5],
            ['street' => 'Rua Cliente 6', 'street_number' => '6', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 6],
            ['street' => 'Rua Cliente 7', 'street_number' => '7', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 7],
            ['street' => 'Rua Cliente 8', 'street_number' => '8', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 8],
            ['street' => 'Rua Cliente 9', 'street_number' => '9', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 9],
            ['street' => 'Rua Cliente 10', 'street_number' => '10', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 10],
            ['street' => 'Rua Cliente 11', 'street_number' => '11', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 11],
            ['street' => 'Rua Cliente 12', 'street_number' => '12', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 12],
            ['street' => 'Rua Cliente 13', 'street_number' => '13', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 13],
            ['street' => 'Rua Cliente 14', 'street_number' => '14', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 14],
            ['street' => 'Rua Cliente 15', 'street_number' => '15', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 15],
            ['street' => 'Rua Cliente 16', 'street_number' => '16', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 16],
            ['street' => 'Rua Cliente 17', 'street_number' => '17', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 17],
            ['street' => 'Rua Cliente 18', 'street_number' => '18', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 18],
            ['street' => 'Rua Cliente 19', 'street_number' => '19', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 19],
            ['street' => 'Rua Cliente 20', 'street_number' => '20', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 20],
            ['street' => 'Rua Cliente 21', 'street_number' => '21', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 21],
            ['street' => 'Rua Cliente 22', 'street_number' => '22', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 22],
            ['street' => 'Rua Cliente 23', 'street_number' => '23', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 23],
            ['street' => 'Rua Cliente 24', 'street_number' => '24', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 24],
            ['street' => 'Rua Cliente 25', 'street_number' => '25', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 25],
            ['street' => 'Rua Cliente 26', 'street_number' => '26', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 26],
            ['street' => 'Rua Cliente 27', 'street_number' => '27', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 27],
            ['street' => 'Rua Cliente 28', 'street_number' => '28', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 28],
            ['street' => 'Rua Cliente 29', 'street_number' => '29', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 29],
            ['street' => 'Rua Cliente 30', 'street_number' => '30', 'zip_code' => '00000-000', 'city_id' => rand(1, 15), 'customer_id' => 30],
        ];


        foreach ($addresses as $address) {
            Address::create([
                'street' => $address['street'],
                'street_number' => $address['street_number'],
                'zip_code' => $address['zip_code'],
                'city_id' => $address['city_id'],
                'customer_id' => $address['customer_id'],
            ]);
        }
    }
}
