<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultadesSeeder extends Seeder
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
                'codfacultad' => '10',
                'nomfacultad' => 'Artes'
            ],
            [   
                'codfacultad' => '11',
                'nomfacultad' => 'Ingenieria'
            ],
            

        ];    
    }
}
