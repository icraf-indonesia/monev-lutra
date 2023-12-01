<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndikatorMakroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IndikatorMakro::create([
            'id' => 1,
            'id_strategi' => 1,
            'id_indikator' => 4,
            'target_makro' => 'Mengikuti hasil diskusi FGD sebelumnya'
        ]);
        IndikatorMakro::create([
            'id' => 2,
            'id_strategi' => 1,
            'id_indikator' => 13,
            'target_makro' => 'Mengikuti hasil diskusi FGD sebelumnya'
        ]);
        IndikatorMakro::create([
            'id' => 3,
            'id_strategi' => 1,
            'id_indikator' => 7,
            'target_makro' => 'Mengikuti hasil diskusi FGD sebelumnya'
        ]);
        IndikatorMakro::create([
            'id' => 4,
            'id_strategi' => 2,
            'id_indikator' => 23,
            'target_makro' => 'Satu penyuluh menangani 250 petani'
        ]);
        IndikatorMakro::create([
            'id' => 5,
            'id_strategi' => 2,
            'id_indikator' => 38,
            'target_makro' => 'Meningkat setiap tahun'
        ]);
        IndikatorMakro::create([
            'id' => 6,
            'id_strategi' => 2,
            'id_indikator' => 39,
            'target_makro' => '100% kelompok'
        ]);
        IndikatorMakro::create([
            'id' => 7,
            'id_strategi' => 2,
            'id_indikator' => 46,
            'target_makro' => 'Satu perda tentang pelestarian dan perlindungan komoditas kakao'
        ]);
        IndikatorMakro::create([
            'id' => 8,
            'id_strategi' => 3,
            'id_indikator' => 48,
            'target_makro' => '100%'
        ]);
        IndikatorMakro::create([
            'id' => 9,
            'id_strategi' => 3,
            'id_indikator' => 54,
            'target_makro' => 'Renstra'
        ]);
        IndikatorMakro::create([
            'id' => 10,
            'id_strategi' => 3,
            'id_indikator' => 56,
            'target_makro' => '100%'
        ]);
        IndikatorMakro::create([
            'id' => 11,
            'id_strategi' => 3,
            'id_indikator' => 58,
            'target_makro' => '60%'
        ]);
        IndikatorMakro::create([
            'id' => 12,
            'id_strategi' => 3,
            'id_indikator' => 62,
            'target_makro' => 'Semua kelompok tani'
        ]);
        IndikatorMakro::create([
            'id' => 13,
            'id_strategi' => 3,
            'id_indikator' => 64,
            'target_makro' => 'Program Traksi'
        ]);
        IndikatorMakro::create([
            'id' => 14,
            'id_strategi' => 4,
            'id_indikator' => 68,
            'target_makro' => '1 kecamatan 1 koperasi dan BUMDes dengan unit usaha kakao (untuk kecamatan produsen kakao)'
        ]);
        IndikatorMakro::create([
            'id' => 15,
            'id_strategi' => 4,
            'id_indikator' => 69,
            'target_makro' => '100%'
        ]);
        IndikatorMakro::create([
            'id' => 16,
            'id_strategi' => 4,
            'id_indikator' => 70,
            'target_makro' => '100%'
        ]);
        IndikatorMakro::create([
            'id' => 17,
            'id_strategi' => 4,
            'id_indikator' => 71,
            'target_makro' => '60%'
        ]);
        IndikatorMakro::create([
            'id' => 18,
            'id_strategi' => 5,
            'id_indikator' => 73,
            'target_makro' => '2021= 74.05
            2022= 76.74
            2023= 78.28
            2024= 78.53
            2025= 78.79
            2026= 79.04
            2042= ?'
        ]);
        IndikatorMakro::create([
            'id' => 19,
            'id_strategi' => 5,
            'id_indikator' => 79,
            'target_makro' => ''
        ])
    }
}
