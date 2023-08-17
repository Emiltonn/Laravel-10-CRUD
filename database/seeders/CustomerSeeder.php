<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            ['cpf' => '12345678901', 'name' => 'John Doe', 'birth_date' => '1990-05-15', 'gender' => 'M'],
            ['cpf' => '98765432109', 'name' => 'Jane Smith', 'birth_date' => '1988-10-20', 'gender' => 'F'],
            ['cpf' => '45678912301', 'name' => 'Alice Johnson', 'birth_date' => '1995-02-08', 'gender' => 'F'],
            ['cpf' => '78901234506', 'name' => 'Michael Brown', 'birth_date' => '1987-12-03', 'gender' => 'M'],
            ['cpf' => '23456789015', 'name' => 'Emily Davis', 'birth_date' => '1993-09-25', 'gender' => 'F'],
            ['cpf' => '89012345602', 'name' => 'William Wilson', 'birth_date' => '1986-07-18', 'gender' => 'M'],
            ['cpf' => '56789012301', 'name' => 'Olivia Miller', 'birth_date' => '1992-04-11', 'gender' => 'F'],
            ['cpf' => '01234567809', 'name' => 'James Johnson', 'birth_date' => '1994-11-29', 'gender' => 'M'],
            ['cpf' => '67890123408', 'name' => 'Sophia Smith', 'birth_date' => '1989-08-14', 'gender' => 'F'],
            ['cpf' => '34567890106', 'name' => 'Liam Davis', 'birth_date' => '1985-06-07', 'gender' => 'M'],
            ['cpf' => '89012345603', 'name' => 'Isabella Wilson', 'birth_date' => '1997-03-02', 'gender' => 'F'],
            ['cpf' => '56789012302', 'name' => 'Mason Miller', 'birth_date' => '1984-12-25', 'gender' => 'M'],
            ['cpf' => '01234567810', 'name' => 'Ava Johnson', 'birth_date' => '1991-10-18', 'gender' => 'F'],
            ['cpf' => '67890123409', 'name' => 'Noah Smith', 'birth_date' => '1983-07-12', 'gender' => 'M'],
            ['cpf' => '34567890107', 'name' => 'Emma Davis', 'birth_date' => '1996-05-05', 'gender' => 'F'],
            ['cpf' => '89012345604', 'name' => 'Ethan Wilson', 'birth_date' => '1982-02-28', 'gender' => 'M'],
            ['cpf' => '56789012303', 'name' => 'Oliver Miller', 'birth_date' => '1998-01-21', 'gender' => 'M'],
            ['cpf' => '01234567811', 'name' => 'Sofia Johnson', 'birth_date' => '1981-09-15', 'gender' => 'F'],
            ['cpf' => '67890123410', 'name' => 'Lucas Smith', 'birth_date' => '1999-07-09', 'gender' => 'M'],
            ['cpf' => '34567890108', 'name' => 'Avery Davis', 'birth_date' => '1980-04-03', 'gender' => 'F'],
            ['cpf' => '23456789002', 'name' => 'Ella Wilson', 'birth_date' => '2000-11-26', 'gender' => 'F'],
            ['cpf' => '89012345605', 'name' => 'Liam Miller', 'birth_date' => '1979-10-09', 'gender' => 'M'],
            ['cpf' => '56789012304', 'name' => 'Aria Johnson', 'birth_date' => '2001-08-02', 'gender' => 'F'],
            ['cpf' => '01234567812', 'name' => 'Jackson Smith', 'birth_date' => '1978-06-25', 'gender' => 'M'],
            ['cpf' => '67890123411', 'name' => 'Scarlett Davis', 'birth_date' => '2002-05-18', 'gender' => 'F'],
            ['cpf' => '34567890109', 'name' => 'Grayson Wilson', 'birth_date' => '1977-03-11', 'gender' => 'M'],
            ['cpf' => '23456789003', 'name' => 'Chloe Miller', 'birth_date' => '2003-01-04', 'gender' => 'F'],
            ['cpf' => '89012345606', 'name' => 'Lucas Johnson', 'birth_date' => '1976-11-27', 'gender' => 'M'],
            ['cpf' => '56789012305', 'name' => 'Zoe Smith', 'birth_date' => '2004-10-20', 'gender' => 'F'],
            ['cpf' => '01234567813', 'name' => 'Luna Davis', 'birth_date' => '1975-09-12', 'gender' => 'F'],
            ['cpf' => '67890123412', 'name' => 'Benjamin Wilson', 'birth_date' => '2005-08-05', 'gender' => 'M'],
            ['cpf' => '34567890110', 'name' => 'Elijah Miller', 'birth_date' => '1974-06-28', 'gender' => 'M'],
        ];



        foreach ($customers as $customer) {
            Customer::create([
                'cpf' => $customer['cpf'],
                'name' => $customer['name'],
                'birth_date' => $customer['birth_date'],
                'gender' => $customer['gender'],
            ]);
        }
    }
}
