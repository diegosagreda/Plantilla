<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'codciudad' => '1',
                'nomciudad' => 'Medellin',
                'departamento' => '1'
            ],
            [
                'codciudad' => '2',
                'nomciudad' => 'Envigado',
                'departamento' => '1'
            ],
            [
                'codciudad' => '3',
                'nomciudad' => 'Rio Negro',
                'departamento' => '1'
            ],
            [
                'codciudad' => '4',
                'nomciudad' => 'Itagui',
                'departamento' => '1'
            ],
        ];
        DB::table('ciudades')->insert($datos);
    }
}
