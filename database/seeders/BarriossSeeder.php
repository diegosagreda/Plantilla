<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class BarriossSeeder extends Seeder
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
                'codbarrio' => '1',
                'nombarrio' => 'La esperanza',
                'estbarrio' => '1',
                'comuna' => '8'
            ],
            [
                'codbarrio' => '2',
                'nombarrio' => 'Villaflor',
                'estbarrio' => '2',
                'comuna' => '3'
            ],
            [
                'codbarrio' => '3',
                'nombarrio' => 'El poblado',
                'estbarrio' => '5',
                'comuna' => '8'
            ],


        ];
        DB::table('barrios')->insert($datos);
    }
}
