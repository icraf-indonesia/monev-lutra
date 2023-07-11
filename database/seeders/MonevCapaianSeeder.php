<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonevCapaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monev_capaians')->delete();

        DB::table('monev_capaians')->insert(array (
            0 =>
            array (
                'id' => 1,
                'tahun' => '2021',
                'id_indikator' => 1,
                'parameter_pengukuran' => 'Luas kawasan hutan',
                'capaian' => '542715,72'
            ),
            1 =>
            array (
                'id' => 2,
                'tahun' => '2021',
                'id_indikator' => 2,
                'parameter_pengukuran' => 'Luas tutupan hutan',
                'capaian' => '526722,41'
            ),
            2 =>
            array (
                'id' => 3,
                'tahun' => '2021',
                'id_indikator' => 3,
                'parameter_pengukuran' => 'Luas alokasi lahan untuk tanaman kakao',
                'capaian' => '56000'
            ),
            3 =>
            array (
                'id' => 4,
                'tahun' => '2021',
                'id_indikator' => 4,
                'parameter_pengukuran' => 'Luas kakao yang sesuai dengan alokasi lahan',
                'capaian' => '37120,68'
            ),
            4 =>
            array (
                'id' => 5,
                'tahun' => '2021',
                'id_indikator' => 5,
                'parameter_pengukuran' => 'Luas perhutanan sosial',
                'capaian' => '113108,75'
            ),
            5 =>
            array (
                'id' => 6,
                'tahun' => '2021',
                'id_indikator' => 6,
                'parameter_pengukuran' => 'Luas kakao yang berada pada area perhutanan sosial',
                'capaian' => '18260,88'
            ),
            6 =>
            array (
                'id' => 7,
                'tahun' => '2021',
                'id_indikator' => 7,
                'parameter_pengukuran' => 'Luas kakao umur produktif',
                'capaian' => '17860'
            ),
            7 =>
            array (
                'id' => 8,
                'tahun' => '2021',
                'id_indikator' => 8,
                'parameter_pengukuran' => 'Luas indikatif lahan peremajaan kakao (untuk tanaman tua dan rusak)',
                'capaian' => '20140'
            ),
            8 =>
            array (
                'id' => 9,
                'tahun' => '2021',
                'id_indikator' => 9,
                'parameter_pengukuran' => 'Jumlah anggaran peremajaan kakao',
                'capaian' => '20775020000'
            ),
            9 =>
            array (
                'id' => 10,
                'tahun' => '2021',
                'id_indikator' => 10,
                'parameter_pengukuran' => 'Jumlah pendampingan yang diberikan kepada petani untuk peningkatan efektivitas peremajaan kakao',
                'capaian' => '6'
            ),
            10 =>
            array (
                'id' => 11,
                'tahun' => '2021',
                'id_indikator' => 11,
                'parameter_pengukuran' => 'Luas penanaman kakao pada area baru dengan kemiringan di atas 25% dengan tingkat kesesuaian lahan S1-S3',
                'capaian' => '17000'
            ),
            11 =>
            array (
                'id' => 12,
                'tahun' => '2021',
                'id_indikator' => 12,
                'parameter_pengukuran' => 'Luas lahan kakao yang dikonversi dari lahan tidak produktif (semak belukar, lahan terbuka, padang rumput)',
                'capaian' => '11000'
            ),
            12 =>
            array (
                'id' => 13,
                'tahun' => '2021',
                'id_indikator' => 13,
                'parameter_pengukuran' => 'Luas agroforestri kakao',
                'capaian' => '28885,52'
            ),
            13 =>
            array (
                'id' => 14,
                'tahun' => '2021',
                'id_indikator' => 14,
                'parameter_pengukuran' => 'Luas pertambahan tutupan lahan agroforestri kakao',
                'capaian' => '1720'
            ),
            14 =>
            array (
                'id' => 15,
                'tahun' => '2021',
                'id_indikator' => 15,
                'parameter_pengukuran' => 'Luas lahan tanaman pangan dengan agroforestri kakao',
                'capaian' => '1420'
            ),
            15 =>
            array (
                'id' => 16,
                'tahun' => '2021',
                'id_indikator' => 16,
                'parameter_pengukuran' => 'Jumlah sertifikasi lahan yang diberikan',
                'capaian' => '125'
            ),
            16 =>
            array (
                'id' => 17,
                'tahun' => '2021',
                'id_indikator' => 17,
                'parameter_pengukuran' => 'Luas lahan kakao yang memperoleh sertifikat',
                'capaian' => '11000'
            ),
            17 =>
            array (
                'id' => 18,
                'tahun' => '2021',
                'id_indikator' => 18,
                'parameter_pengukuran' => 'Jumlah penyuluhan dan pendampingan sertifikasi lahan',
                'capaian' => '9'
              ),
            18 =>
            array (
                'id' => 19,
                'tahun' => '2021',
                'id_indikator' => 19,
                'parameter_pengukuran' => 'Jumlah perhutanan sosial berbasis kakao',
                'capaian' => '2'
              ),
            19 =>
            array (
                'id' => 20,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Hutan Desa (HD)',
                'capaian' => '1'
              ),
            20 =>
            array (
                'id' => 21,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Hutan Kemasyarakatan (HKm)',
                'capaian' => '1'
              ),
            21 =>
            array (
                'id' => 22,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Hutan Tanaman Rakyat (HTR)',
                'capaian' => '0'
              ),
            22 =>
            array (
                'id' => 23,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Hutan Adat (HA)',
                'capaian' => '0'
              ),
            23 =>
            array (
                'id' => 24,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Kemitraan Kehutanan (KK)',
                'capaian' => '0'
              ),
            24 =>
            array (
                'id' => 25,
                'tahun' => '2021',
                'id_indikator' => 20,
                'parameter_pengukuran' => 'Jumlah kemitraan perhutanan sosial yang terjalin ',
                'capaian' => '2'
              ),
            25 =>
            array (
                'id' => 26,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah Kelompok Usaha Perhutanan Sosial (KUPS)',
                'capaian' => '3'
              ),
            26 =>
            array (
                'id' => 27,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah pendampingan kelembagaan perhutanan sosial',
                'capaian' => '5'
              ),
              27 =>
            array (
                'id' => 28,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Penyiapan data persetujuan PS',
                'capaian' => '2'
              ),
              28 =>
            array (
                'id' => 29,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Pengajuan persetujuan PS',
                'capaian' => '2'
              ),
              29 =>
            array (
                'id' => 30,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Pendampingan kelembagaan',
                'capaian' => '1'
              ),
              30 =>
            array (
                'id' => 31,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Pengembangan model bisnis',
                'capaian' => '0'
              ),
              31 =>
            array (
                'id' => 32,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Lainnya',
                'capaian' => '0'
              ),
              32 =>
            array (
                'id' => 33,
                'tahun' => '2021',
                'id_indikator' => 23,
                'parameter_pengukuran' => 'Jumlah penyuluh berkompetensi',
                'capaian' => '10'
              ),
              33 =>
            array (
                'id' => 34,
                'tahun' => '2021',
                'id_indikator' => 24,
                'parameter_pengukuran' => 'Rasio penyuluh dan jumlah petani ',
                'capaian' => '0,1'
              ),
              34 =>
            array (
                'id' => 35,
                'tahun' => '2021',
                'id_indikator' => 25,
                'parameter_pengukuran' => 'Jumlah kegiatan penyuluhan dalam satu tahun',
                'capaian' => '5'
              ),
              35 =>
            array (
                'id' => 36,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Pemilihan bibit dan pembibitan',
                'capaian' => '1'
              ),
              36 =>
            array (
                'id' => 37,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Penanaman dan pemeliharaan tanaman',
                'capaian' => '1'
              ),
              37 =>
            array (
                'id' => 38,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Pemanenan',
                'capaian' => '0'
              ),
              38 =>
            array (
                'id' => 39,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Penanganan hama dan OPT',
                'capaian' => '2'
              ),
              39 =>
            array (
                'id' => 40,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Pasca panen',
                'capaian' => '0'
              ),
              40 =>
            array (
                'id' => 41,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Bisnis, pemasaran, dan keuangan',
                'capaian' => '1'
              ),
              41 =>
            array (
                'id' => 42,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Lainnya',
                'capaian' => '0'
              ),
              42 =>
            array (
                'id' => 43,
                'tahun' => '2021',
                'id_indikator' => 26,
                'parameter_pengukuran' => 'Jumlah pelatihan bagi tenaga penyuluh',
                'capaian' => '1'
              ),
              43 =>
            array (
                'id' => 44,
                'tahun' => '2021',
                'id_indikator' => 27,
                'parameter_pengukuran' => 'Jumlah petani yang mengikuti kegiatan penyuluhan ',
                'capaian' => '100'
              ),
              44 =>
            array (
                'id' => 45,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah petani laki-laki',
                'capaian' => '90'
              ),
              45 =>
            array (
                'id' => 46,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah petani perempuan',
                'capaian' => '10'
              ),
              46 =>
            array (
                'id' => 47,
                'tahun' => '2021',
                'id_indikator' => 28,
                'parameter_pengukuran' => 'Indeks Nilai Tukar Petani (NTP)',
                'capaian' => '101,12'
              ),
              47 =>
            array (
                'id' => 48,
                'tahun' => '2021',
                'id_indikator' => 29,
                'parameter_pengukuran' => 'Jumlah koperasi dengan unit usaha berbasis kakao',
                'capaian' => '4'
              ),
              48 =>
            array (
                'id' => 49,
                'tahun' => '2021',
                'id_indikator' => 30,
                'parameter_pengukuran' => 'Jumlah BUMDes dengan unit usaha berbasis kakao',
                'capaian' => '2'
              ),
              49 =>
            array (
                'id' => 50,
                'tahun' => '2021',
                'id_indikator' => 31,
                'parameter_pengukuran' => 'Jumlah pemodalan yang diperoleh petani',
                'capaian' => '75000000'
              ),
              50 =>
            array (
                'id' => 51,
                'tahun' => '2021',
                'id_indikator' => 32,
                'parameter_pengukuran' => 'Jumlah pendampingan peningkatan kapasitas kelembagaan kakao',
                'capaian' => '2'
              ),
              51 =>
            array (
                'id' => 52,
                'tahun' => '2021',
                'id_indikator' => 33,
                'parameter_pengukuran' => 'Jumlah kemitraan/kerja sama lembaga keuangan petani dengan sektor swasta/LSM/bank',
                'capaian' => '3'
              ),
              52 =>
            array (
                'id' => 53,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Perusahaan',
                'capaian' => '2'
              ),
              53 =>
            array (
                'id' => 54,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'LSM',
                'capaian' => '0'
              ),
              54 =>
            array (
                'id' => 55,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Bank',
                'capaian' => '1'
              ),
              55 =>
            array (
                'id' => 56,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Lembaga keuangan non bank',
                'capaian' => '0'
              ),
              56 =>
            array (
                'id' => 57,
                'tahun' => '2021',
                'id_indikator' => 34,
                'parameter_pengukuran' => 'Jumlah korporasi petani kakao',
                'capaian' => '1'
              ),
              57 =>
            array (
                'id' => 58,
                'tahun' => '2021',
                'id_indikator' => 35,
                'parameter_pengukuran' => 'Jumlah petani yang tergabung dalam korporasi petani',
                'capaian' => '0'
              ),
              58 =>
            array (
                'id' => 59,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah petani laki-laki',
                'capaian' => '0'
              ),
              59 =>
            array (
                'id' => 60,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah petani perempuan',
                'capaian' => '0'
              ),
              60 =>
            array (
                'id' => 61,
                'tahun' => '2021',
                'id_indikator' => 36,
                'parameter_pengukuran' => 'Luas lahan yang dikelola',
                'capaian' => '0'
              ),
              61 =>
            array (
                'id' => 62,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Pendapatan petani kakao',
                'capaian' => '54000000'
              ),
              62 =>
            array (
                'id' => 63,
                'tahun' => '2021',
                'id_indikator' => 38,
                'parameter_pengukuran' => 'Jumlah pendampingan peningkatan kapasitas korporasi petani',
                'capaian' => '0'
              ),
              63 =>
            array (
                'id' => 64,
                'tahun' => '2021',
                'id_indikator' => 39,
                'parameter_pengukuran' => 'Jumlah peralatan pertanian yang terdistribusi dan sesuai dengan kebutuhan petani',
                'capaian' => '5'
              ),
              64 =>
            array (
                'id' => 65,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Bantuan input pertanian',
                'capaian' => '4'
              ),
              65 =>
            array (
                'id' => 66,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Bantuan pengelolaan pasca panen',
                'capaian' => '1'
              ),
              66 =>
            array (
                'id' => 67,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Lainnya',
                'capaian' => '0'
              ),
              67 =>
            array (
                'id' => 68,
                'tahun' => '2021',
                'id_indikator' => 40,
                'parameter_pengukuran' => 'Jumlah kelompok tani yang mendapatkan bantuan peralatan pertanian',
                'capaian' => '5'
              ),
              68 =>
            array (
                'id' => 69,
                'tahun' => '2021',
                'id_indikator' => 41,
                'parameter_pengukuran' => 'Indeks Nilai Tukar Petani (NTP)',
                'capaian' => '101,12'
              ),
              69 =>
            array (
                'id' => 70,
                'tahun' => '2021',
                'id_indikator' => 42,
                'parameter_pengukuran' => 'Jumlah kelompok perempuan tani kakao produktif',
                'capaian' => '3'
              ),
              70 =>
            array (
                'id' => 71,
                'tahun' => '2021',
                'id_indikator' => 43,
                'parameter_pengukuran' => 'Jumlah petani perempuan yang mengikuti penyuluhan pertanian, termasuk usaha tani',
                'capaian' => '15'
              ),
              71 =>
            array (
                'id' => 72,
                'tahun' => '2021',
                'id_indikator' => 44,
                'parameter_pengukuran' => 'Jumlah petani perempuan yang mengikuti penyuluhan non pertanian',
                'capaian' => '42'
              ),
              72 =>
            array (
                'id' => 73,
                'tahun' => '2021',
                'id_indikator' => 45,
                'parameter_pengukuran' => 'Jumlah unit usaha pengolahan kakao yang dikelola oleh kelompok perempuan',
                'capaian' => '3'
              ),
              73 =>
            array (
                'id' => 74,
                'tahun' => '2021',
                'id_indikator' => 46,
                'parameter_pengukuran' => 'Jumlah kelompok tani perempuan yang mendapatkan bantuan peralatan pertanian',
                'capaian' => '1'
              ),
              74 =>
            array (
                'id' => 75,
                'tahun' => '2021',
                'id_indikator' => 47,
                'parameter_pengukuran' => 'Bantuan permodalan bagi unit usaha yang dikelola kelompok perempuan',
                'capaian' => '15000000'
              ),
              75 =>
            array (
                'id' => 76,
                'tahun' => '2021',
                'id_indikator' => 48,
                'parameter_pengukuran' => 'Jumlah pelatihan K3 kepada petani',
                'capaian' => '2'
              ),
              76 =>
            array (
                'id' => 77,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Pemerintah',
                'capaian' => '0'
              ),
              77 =>
            array (
                'id' => 78,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Perusahaan',
                'capaian' => '2'
              ),
              78 =>
            array (
                'id' => 79,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'LSM',
                'capaian' => '0'
              ),
              79 =>
            array (
                'id' => 80,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Lainnya',
                'capaian' => '0'
              ),
              80 =>
            array (
                'id' => 81,
                'tahun' => '2021',
                'id_indikator' => 49,
                'parameter_pengukuran' => 'Jumlah petani yang memiliki alat keselamatan kerja',
                'capaian' => '0'
              ),
              81 =>
            array (
                'id' => 82,
                'tahun' => '2021',
                'id_indikator' => 50,
                'parameter_pengukuran' => 'Jumlah keluarga petani yang mendapat edukasi perlindungan anak',
                'capaian' => '26'
              ),
              82 =>
            array (
                'id' => 83,
                'tahun' => '2021',
                'id_indikator' => 51,
                'parameter_pengukuran' => 'SOP pencegahan dan pengawasan di tingkat komunitas',
                'capaian' => '1'
              ),
              83 =>
            array (
                'id' => 84,
                'tahun' => '2021',
                'id_indikator' => 52,
                'parameter_pengukuran' => 'Keberadaan regulasi/produk hukum yang mendukung pengembangan kakao lestari ',
                'capaian' => '1'
              ),
              84 =>
            array (
                'id' => 85,
                'tahun' => '2021',
                'id_indikator' => 53,
                'parameter_pengukuran' => 'Keberadaan sistem monitoring dan evaluasi kakao lestari',
                'capaian' => '1'
              ),
              85 =>
            array (
                'id' => 86,
                'tahun' => '2021',
                'id_indikator' => 54,
                'parameter_pengukuran' => 'Jumlah kegiatan konsultasi dan sosialisasi kebijakan kepada kelompok tani dan kelompok tani perempuan',
                'capaian' => '0'
              ),
              86 =>
            array (
                'id' => 87,
                'tahun' => '2021',
                'id_indikator' => 55,
                'parameter_pengukuran' => 'Integrasi kebijakan kakao lestari dalam Master Plan dan RPJMD/Des (terutama desa yanag memiliki komoditas strategis kakao)',
                'capaian' => '3'
              ),
              87 =>
            array (
                'id' => 88,
                'tahun' => '2021',
                'id_indikator' => 56,
                'parameter_pengukuran' => 'Volume pembiayaan dana desa bagi pengelolaan kakao lestari',
                'capaian' => '3,5'
              ),
              88 =>
            array (
                'id' => 89,
                'tahun' => '2021',
                'id_indikator' => 57,
                'parameter_pengukuran' => 'Jumlah petani kakao yang menerima program asuransi pertanian',
                'capaian' => '0'
              ),
              89 =>
            array (
                'id' => 90,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah petani perempuan',
                'capaian' => '0'
              ),
              90 =>
            array (
                'id' => 91,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah petani laki-laki',
                'capaian' => '0'
              ),
              91 =>
            array (
                'id' => 92,
                'tahun' => '2021',
                'id_indikator' => 58,
                'parameter_pengukuran' => 'Perjanjian kerja sama dengan lembaga asuransi',
                'capaian' => '0'
              ),
              92 =>
            array (
                'id' => 93,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah program pemerintah terkait',
                'capaian' => '0'
              ),
              93 =>
            array (
                'id' => 94,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Deskripsi program',
                'capaian' => '0'
              ),
              94 =>
            array (
                'id' => 95,
                'tahun' => '2021',
                'id_indikator' => 60,
                'parameter_pengukuran' => 'Jumlah kebun induk kakao dan penangkar bibit kakao bersertifikat',
                'capaian' => '5'
              ),
              95 =>
            array (
                'id' => 96,
                'tahun' => '2021',
                'id_indikator' => 61,
                'parameter_pengukuran' => 'Jumlah jenis tanaman kakao',
                'capaian' => '3'
              ),
              96 =>
            array (
                'id' => 97,
                'tahun' => '2021',
                'id_indikator' => 62,
                'parameter_pengukuran' => 'Jumlah petani yang menggunakan bahan tanam resisten',
                'capaian' => '158'
              ),
              97 =>
            array (
                'id' => 98,
                'tahun' => '2021',
                'id_indikator' => 63,
                'parameter_pengukuran' => 'Jumlah petani yang menggunakan benih/bibit kakao unggul (bersertifikat)',
                'capaian' => '304'
              ),
              98 =>
            array (
                'id' => 99,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah petani perempuan',
                'capaian' => '250'
              ),
              99 =>
            array (
                'id' => 100,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah petani laki-laki',
                'capaian' => '54'
              ),
              100 =>
            array (
                'id' => 101,
                'tahun' => '2021',
                'id_indikator' => 64,
                'parameter_pengukuran' => 'Produksi kakao',
                'capaian' => '30856,05'
              ),
              101 =>
            array (
                'id' => 102,
                'tahun' => '2021',
                'id_indikator' => 65,
                'parameter_pengukuran' => 'Produktivitas kakao',
                'capaian' => '0,756'
              ),
              102 =>
            array (
                'id' => 103,
                'tahun' => '2021',
                'id_indikator' => 66,
                'parameter_pengukuran' => 'Jumlah produsen pupuk organik',
                'capaian' => '3'
              ),
              103 =>
            array (
                'id' => 104,
                'tahun' => '2021',
                'id_indikator' => 67,
                'parameter_pengukuran' => 'Jumlah petani yang menggunakan pupuk organik dan penggunaan kapur pertanian',
                'capaian' => '78'
              ),
              104 =>
            array (
                'id' => 105,
                'tahun' => '2021',
                'id_indikator' => 68,
                'parameter_pengukuran' => 'Jumlah petani yang menerapkan teknik konservasi tanah ',
                'capaian' => '120'
              ),
              105 =>
            array (
                'id' => 106,
                'tahun' => '2021',
                'id_indikator' => 69,
                'parameter_pengukuran' => 'Jumlah petani yang mengelola agroforestri kakao',
                'capaian' => '128'
              ),
              106 =>
            array (
                'id' => 107,
                'tahun' => '2021',
                'id_indikator' => 70,
                'parameter_pengukuran' => 'Jumlah petani yang mendapatkan pelatihan agroforestri kakao',
                'capaian' => '250'
              ),
              107 =>
            array (
                'id' => 108,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah petani perempuan',
                'capaian' => '150'
              ),
              108 =>
            array (
                'id' => 109,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah petani laki-laki',
                'capaian' => '100'
              ),
              109 =>
            array (
                'id' => 110,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah pelatihan agroforestri kakao',
                'capaian' => '12'
              ),
              110 =>
            array (
                'id' => 111,
                'tahun' => '2021',
                'id_indikator' => 71,
                'parameter_pengukuran' => 'Jumlah kios pupuk bersubsidi untuk kakao',
                'capaian' => '5'
              ),
              111 =>
            array (
                'id' => 112,
                'tahun' => '2021',
                'id_indikator' => 72,
                'parameter_pengukuran' => 'Adanya sistem informasi tanaman kakao (termasuk pupuk) bagi petani',
                'capaian' => '1'
              ),
              112 =>
            array (
                'id' => 113,
                'tahun' => '2021',
                'id_indikator' => 73,
                'parameter_pengukuran' => 'Jumlah petani dengan pembibitan mandiri',
                'capaian' => '245'
              ),
              113 =>
            array (
                'id' => 114,
                'tahun' => '2021',
                'id_indikator' => 74,
                'parameter_pengukuran' => 'Jumlah pelatihan dan peningkatan kapasitas petani dalam peningkatan mutu dan pasca panen',
                'capaian' => '4'
              ),
              114 =>
            array (
                'id' => 115,
                'tahun' => '2021',
                'id_indikator' => 75,
                'parameter_pengukuran' => 'Jumlah petani yang dilatih untuk peningkatan mutu dan pasca panen',
                'capaian' => '41'
              ),
              115 =>
            array (
                'id' => 116,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => '-',
                'capaian' => '22'
              ),
              116 =>
            array (
                'id' => 117,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah petani laki-laki',
                'capaian' => '19'
              ),
              117 =>
            array (
                'id' => 118,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah petani perempuan',
                'capaian' => '0'
              ),
              118 =>
            array (
                'id' => 119,
                'tahun' => '2021',
                'id_indikator' => 76,
                'parameter_pengukuran' => 'Nilai tambah bruto bisnis industri hilir skala kecil',
                'capaian' => '7000'
              ),
              119 =>
            array (
                'id' => 120,
                'tahun' => '2021',
                'id_indikator' => 77,
                'parameter_pengukuran' => 'Volume produksi kakao fermentasi',
                'capaian' => '8500'
              ),
              120 =>
            array (
                'id' => 121,
                'tahun' => '2021',
                'id_indikator' => 78,
                'parameter_pengukuran' => 'Jumlah unit usaha produk kakao yang dikelola petani laki-laki dan perempuan',
                'capaian' => '11'
              ),
              121 =>
            array (
                'id' => 122,
                'tahun' => '2021',
                'id_indikator' => 79,
                'parameter_pengukuran' => 'Jumlah jenis produk kakao yang dihasilkan kelompok petani/masyarakat',
                'capaian' => '7'
              ),
              122 =>
            array (
                'id' => 123,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jenis produk',
                'capaian' => '0'
              ),
              123 =>
            array (
                'id' => 124,
                'tahun' => '2021',
                'id_indikator' => 80,
                'parameter_pengukuran' => 'Jumlah pelaku UKM berbasis kakao',
                'capaian' => '76'
              ),
              124 =>
            array (
                'id' => 125,
                'tahun' => '2021',
                'id_indikator' => 81,
                'parameter_pengukuran' => 'Jumlah perjanjian kerja sama',
                'capaian' => '3'
              ),
              125 =>
            array (
                'id' => 126,
                'tahun' => '2021',
                'id_indikator' => 82,
                'parameter_pengukuran' => 'Kuantitas biji Kelas Mutu I',
                'capaian' => '10285,35'
              ),
              126 =>
            array (
                'id' => 127,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Kuantitas biji Kelas Mutu II',
                'capaian' => '10285,35'
              ),
              127 =>
            array (
                'id' => 128,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Kuantitas biji Kelas Mutu III',
                'capaian' => '10285,35'
              ),
              128 =>
            array (
                'id' => 129,
                'tahun' => '2021',
                'id_indikator' => 83,
                'parameter_pengukuran' => 'Keuntungan petani kakao',
                'capaian' => '50000'
              ),
              129 =>
            array (
                'id' => 130,
                'tahun' => '2021',
                'id_indikator' => 84,
                'parameter_pengukuran' => '-',
                'capaian' => '17'
              ),
              130 =>
            array (
                'id' => 131,
                'tahun' => '2021',
                'id_indikator' => 85,
                'parameter_pengukuran' => '-',
                'capaian' => '6'
              ),
              131 =>
            array (
                'id' => 132,
                'tahun' => '2021',
                'id_indikator' => 86,
                'parameter_pengukuran' => 'Jumlah petani yang melakukan pengarsipan dan pencatatan usaha tani',
                'capaian' => '100'
              ),
              132 =>
            array (
                'id' => 133,
                'tahun' => '2021',
                'id_indikator' => 87,
                'parameter_pengukuran' => 'Keberadaan perangkat lunak pelacakan yang open access',
                'capaian' => '1'
              ),
              133 =>
            array (
                'id' => 134,
                'tahun' => '2021',
                'id_indikator' => 88,
                'parameter_pengukuran' => 'Sistem informasi geografis komoditas kakao Luwu Utara',
                'capaian' => '1'
              ),
              134 =>
            array (
                'id' => 135,
                'tahun' => '2021',
                'id_indikator' => 89,
                'parameter_pengukuran' => 'Jumlah petani yang memiliki informasi koordinat',
                'capaian' => '196'
              ),
              135 =>
            array (
                'id' => 136,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Luas kebun dengan informasi koordinat',
                'capaian' => '392'
              ),
              136 =>
            array (
                'id' => 137,
                'tahun' => '2021',
                'id_indikator' => 90,
                'parameter_pengukuran' => 'Jumlah petani yang memiliki sertifikasi komoditas kakao berkelanjutan',
                'capaian' => '0'
              ),
              137 =>
            array (
                'id' => 138,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Luas lahan tersertifikasi',
                'capaian' => '0'
              ),
              138 =>
            array (
                'id' => 139,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jenis sertifikasi ',
                'capaian' => '0'
              ),
              139 =>
            array (
                'id' => 140,
                'tahun' => '2021',
                'id_indikator' => 91,
                'parameter_pengukuran' => 'Rata-rata keuntungan petani dengan sertifikasi',
                'capaian' => '50000'
              ),
              140 =>
            array (
                'id' => 141,
                'tahun' => '2021',
                'id_indikator' => 92,
                'parameter_pengukuran' => 'Laju erosi',
                'capaian' => '0,5'
              ),
              141 =>
            array (
                'id' => 142,
                'tahun' => '2021',
                'id_indikator' => 93,
                'parameter_pengukuran' => 'Debit air sungai',
                'capaian' => '100'
              ),
              142 =>
            array (
                'id' => 143,
                'tahun' => '2021',
                'id_indikator' => 94,
                'parameter_pengukuran' => 'Emisi GRK lahan pertanian dan kehutanan ',
                'capaian' => '817607,34'
              ),
              143 =>
            array (
                'id' => 144,
                'tahun' => '2021',
                'id_indikator' => 95,
                'parameter_pengukuran' => 'Luas lahan dengan kontrak JLH',
                'capaian' => '0'
              ),
              144 =>
            array (
                'id' => 145,
                'tahun' => '2021',
                'id_indikator' => 96,
                'parameter_pengukuran' => 'Volume pembiayaan pemerintah untuk mendukung biaya TAKE dan biaya transfer KIJLH',
                'capaian' => '40000000'
              ),
              145 =>
            array (
                'id' => 146,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Alokasi dana TAKE',
                'capaian' => '40000000'
              ),
              146 =>
            array (
                'id' => 147,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Alokasi dana kompensasi jasa lingkungan',
                'capaian' => '0'
              ),
              147 =>
            array (
                'id' => 148,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Jumlah program pengelolaan jasa lingkungan',
                'capaian' => '2'
              ),
              148 =>
            array (
                'id' => 149,
                'tahun' => '2021',
                'id_indikator' => 98,
                'parameter_pengukuran' => 'Jumlah petani peserta PJLH',
                'capaian' => '0'
              ),
              149 =>
            array (
                'id' => 150,
                'tahun' => '2021',
                'id_indikator' => 99,
                'parameter_pengukuran' => 'Luas tutupan lahan kakao agroforestri yang mengikuti PJLH',
                'capaian' => '29852'
              ),
              150 =>
            array (
                'id' => 151,
                'tahun' => '2021',
                'id_indikator' => 100,
                'parameter_pengukuran' => 'Jumlah perusahaan mitra PJLH',
                'capaian' => '0'
              ),
              151 =>
            array (
                'id' => 152,
                'tahun' => '2021',
                'id_indikator' => 101,
                'parameter_pengukuran' => 'Jumlah skema PJLH yang operasional',
                'capaian' => '0'
              ),
              152 =>
            array (
                'id' => 153,
                'tahun' => '2021',
                'id_indikator' => 102,
                'parameter_pengukuran' => 'Jumlah produk kakao Luwu Utara yang memperoleh label ramah lingkungan hidup',
                'capaian' => '0'
              ),
              153 =>
            array (
                'id' => 154,
                'tahun' => '2021',
                'id_indikator' => 103,
                'parameter_pengukuran' => 'Volume dana penanggulangan, pencemaran dan/atau kerusakan dan pemulihan lingkungan hidup',
                'capaian' => '12000000'
              ),
              154 =>
            array (
                'id' => 155,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Sumber pendanaan',
                'capaian' => '0'
              ),
              155 =>
            array (
                'id' => 156,
                'tahun' => '2021',
                'id_indikator' => 104,
                'parameter_pengukuran' => 'Jumlah perusahaan, kelompok masyarakat, maupun perorangan yang mendapat penghargaan kinerja di bidang perlindungan lingkungan',
                'capaian' => '0'
              ),
              156 =>
            array (
                'id' => 157,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Perusahaan',
                'capaian' => '0'
              ),
              157 =>
            array (
                'id' => 158,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Kelompok masyarakat',
                'capaian' => '0'
              ),
              158 =>
            array (
                'id' => 159,
                'tahun' => '2021',
                'id_indikator' => 0,
                'parameter_pengukuran' => 'Perorangan',
                'capaian' => '0'
              )
        ));
    }
}
