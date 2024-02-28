<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kegiatans')->delete();

        DB::table('kegiatans')->insert(array (
            0 => 
            array (
                'id' => 1, 
                'id_intervensi' => 1,
                'kegiatan' => 'Membuat kajian penetapan kawasan tanaman kakao lestari',
                'lembaga' => 'Bappelitbangda',
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan'
            ),
            1 => 
            array (
                'id' => 2,
                'id_intervensi' => 1,
                'kegiatan' => 'Memetakan tutupan lahan',
                'lembaga' => 'BPHL',
                'nomenklatur' => 'Memetakan tutupan lahan',
                'indikator_kegiatan' => ''
            ),            
            2 => 
            array (
                'id' => 3, 
                'id_intervensi' => 1,
                'kegiatan' => 'Membangun payung hukum untuk peta jalan kakao lestari',
                'lembaga' => 'Bappelitbangda',
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian'
            ),           
            3 => 
            array (
                'id' => 4, 
                'id_intervensi' => 2,
                'kegiatan' => 'Memetakan kelas umur kakao',
                'lembaga' => 'Distan',
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan'
            ),            
            4 => 
            array (
                'id' => 5, 
                'id_intervensi' => 3,
                'kegiatan' => 'Perluasan memperhatikan kemiringan dan upaya intervensinya',
                'lembaga' => 'Distan',
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan'
            ),            
            5 => 
            array (
                'id' => 6,
                'id_intervensi' => 4,
                'kegiatan' => 'Memetakan luas kebun agroforestri kakao',
                'lembaga' => 'Distan',
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan'
            )
        ));
    }
}
