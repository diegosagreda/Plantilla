<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProgramasSeeder extends Seeder
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
                'codprograma' => '1',
                'nomprograma' => 'Ingenieria de Sistemas',
                'facultad' => '11'
            ],
            [
                'codprograma' => '2',
                'nomprograma' => 'Ingenieria Electronica',
                'facultad' => '11'
            ],
            [
                'codprograma' => '3',
                'nomprograma' => 'Ingenieria Civil',
                'facultad' => '11'
            ],


        ];
        DB::table('programas')->insert($datos);
    }
}
