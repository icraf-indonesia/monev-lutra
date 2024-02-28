<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StakeholderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stakeholders')->delete();

        DB::table('stakeholders')->insert(array (
            0 => array ('id' => 1, 'stakeholder' => 'Bapperida'),
            1 => array ('id' => 2, 'stakeholder' => 'BPBD'),
            2 => array ('id' => 3, 'stakeholder' => 'DPMD'),
            3 => array ('id' => 4, 'stakeholder' => 'Dinas Pertanian'),
            4 => array ('id' => 5, 'stakeholder' => 'DLH'),
            5 => array ('id' => 6, 'stakeholder' => 'DP2KUKM'),
            6 => array ('id' => 7, 'stakeholder' => 'DP3AP2KB'),
            7 => array ('id' => 8, 'stakeholder' => 'DPUTRPKP2'),
            8 => array ('id' => 9, 'stakeholder' => 'KPH'),
            9 => array ('id' => 10, 'stakeholder' => 'Sekretariat'),
            # Dinsos, BPHL, BPN, Disik, Diskominfo, Disnakertrans
            10 => array ('id' => 11, 'stakeholder' => 'Kontributor kegiatan'),
            11 => array ('id' => 12, 'stakeholder' => 'Non PEMDA'),
            12 => array ('id' => 13, 'stakeholder' => 'Supervisor')
        ));
    }
}
