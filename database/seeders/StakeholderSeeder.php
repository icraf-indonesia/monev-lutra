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
            0 => array ('id' => 1, 'stakeholder' => 'Bappelitbangda'),
            1 => array ('id' => 2, 'stakeholder' => 'BPBD'),
            2 => array ('id' => 3, 'stakeholder' => 'DPMD'),
            3 => array ('id' => 4, 'stakeholder' => 'Dinas Pertanian'),
            4 => array ('id' => 5, 'stakeholder' => 'DLH'),
            5 => array ('id' => 6, 'stakeholder' => 'DP2KUKM'),
            6 => array ('id' => 7, 'stakeholder' => 'DP3AP2KB'),
            7 => array ('id' => 8, 'stakeholder' => 'DPUTRPKP2'),
            8 => array ('id' => 9, 'stakeholder' => 'KPH'),
            9 => array ('id' => 10, 'stakeholder' => 'Sekretariat'),
            10 => array ('id' => 11, 'stakeholder' => 'BPHL'),
            11 => array ('id' => 12, 'stakeholder' => 'BPN'),
            12 => array ('id' => 13, 'stakeholder' => 'Disdik'),
            13 => array ('id' => 14, 'stakeholder' => 'Diskominfo'),
            14 => array ('id' => 15, 'stakeholder' => 'Disnakertrans')
        ));

        // DB::table('stakeholders')->insert(array (
        //     0 => array ('id' => 1, 'stakeholder' => 'Badan Penetapan Kawasan Hutan (BPKH)'),
        //     1 => array ('id' => 2, 'stakeholder' => 'Dinas Pertanian'),
        //     2 => array ('id' => 3, 'stakeholder' => 'Kesatuan Pengelolaan Hutan (KPH)'),
        //     3 => array ('id' => 4, 'stakeholder' => 'Dinas Lingkungan Hidup'),
        //     4 => array ('id' => 5, 'stakeholder' => 'Badan Pertanahan Nasional (BPN), Dinas Lingkungan hidup (DLH)'),
        //     5 => array ('id' => 6, 'stakeholder' => 'Dinas Perdagangan, Perindustrian, Koperasi, dan UKM'),
        //     6 => array ('id' => 7, 'stakeholder' => 'Dinas Pemberdayaan Masyarakat dan Desa'),
        //     7 => array ('id' => 8, 'stakeholder' => 'Dinas Pertanian, BPS'),
        //     8 => array ('id' => 9, 'stakeholder' => 'Dinas Pertanian, Mars'),
        //     9 => array ('id' => 10, 'stakeholder' => 'Dinas Transmigrasi dan Tenaga Kerja, Mars'),
        //     10 => array ('id' => 11, 'stakeholder' => 'Dinas Transmigrasi dan Tenaga Kerja'),
        //     11 => array ('id' => 12, 'stakeholder' => 'Badan Perencanaan Pembangunan, Penelitian, dan Pengembangan Daerah'),
        //     12 => array ('id' => 13, 'stakeholder' => 'Dinas Komunikasi, Informatika, Statiskti, dan Persandian'),
        //     13 => array ('id' => 14, 'stakeholder' => 'Non Pemkab'),
        //     14 => array ('id' => 15, 'stakeholder' => 'Spv Kontributor')
        //     # permasalahannya adalah banyak id yang tidak punya indikator jadi banyak user yang idnya ga match dengan indikator jadi ga akan tampil
        // ));
    }
}
