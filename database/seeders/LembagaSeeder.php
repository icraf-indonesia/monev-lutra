<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lembaga')->delete();

        DB::table('lembaga')->insert(array (
            0 => array ('id' => 1, 'lembaga' => 'Bapperida'),
            1 => array ('id' => 2, 'lembaga' => 'BPBD'),
            2 => array ('id' => 3, 'lembaga' => 'DPMD'),
            3 => array ('id' => 4, 'lembaga' => 'Dinas Pertanian'),
            4 => array ('id' => 5, 'lembaga' => 'DLH'),
            5 => array ('id' => 6, 'lembaga' => 'DP2KUKM'),
            6 => array ('id' => 7, 'lembaga' => 'DP3AP2KB'),
            7 => array ('id' => 8, 'lembaga' => 'DPUTRPKP2'),
            8 => array ('id' => 9, 'lembaga' => 'KPH'),
            9 => array ('id' => 10, 'lembaga' => 'Sekretariat'),
            10 => array ('id' => 11, 'lembaga' => 'BPHL'),
            11 => array ('id' => 12, 'lembaga' => 'BPN'),
            12 => array ('id' => 13, 'lembaga' => 'Disdik'),
            13 => array ('id' => 14, 'lembaga' => 'Diskominfo'),
            14 => array ('id' => 15, 'lembaga' => 'Disnakertrans')
        ));
    }
}
