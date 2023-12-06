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
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            1 =>
            array (
                'id' => 2,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Memetakan tutupan lahan',
                'id_lembaga' => 11,
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
                'target_volume' => '1 PerBup/Dokumen',
                'target_anggaran' => '5000000'
            ),
            3 =>
            array (
                'id' => 4,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Membuat regulasi untuk menambah luas lahan kakao lestari sebagai bagian dari LP2B',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penetapan Kawasan, Lahan dan Lahan Cadangan Pertanian Pangan Berkelanjutan secara numerik dan spasial di Kabupaten/Kota',
                'indikator_kegiatan' => 'Penetapan Kawasan, Lahan dan Lahan Cadangan Pertanian Pangan Berkelanjutan',
                'target_volume' => '1 PerBup/Dokumen',
                'target_anggaran' => '5000000'
            ),
            4 =>
            array (
                'id' => 5,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Menyusun sistem informasi database terkait dengan pengembangan kakao di luwu utara',
                'id_lembaga' => 14,
                'nomenklatur' => 'Pengembangan Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik',
                'indikator_kegiatan' => 'Jumlah Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik yang Dikembangkan',
                'target_volume' => '1 Unit',
                'target_anggaran' => '45000000'
            ),
            5 =>
            array (
                'id' => 6,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Mengembangkan Sistem Informasi Geografis kakao',
                'id_lembaga' => 14,
                'nomenklatur' => 'Pengembangan Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik',
                'indikator_kegiatan' => 'Jumlah Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik yang Dikembangkan',
                'target_volume' => '1 Unit',
                'target_anggaran' => '45000000'
            ),
            6 =>
            array (
                'id' => 7,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Pelatihan satu data kakao berbasis desa',
                'id_lembaga' => 14,
                'nomenklatur' => 'Sosialisasi dan Diseminasi Hasil-Hasil Kelitbangan',
                'indikator_kegiatan' => 'Jumlah Laporan Hasil Penyelenggaraan Sosialisasi dan Diseminasi Hasil-Hasil Kelitbangan',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            7 =>
            array (
                'id' => 8,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Melakukan validasi luas data existing kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian yang termanfaatkan',
                'target_volume' => '1 dokumen',
                'target_anggaran' => '50000000'
            ),
            8 =>
            array (
                'id' => 9,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Memetakan kondisi eksisting lahan kakao luwu utara',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 10,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Memetakan potensi pengembangan lahan kakao sesuai peruntukan ruang dan kesesuaian lahan',
                'id_lembaga' => 8,
                'nomenklatur' => 'Penetapan Kebijakan dalam rangka Pelaksanaan Penataan Ruang',
                'indikator_kegiatan' => 'Jumlah Dokumen Kebijakan Perda/Perkada selain RTRW Kabupaten/Kota',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 11,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Menyusun turunan peta jalan kakao untuk lima tahun (jangka menengah) dan satu tahun (jangka pendek)',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 12,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Melakukan studi potensi kakao di Perhutanan sosial',
                'id_lembaga' => 9,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'target_volume' => '3 PS',
                'target_anggaran' => '300000000'
            ),
            0 =>
            array (
                'id' => 13,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Membangun kakao agroforestri sebagai alternatif pendapatan berganda',
                'id_lembaga' => 9,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'target_volume' => '150 ha',
                'target_anggaran' => '3900000000'
            ),
            0 =>
            array (
                'id' => 14,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Membangun panduan GAP kakao pada area perhutanan sosial',
                'id_lembaga' => 9,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'target_volume' => '3 PS',
                'target_anggaran' => '75000000'
            ),
            0 =>
            array (
                'id' => 15,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Memetakan kelas umur kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 16,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Identifikasi tanaman tua dan tanaman rusak',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 17,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Identifikasi sambung pucuk atau samping kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Perbanyakan Benih Bersertifikat Perkebunan Berbentuk Batang',
                'indikator_kegiatan' => 'Jumlah benih bersertifikat Perkebunan Berbentuk Batang',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 18,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Memetakan lahan peremajaan kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 19,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Membangun konsep agroforestri di sekitar kawasan terbatas',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 20,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Pembuatan demoplot percontohan',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 21,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Perluasan memperhatikan kemiringan dan upaya intervensinya',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 22,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Peningkatan alokasi anggaran kakao',
                'id_lembaga' => 1,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 23,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Penyusunan pedoman peremajaan petani',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 24,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Penyuluhan petani terkait peremajaan',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 25,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Penyuluhan/pemberdayaan masyarakat',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 26,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => 'Perluasan memperhatikan kemiringan dan upaya intervensinya',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 27,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 28,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 29,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 30,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 31,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 32,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 33,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 34,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 35,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 36,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 37,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 38,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 39,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 40,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 41,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 42,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 43,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 44,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 45,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 46,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 47,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 48,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 49,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 50,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 51,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 52,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 53,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 54,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 55,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 56,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 57,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 58,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 59,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 60,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 61,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 62,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 63,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 64,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 65,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 66,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 67,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 68,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 69,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 70,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 71,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 72,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 73,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 74,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 75,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 76,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 77,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 78,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 79,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 80,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 81,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 82,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 83,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 84,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 85,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 86,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 87,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 88,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 89,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 90,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 91,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 92,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 93,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 94,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 95,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 96,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 97,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 98,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 99,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 100,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 101,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 102,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 103,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 104,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 105,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 107,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 108,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 109,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 110,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 111,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 112,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 113,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 114,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 115,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 116,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 117,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 118,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 119,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 120,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 121,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 122,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 123,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 124,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 125,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 126,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 127,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 128,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 129,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 131,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 132,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 133,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 134,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 135,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 136,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 137,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 138,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 139,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 140,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 141,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 142,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 143,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 145,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 146,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 147,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 148,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 149,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 150,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 151,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 152,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 153,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 154,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 155,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 156,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 157,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 158,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 159,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 160,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 161,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 162,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 163,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 164,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 165,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 166,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 167,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 168,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 169,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 170,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 171,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 172,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 173,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 174,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 175,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 176,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 177,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 178,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 179,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 180,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 181,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 182,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 183,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 184,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 185,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 186,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 187,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 188,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 189,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 190,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 191,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 192,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 193,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 194,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 195,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 196,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 197,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 198,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 199,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 201,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 202,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 203,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 204,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 205,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 206,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 207,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 208,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 209,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 210,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 211,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 212,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 213,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 214,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 215,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 216,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 217,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 218,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 219,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 220,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 221,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 222,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 223,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 224,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 225,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 226,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 227,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 228,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 229,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 230,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 231,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 232,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 233,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 234,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 235,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 236,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 237,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            0 =>
            array (
                'id' => 237,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => '',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => '',
                'target_volume' => '',
                'target_anggaran' => ''
            )
        ));
    }
}
