<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Disk;

class DiskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=> 'Disco 1', 'nro_serie' => '123456789', 'description'=>''],
            ['name'=> 'Disco 2', 'nro_serie' => '987654321', 'description'=>'Capacidad 1Tb'],
        ];

        Disk::insert($data);
    }
}
