<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dependency;

class DependencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=> 'Administracion'],
            ['name'=> 'Deposito'],
            ['name'=> 'Instalaciones'],
        ];

        Dependency::insert($data);
    }
}
