<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeComputer;

class TypeComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=> 'Notebook'],
            ['name'=> 'Pc de Escritorio'],
            ['name'=> 'Tablet'],
        ];

        TypeComputer::insert($data);

    }
}
