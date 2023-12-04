<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonevIndikatorMakroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('monev_indikator_makros')->delete();

        DB::table('monev_indikator_makros')->insert(array (
            0 =>
            array (
                'id_strategi' => 1,
                'id_indikator' => 4
            ),
            1 =>
            array (
                'id_strategi' => 1,
                'id_indikator' => 12
            ),
            2 =>
            array (
                'id_strategi' => 1,
                'id_indikator' => 7
            ),
            3 =>
            array (
                'id_strategi' => 2,
                'id_indikator' => 22
            ),
            4 =>
            array (
                'id_strategi' => 2,
                'id_indikator' => 26
            ),
            5 =>
            array (
                'id_strategi' => 2,
                'id_indikator' => 43
            ),
            6 =>
            array (
                'id_strategi' => 2,
                'id_indikator' => 45
            ),
            7 =>
            array (
                'id_strategi' => 3,
                'id_indikator' => 51
            ),
            8 =>
            array (
                'id_strategi' => 3,
                'id_indikator' => 53
            ),
            9 =>
            array (
                'id_strategi' => 3,
                'id_indikator' => 55
            ),
            10 =>
            array (
                'id_strategi' => 3,
                'id_indikator' => 57
            ),
            11 =>
            array (
                'id_strategi' => 3,
                'id_indikator' => 61
            ),
            12 =>
            array (
                'id_strategi' => 3,
                'id_indikator' => 63
            ),
            13 =>
            array (
                'id_strategi' => 4,
                'id_indikator' => 67
            ),
            14 =>
            array (
                'id_strategi' => 4,
                'id_indikator' => 68
            ),
            15 =>
            array (
                'id_strategi' => 4,
                'id_indikator' => 69
            ),
            16 =>
            array (
                'id_strategi' => 4,
                'id_indikator' => 70
            ),
            17 =>
            array (
                'id_strategi' => 5,
                'id_indikator' => 72
            ),
            18 =>
            array (
                'id_strategi' => 5,
                'id_indikator' => 78
            )
        ));
    }
}
