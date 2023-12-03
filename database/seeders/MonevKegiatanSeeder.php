<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonevKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monev_kegiatans')->delete();

        DB::table('monev_kegiatans')->insert(array (
            0 =>
            array (
                'id' => 1,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Membuat kajian penetapan kawasan tanaman kakao lestari',
                'id_lembaga' => 1,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'target_volume' => '1',
                'target_anggaran' => '1000000'
            ),
            1 =>
            array (
                'id' => 2,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Memetakan tutupan lahan',
                'id_lembaga' => 5,
                'nomenklatur' => 'Memetakan tutupan lahan',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            2 =>
            array (
                'id' => 3,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Membangun payung hukum untuk peta jalan kakao lestari',
                'id_lembaga' => 1,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            3 =>
            array (
                'id' => 4,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Memetakan kelas umur kakao',
                'id_lembaga' => 4,
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            4 =>
            array (
                'id' => 5,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => 'Perluasan memperhatikan kemiringan dan upaya intervensinya',
                'id_lembaga' => 4,
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            5 =>
            array (
                'id' => 6,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Memetakan luas kebun agroforestri kakao',
                'id_lembaga' => 4,
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'target_volume' => '',
                'target_anggaran' => ''
            )
        ));
    }
}
