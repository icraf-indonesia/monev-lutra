<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LuasAlokasiLahanKakaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('luas_alokasi_lahan_kakao')->delete();

        DB::table('luas_alokasi_lahan_kakao')->insert(array (
            0 =>
            array (
                'id' => 1,
                'kecamatan' => 'Baebunta',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            1 =>
            array (
                'id' => 2,
                'kecamatan' => 'Baebunta Selatan',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            2 =>
            array (
                'id' => 3,
                'kecamatan' => 'Bone Bone',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            3 =>
            array (
                'id' => 4,
                'kecamatan' => 'Malangke',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            4 =>
            array (
                'id' => 5,
                'kecamatan' => 'Malangke Barat',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            4 =>
            array (
                'id' => 5,
                'kecamatan' => 'Mappedeceng',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            5 =>
            array (
                'id' => 6,
                'kecamatan' => 'Masamba',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            6 =>
            array (
                'id' => 7,
                'kecamatan' => 'Rampi',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            6 =>
            array (
                'id' => 7,
                'kecamatan' => 'Rongkong',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            7 =>
            array (
                'id' => 8,
                'kecamatan' => 'Sabbang',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            8 =>
            array (
                'id' => 9,
                'kecamatan' => 'Sabbang Selatan',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            9 =>
            array (
                'id' => 10,
                'kecamatan' => 'Seko',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            10 =>
            array (
                'id' => 11,
                'kecamatan' => 'Sukamaju',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            11 =>
            array (
                'id' => 12,
                'kecamatan' => 'Sukamaju Selatan',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            12 =>
            array (
                'id' => 13,
                'kecamatan' => 'Tana Lili',
                'tahun' => '2021',
                'luas' => '3733,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            13 =>
            array (
                'id' => 14,
                'kecamatan' => 'Baebunta',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            14 =>
            array (
                'id' => 15,
                'kecamatan' => 'Baebunta Selatan',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            15 =>
            array (
                'id' => 16,
                'kecamatan' => 'Bone Bone',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            16 =>
            array (
                'id' => 17,
                'kecamatan' => 'Malangke',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            17 =>
            array (
                'id' => 18,
                'kecamatan' => 'Malangke Barat',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            18 =>
            array (
                'id' => 19,
                'kecamatan' => 'Mappedeceng',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            19 =>
            array (
                'id' => 20,
                'kecamatan' => 'Masamba',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            20 =>
            array (
                'id' => 21,
                'kecamatan' => 'Rampi',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            21 =>
            array (
                'id' => 22,
                'kecamatan' => 'Rongkong',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            22 =>
            array (
                'id' => 23,
                'kecamatan' => 'Sabbang',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            23 =>
            array (
                'id' => 24,
                'kecamatan' => 'Sabbang Selatan',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            24 =>
            array (
                'id' => 25,
                'kecamatan' => 'Seko',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            25 =>
            array (
                'id' => 26,
                'kecamatan' => 'Sukamaju',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            26 =>
            array (
                'id' => 27,
                'kecamatan' => 'Sukamaju Selatan',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            27 =>
            array (
                'id' => 28,
                'kecamatan' => 'Tana Lili',
                'tahun' => '2022',
                'luas' => '3783,33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ));
    }
}
