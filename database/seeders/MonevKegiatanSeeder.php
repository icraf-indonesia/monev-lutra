<?php

namespace Database\Seeders;

//use Carbon\Carbon;
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
                'periode' => '2023-2024',
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
                'periode' => '2023-2024',
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
                'periode' => '2023-2024',
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
                'periode' => '2023-2024',
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
                'periode' => '2023-2024',
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
                'periode' => '2023-2024',
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
                'periode' => '2023-2024',
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
                'periode' => '2023-2024',
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
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            9 =>
            array (
                'id' => 10,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Memetakan potensi pengembangan lahan kakao sesuai peruntukan ruang dan kesesuaian lahan',
                'id_lembaga' => 8,
                'nomenklatur' => 'Penetapan Kebijakan dalam rangka Pelaksanaan Penataan Ruang',
                'indikator_kegiatan' => 'Jumlah Dokumen Kebijakan Perda/Perkada selain RTRW Kabupaten/Kota',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            10 =>
            array (
                'id' => 11,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Menyusun turunan peta jalan kakao untuk lima tahun (jangka menengah) dan satu tahun (jangka pendek)',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            11 =>
            array (
                'id' => 12,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Melakukan studi potensi kakao di Perhutanan sosial',
                'id_lembaga' => 9,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '3 PS',
                'target_anggaran' => '300000000'
            ),
            12 =>
            array (
                'id' => 13,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Membangun kakao agroforestri sebagai alternatif pendapatan berganda',
                'id_lembaga' => 9,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '150 ha',
                'target_anggaran' => '3900000000'
            ),
            13 =>
            array (
                'id' => 14,
                'id_strategi' => 1,
                'id_intervensi' => 1,
                'kegiatan' => 'Membangun panduan GAP kakao pada area perhutanan sosial',
                'id_lembaga' => 9,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '3 PS',
                'target_anggaran' => '75000000'
            ),
            14 =>
            array (
                'id' => 15,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Memetakan kelas umur kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            15 =>
            array (
                'id' => 16,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Identifikasi tanaman tua dan tanaman rusak',
                'id_lembaga' => 4,
                'nomenklatur' => '',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            16 =>
            array (
                'id' => 17,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Identifikasi sambung pucuk atau samping kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Perbanyakan Benih Bersertifikat Perkebunan Berbentuk Batang',
                'indikator_kegiatan' => 'Jumlah benih bersertifikat Perkebunan Berbentuk Batang',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            17 =>
            array (
                'id' => 18,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Memetakan lahan peremajaan kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            18 =>
            array (
                'id' => 19,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Membangun konsep agroforestri di sekitar kawasan terbatas',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            19 =>
            array (
                'id' => 20,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Pembuatan demoplot percontohan',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            20 =>
            array (
                'id' => 21,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Perluasan memperhatikan kemiringan dan upaya intervensinya',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            21 =>
            array (
                'id' => 22,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Peningkatan alokasi anggaran kakao',
                'id_lembaga' => 1,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            22 =>
            array (
                'id' => 23,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Penyusunan pedoman peremajaan petani',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            23 =>
            array (
                'id' => 24,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Penyuluhan petani terkait peremajaan',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            24 =>
            array (
                'id' => 25,
                'id_strategi' => 1,
                'id_intervensi' => 2,
                'kegiatan' => 'Penyuluhan/pemberdayaan masyarakat',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            25 =>
            array (
                'id' => 26,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => 'Perluasan memperhatikan kemiringan dan upaya intervensinya',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            26 =>
            array (
                'id' => 27,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => 'Membangun konsep agroforestri di sekitar kawasan terbatas',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            27 =>
            array (
                'id' => 28,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => 'Mengidentifikasi kelompok tani kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengembangan Kapasitas Kelembagaan Petani di Kecamatan dan Desa',
                'indikator_kegiatan' => 'Jumlah Kelembagaan Petani di Kecamatan dan Desa yang Ditingkatkan Kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            28 =>
            array (
                'id' => 29,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => 'Pembuatan demoplot percontohan',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            29 =>
            array (
                'id' => 30,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => 'Memberikan bantuan bibit kakao pada area hutan adat',
                'id_lembaga' => 9,
                'nomenklatur' => 'Peningkatan kapasitas MHA, kearifan lokal atau pengetahuan tradisional dan hak kearifan lokal atau pengetahuan tradisional dan hak MHA terkait dengan PPLH yang berada di daerah kabupaten/kota',
                'indikator_kegiatan' => 'Jumlah SDM kelembagaan MHA, kearifan lokal atau pengetahuan tradisional dan hak kearifan lokal atau pengetahuan tradisional dan hak MHA terkait dengan PPLH yang berada di daerah kabupaten/kota',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            30 =>
            array (
                'id' => 31,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => 'Memberikan insentif bibit kakao pada area hutan adat',
                'id_lembaga' => 9,
                'nomenklatur' => 'Peningkatan kapasitas MHA, kearifan lokal atau pengetahuan tradisional dan hak kearifan lokal atau pengetahuan tradisional dan hak MHA terkait dengan PPLH yang berada di daerah kabupaten/kota',
                'indikator_kegiatan' => 'Jumlah SDM kelembagaan MHA, kearifan lokal atau pengetahuan tradisional dan hak kearifan lokal atau pengetahuan tradisional dan hak MHA terkait dengan PPLH yang berada di daerah kabupaten/kota',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            31 =>
            array (
                'id' => 32,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => 'Penyuluhan/pemberdayaan masyarakat',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengembangan Kapasitas Kelembagaan Petani di Kecamatan dan Desa',
                'indikator_kegiatan' => 'Jumlah Kelembagaan Petani di Kecamatan dan Desa yang Ditingkatkan Kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            32 =>
            array (
                'id' => 33,
                'id_strategi' => 1,
                'id_intervensi' => 3,
                'kegiatan' => 'Mengintervensi bantuan bibit dan sarpras kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengawasan Penggunaan Sarana Pengolahan Hasil Perkebunan',
                'indikator_kegiatan' => 'Jumlah pengawasan penggunaan sarana pengolahan hasil Perkebunan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            33 =>
            array (
                'id' => 34,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Memetakan luas kebun agroforestri kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            34 =>
            array (
                'id' => 35,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Penyuluhan kesesuaian lahan untuk budidaya kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            35 =>
            array (
                'id' => 36,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Memperbarui peraturan daerah tentang penetapan kawasan untuk kakao lestari',
                'id_lembaga' => 1,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            36 =>
            array (
                'id' => 37,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Menyusun regulasi/kebijakan terkait perlindungan kakao berkelanjutan',
                'id_lembaga' => 1,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            37 =>
            array (
                'id' => 38,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Melakukan GAP untuk meningkatkan produktivitas kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            38 =>
            array (
                'id' => 39,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Menyusun kompilasi, integrasi, dan sinkronisasi data kakao lestari',
                'id_lembaga' => 14,
                'nomenklatur' => 'Penyelenggaraan Sistem Penghubung Layanan Pemerintah',
                'indikator_kegiatan' => 'Jumlah Layanan Publik yang Terhubung dengan Sistem Penghubung Layanan Pemerintah Daerah',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            39 =>
            array (
                'id' => 40,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Membangun lokasi percontohan/demplot agroforestri kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            40 =>
            array (
                'id' => 41,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Melakukan penelitian komoditas yang cocok dengan kakao',
                'id_lembaga' => 1,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            41 =>
            array (
                'id' => 42,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Memberikan bantuan bibit tanaman non kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            42 =>
            array (
                'id' => 43,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Melakukan kunjungan belajar ke lokasi yang berhasil mengembangkan kakao agroforesti',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            43 =>
            array (
                'id' => 44,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Penyebaran informasi agroforesti  (mempublikasi seluruh intervensi)',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            44 =>
            array (
                'id' => 45,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Pengembangan HHBK di Agroforesti kakao sebagai pendidikan dan wisata',
                'id_lembaga' => 9,
                'nomenklatur' => 'Pengembangan HHBK di Agroforestri kakao sebagai pendidikan dan wisata',
                'indikator_kegiatan' => '',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            45 =>
            array (
                'id' => 46,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Identifikasi penentuan sistem tanam pada lahan kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            46 =>
            array (
                'id' => 47,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Penentuan lokasi sistem pengembangan sistem agroforestri',
                'id_lembaga' => 8,
                'nomenklatur' => 'Penetapan Kebijakan dalam rangka Pelaksanaan Penataan Ruang',
                'indikator_kegiatan' => 'Jumlah Dokumen Kebijakan Perda/Perkada selain RTRW Kabupaten/Kota',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            47 =>
            array (
                'id' => 48,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Memetakan petani agroforestri kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengembangan Kapasitas Kelembagaan Petani di Kecamatan dan Desa',
                'indikator_kegiatan' => 'Jumlah Kelembagaan Petani di Kecamatan dan Desa yang Ditingkatkan Kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            48 =>
            array (
                'id' => 49,
                'id_strategi' => 1,
                'id_intervensi' => 4,
                'kegiatan' => 'Pemberian insentif bagi pemilik lahan kakao dalam kawasan kakao lestari',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            49 =>
            array (
                'id' => 50,
                'id_strategi' => 2,
                'id_intervensi' => 5,
                'kegiatan' => 'Mengidentifikasi petani yang belum memiliki sertifikat lahan',
                'id_lembaga' => 12,
                'nomenklatur' => 'Koordinasi dan Sinkronisasi Perencanaan Penggunaan Tanah',
                'indikator_kegiatan' => 'Jumlah Laporan Koordinasi dan Sinkronisasi Perencanaan Penggunaan Tanah dalam 1 (Satu) Kabupaten/Kota',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            50 =>
            array (
                'id' => 51,
                'id_strategi' => 2,
                'id_intervensi' => 5,
                'kegiatan' => 'Melakukan studi atau kajian tentang peraturan kepemilikan dan penggunaan lahan',
                'id_lembaga' => 12,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            51 =>
            array (
                'id' => 52,
                'id_strategi' => 2,
                'id_intervensi' => 5,
                'kegiatan' => 'Melakukan studi atau kajian kepemilikan lahan oleh petani kakao perempuan',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            52 =>
            array (
                'id' => 53,
                'id_strategi' => 2,
                'id_intervensi' => 5,
                'kegiatan' => 'Menyusun program sertifikasi yang terintegrasi ke dalam program peremajaan lahan kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            53 =>
            array (
                'id' => 54,
                'id_strategi' => 2,
                'id_intervensi' => 5,
                'kegiatan' => 'Melakukan sosialisasi proses sertifikasi kepemilikan lahan/kebun',
                'id_lembaga' => 12,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            54 =>
            array (
                'id' => 55,
                'id_strategi' => 2,
                'id_intervensi' => 5,
                'kegiatan' => 'Menyusun kebijakan yang mendorong proses sertifikasi lahan kakao',
                'id_lembaga' => 1,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            55 =>
            array (
                'id' => 56,
                'id_strategi' => 2,
                'id_intervensi' => 5,
                'kegiatan' => 'Edukasi dan pendampingan dalam mengurus sertifikasi lahan (BPN)',
                'id_lembaga' => 12,
                'nomenklatur' => 'Layanan Sosialisasi Berskala Sedang',
                'indikator_kegiatan' => '',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            56 =>
            array (
                'id' => 57,
                'id_strategi' => 2,
                'id_intervensi' => 6,
                'kegiatan' => 'Melakukan studi atau kajian tentang perhutanan sosial untuk agroforestri kakao',
                'id_lembaga' => 9,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            57 =>
            array (
                'id' => 58,
                'id_strategi' => 2,
                'id_intervensi' => 6,
                'kegiatan' => 'Pengembangan opsi model bisnis perhutanan sosial',
                'id_lembaga' => 9,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            58 =>
            array (
                'id' => 59,
                'id_strategi' => 2,
                'id_intervensi' => 6,
                'kegiatan' => 'Membangun sistem informasi perhutanan sosial dengan melibatkan perempuan dan laki-laki',
                'id_lembaga' => 1,
                'nomenklatur' => 'Pengelolaan pusat data pemerintah daerah',
                'indikator_kegiatan' => 'Jumlah Data dalam Sistem Informasi Pemerintahan Daerah di Bidang Pembangunan Daerah yang Dikelola',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            59 =>
            array (
                'id' => 60,
                'id_strategi' => 2,
                'id_intervensi' => 6,
                'kegiatan' => 'Membentuk kelompok perempuan untuk melestarikan perhutanan sosial',
                'id_lembaga' => 9,
                'nomenklatur' => 'Pengembangan usaha ekonomi kelompok masyarakat',
                'indikator_kegiatan' => '',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            60 =>
            array (
                'id' => 61,
                'id_strategi' => 2,
                'id_intervensi' => 6,
                'kegiatan' => 'Pendampingan untuk pelestarian lokasi perhutanan sosial',
                'id_lembaga' => 9,
                'nomenklatur' => 'Pengembangan usaha ekonomi kelompok masyarakat',
                'indikator_kegiatan' => '',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            61 =>
            array (
                'id' => 62,
                'id_strategi' => 2,
                'id_intervensi' => 7,
                'kegiatan' => 'Pengembangan modul penyuluhan untuk praktik pertanian kakao yang baik',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            62 =>
            array (
                'id' => 63,
                'id_strategi' => 2,
                'id_intervensi' => 7,
                'kegiatan' => 'Penyuluhan berbasis kelompok tani',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            63 =>
            array (
                'id' => 64,
                'id_strategi' => 2,
                'id_intervensi' => 7,
                'kegiatan' => 'Pemantauan kegiatan penyuluhan untuk komoditas kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            64 =>
            array (
                'id' => 65,
                'id_strategi' => 2,
                'id_intervensi' => 7,
                'kegiatan' => 'Program magang untuk penyuluh swadaya',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Peningkatan Kapasitas Penyuluh pertanian',
                'indikator_kegiatan' => 'Jumlah penyuluh pertanian yang tersedia dan ditingkatkan kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            65 =>
            array (
                'id' => 66,
                'id_strategi' => 2,
                'id_intervensi' => 8,
                'kegiatan' => 'Kajian skema microfinance yang sesuai dengan karakteristik masyarakat',
                'id_lembaga' => 6,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            66 =>
            array (
                'id' => 67,
                'id_strategi' => 2,
                'id_intervensi' => 8,
                'kegiatan' => 'Pembentukan kelompok untuk pembiayaan (dengan sistem tanggung renteng)',
                'id_lembaga' => 6,
                'nomenklatur' => 'Pembentukan Kelembagaan Ekonomi Petani',
                'indikator_kegiatan' => 'Jumlah Kelembagaan Ekonomi Petani yang dibentuk',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            67 =>
            array (
                'id' => 68,
                'id_strategi' => 2,
                'id_intervensi' => 8,
                'kegiatan' => 'Harmonisasi kebijakan yang terkait dengan kelembagaan keuangan petani kakao',
                'id_lembaga' => 6,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            68 =>
            array (
                'id' => 69,
                'id_strategi' => 2,
                'id_intervensi' => 8,
                'kegiatan' => 'Pembentukan sistem arisan kelompok tani',
                'id_lembaga' => 6,
                'nomenklatur' => 'Pembentukan Kelembagaan Ekonomi Petani',
                'indikator_kegiatan' => 'Jumlah Kelembagaan Ekonomi Petani yang dibentuk',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            69 =>
            array (
                'id' => 70,
                'id_strategi' => 2,
                'id_intervensi' => 9,
                'kegiatan' => 'Kerja sama dengan universitas terkait pengembangan teknologi usaha tani kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            70 =>
            array (
                'id' => 71,
                'id_strategi' => 2,
                'id_intervensi' => 9,
                'kegiatan' => 'Kerja sama dengan perusahaan untuk program magang di perusahaan kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            71 =>
            array (
                'id' => 72,
                'id_strategi' => 2,
                'id_intervensi' => 9,
                'kegiatan' => 'Studi atau kajian teknologi tepat guna untuk usaha tani kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            72 =>
            array (
                'id' => 73,
                'id_strategi' => 2,
                'id_intervensi' => 9,
                'kegiatan' => 'Penyusunan kurikulum untuk SMK dan politeknik kakao',
                'id_lembaga' => 13,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            73 =>
            array (
                'id' => 74,
                'id_strategi' => 2,
                'id_intervensi' => 10,
                'kegiatan' => 'Perencanaan pembentukan korporasi petani kakao',
                'id_lembaga' => 6,
                'nomenklatur' => 'Pembentukan Kelembagaan Ekonomi Petani',
                'indikator_kegiatan' => 'Jumlah Kelembagaan Ekonomi Petani yang dibentuk',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            74 =>
            array (
                'id' => 75,
                'id_strategi' => 2,
                'id_intervensi' => 10,
                'kegiatan' => 'Studi atau kajian rencana usaha dan pemasaran',
                'id_lembaga' => 6,
                'nomenklatur' => 'Penelitian dan Pengembangan Koperasi, Usaha Kecil dan Menengah',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Koperasi, Usaha Kecil dan Menengah',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            75 =>
            array (
                'id' => 76,
                'id_strategi' => 2,
                'id_intervensi' => 10,
                'kegiatan' => 'Pembagian peran untuk mengembangkan korporasi petani kakao',
                'id_lembaga' => 6,
                'nomenklatur' => 'Kurasi, Peningkatan mutu produk, dan Kemitraan Usaha Mikro dengan Usaha Kecil dan Menengah melalui rantai pasok',
                'indikator_kegiatan' => 'Jumlah Usaha Mikro yang terfasilitasi Kurasi, Peningkatan mutu produk, dan Kemitraan dengan Usaha Kecil dan Menengah melalui rantai pasok',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            76 =>
            array (
                'id' => 77,
                'id_strategi' => 2,
                'id_intervensi' => 10,
                'kegiatan' => 'Kemitraan dan integrasi dengan BUMDesma',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Daerah',
                'indikator_kegiatan' => 'Jumlah Laporan Hasil Pelaksanaan Fasilitasi, Pelaksanaan dan Evaluasi Penelitian dan Pengembangan Bidang Badan Usaha Milik Desa',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            77 =>
            array (
                'id' => 78,
                'id_strategi' => 2,
                'id_intervensi' => 10,
                'kegiatan' => 'Pelatihan dan pendampingan bisnis',
                'id_lembaga' => 6,
                'nomenklatur' => 'Pemberdayaan Melalui Kemitraan Usaha Mikro',
                'indikator_kegiatan' => 'Jumlah Unit Usaha yang Telah Menerima Pembinaan dan Pendampingan Terhadap Usaha Mikro',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            78 =>
            array (
                'id' => 79,
                'id_strategi' => 2,
                'id_intervensi' => 10,
                'kegiatan' => 'Memfasilitasi keterhubungan dengan pasar ekspor',
                'id_lembaga' => 6,
                'nomenklatur' => 'Kurasi, Peningkatan mutu produk, dan Kemitraan Usaha Mikro dengan Usaha Kecil dan Menengah melalui rantai pasok',
                'indikator_kegiatan' => 'Jumlah Usaha Mikro yang terfasilitasi Kurasi, Peningkatan mutu produk, dan Kemitraan dengan Usaha Kecil dan Menengah melalui rantai pasok',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            79 =>
            array (
                'id' => 80,
                'id_strategi' => 2,
                'id_intervensi' => 10,
                'kegiatan' => 'Membangun sistem pemasaran kolektif',
                'id_lembaga' => 6,
                'nomenklatur' => 'Kurasi, Peningkatan mutu produk, dan Kemitraan Usaha Mikro dengan Usaha Kecil dan Menengah melalui rantai pasok',
                'indikator_kegiatan' => 'Jumlah Usaha Mikro yang terfasilitasi Kurasi, Peningkatan mutu produk, dan Kemitraan dengan Usaha Kecil dan Menengah melalui rantai pasok',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            80 =>
            array (
                'id' => 81,
                'id_strategi' => 2,
                'id_intervensi' => 10,
                'kegiatan' => 'Pendampingan untuk mengakses modal usaha',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Daerah',
                'indikator_kegiatan' => 'Jumlah Unit Usaha yang Telah Menerima Pembinaan dan Pendampingan Terhadap Usaha Mikro',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            81 =>
            array (
                'id' => 82,
                'id_strategi' => 2,
                'id_intervensi' => 11,
                'kegiatan' => 'Peningkatan pelibatan perempuan dalam kegiatan desa',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi tim penggerak PKK dalam penyelenggaran gerakan pemberdayaan masyarakat dan kesejahteraan keluraga',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Fasilitasi Tim Penggerak PKK dalam Penyelenggaraan Gerakan Pemberdayaan Masyarakat dan Kesejahteraan Keluarga',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            82 =>
            array (
                'id' => 83,
                'id_strategi' => 2,
                'id_intervensi' => 11,
                'kegiatan' => 'Pemberdayaan perempuan kepala keluarga',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi tim penggerak PKK dalam penyelenggaran gerakan pemberdayaan masyarakat dan kesejahteraan keluraga',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Fasilitasi Tim Penggerak PKK dalam Penyelenggaraan Gerakan Pemberdayaan Masyarakat dan Kesejahteraan Keluarga',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            83 =>
            array (
                'id' => 84,
                'id_strategi' => 2,
                'id_intervensi' => 11,
                'kegiatan' => 'Kajian analisis gap gender di komunitas kakao',
                'id_lembaga' => 7,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            84 =>
            array (
                'id' => 85,
                'id_strategi' => 2,
                'id_intervensi' => 11,
                'kegiatan' => 'Penyusunan panduan pelibatan dan pemberdayaan perempuan dalam usaha tani kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            85 =>
            array (
                'id' => 86,
                'id_strategi' => 2,
                'id_intervensi' => 11,
                'kegiatan' => 'Pelibatan perempuan dalam setiap bagian usaha tani kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            86 =>
            array (
                'id' => 87,
                'id_strategi' => 2,
                'id_intervensi' => 11,
                'kegiatan' => 'Penyuluhan usaha tani kakao untuk perempuan',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            87 =>
            array (
                'id' => 88,
                'id_strategi' => 2,
                'id_intervensi' => 11,
                'kegiatan' => 'Pembentukan kelompok wanita tani (KWT) kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengembangan Kapasitas Kelembagaan Petani di Kecamatan dan Desa',
                'indikator_kegiatan' => 'Jumlah Kelembagaan Petani di Kecamatan dan Desa yang Ditingkatkan Kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            88 =>
            array (
                'id' => 89,
                'id_strategi' => 2,
                'id_intervensi' => 11,
                'kegiatan' => 'Optimalisasi peran perempuan dalam manajemen dan hilirisasi usaha kakao',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi pemerintah desa dalam pemanfaatan teknologi tepat guna',
                'indikator_kegiatan' => 'Jumlah Laporan Hasil Fasilitasi Pemerintah Desa dalam Pemanfaatan Teknologi Tepat Guna',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            89 =>
            array (
                'id' => 90,
                'id_strategi' => 2,
                'id_intervensi' => 12,
                'kegiatan' => 'Penyusunan standar operasi dan prosedur (SOP) K3 untuk pertanian kakao',
                'id_lembaga' => 15,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            90 =>
            array (
                'id' => 91,
                'id_strategi' => 2,
                'id_intervensi' => 12,
                'kegiatan' => 'Sosialisasi K3 untuk petani kakao',
                'id_lembaga' => 15,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            91 =>
            array (
                'id' => 92,
                'id_strategi' => 2,
                'id_intervensi' => 12,
                'kegiatan' => 'Pemberian bantuan peralatan keselamatan kerja',
                'id_lembaga' => 15,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            92 =>
            array (
                'id' => 93,
                'id_strategi' => 2,
                'id_intervensi' => 12,
                'kegiatan' => 'Pelatihan K3 bagi petani kakao',
                'id_lembaga' => 15,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            93 =>
            array (
                'id' => 94,
                'id_strategi' => 2,
                'id_intervensi' => 13,
                'kegiatan' => 'Pembentukan model Perlindungan Anak Terpadu Berbasis Masyarakat (PATBM) pada tingkat desa',
                'id_lembaga' => 7,
                'nomenklatur' => 'Penyedia layanan pengaduan masyarakat bagi anak yg memerlukan perlindungan khusus tingkat daerah kabupaten/kota ',
                'indikator_kegiatan' => 'Jumlah desa yang terbentuk PATBM dan bebas pornografi yang dibina dan dilakukan monitoring dan evaluasi Jumlah fasilitator terlatih (25 fasilitator) Jumlah layanan tindak lanjut pengaduan yang memerlukan koordinasi dan sinkronisasi bagi anak yang memerluakn perlindungan khusus kewenangan kabupaten/kota (1 layanan)',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            94 =>
            array (
                'id' => 95,
                'id_strategi' => 2,
                'id_intervensi' => 13,
                'kegiatan' => 'Pelatihan bagi kader atau pemangku kepentingan tentang pekerja anak',
                'id_lembaga' => 7,
                'nomenklatur' => 'Peningkatan kapasitas kelembagaan lembaga kemasyarakatan desa dari kelurahan (RT, RW, PKK, Posyandu, LPM, dan Karang Taruna), lembaga adat, desa/kelurahan, dan masyarakat hukum adat',
                'indikator_kegiatan' => 'Jumlah Peserta yang memahami  Penyebarluasan Komunikasi, Informasi, Edukasi (KIE) Kesetaraan Gender (KG) dan Perlindungan Anak bagi Keluarga Kewenangan Kabupaten/Kota',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            95 =>
            array (
                'id' => 96,
                'id_strategi' => 2,
                'id_intervensi' => 13,
                'kegiatan' => 'Program Peningkatan Kualitas Keluarga Kegiatan Penguatan dan pengembangan lembaga penyedia layanan peningkatan kualitas keluarga dalam mewujudkan KG dan hak anak yang wilayah kerjanya dalam daerah kabupaten/kota Sub kegiatan Peningkatan kapasitas sumber daya lembaga penyedia layanan peningkatan kualitas keluarga tingkat daerah kabupaten/kota',
                'id_lembaga' => 7,
                'nomenklatur' => 'Program Peningkatan Kualitas Keluarga Kegiatan Penguatan dan pengembangan lembaga penyedia layanan peningkatan kualitas keluarga dalam mewujudkan KG dan hak anak yang wilayah kerjanya dalam daerah kabupaten/kota Sub kegiatan Peningkatan kapasitas sumber daya lembaga penyedia layanan peningkatan kualitas keluarga tingkat daerah kabupaten/kota',
                'indikator_kegiatan' => 'Persentase Pemenuhan kwalitas keluarga meningkat',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            96 =>
            array (
                'id' => 97,
                'id_strategi' => 2,
                'id_intervensi' => 13,
                'kegiatan' => 'Seminar peningkatan peran ibu/keluarga dalam pendidikan dan pengasuhan anak',
                'id_lembaga' => 7,
                'nomenklatur' => 'Seminar peningkatan peran ibu/keluarga dalam pendidikan dan pengasuhan anak ',
                'indikator_kegiatan' => 'Jumlah Peserta yang mengikuti seminar peningkatan peran Ibu/Keluarga dalam Pendidikan dan Pengasuhan Anak',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            97 =>
            array (
                'id' => 98,
                'id_strategi' => 2,
                'id_intervensi' => 13,
                'kegiatan' => 'Edukasi layanan PUSPAGA',
                'id_lembaga' => 7,
                'nomenklatur' => 'Edukasi layanan PUSPAGA',
                'indikator_kegiatan' => 'Jumlah puspaga desa yang aktif dan berfungsi yang terbentuk dan terbina',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            98 =>
            array (
                'id' => 99,
                'id_strategi' => 2,
                'id_intervensi' => 13,
                'kegiatan' => 'Sosialisasi tentang pekerja anak untuk petani kakao',
                'id_lembaga' => 7,
                'nomenklatur' => 'Pelaksanaan Komunikasi, Informasi dan Edukasi KG dan Perlindungan Anak bagi Keluarga Kewenangan Kabupaten/Kota',
                'indikator_kegiatan' => 'Jumlah Komunikasi, Informasi, Edukasi (KIE) Kesetaraan Gender (KG) dan Perlindungan Anak bagi Keluarga Kewenangan Kabupaten/Kota yang Tersedia',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            99 =>
            array (
                'id' => 100,
                'id_strategi' => 2,
                'id_intervensi' => 13,
                'kegiatan' => 'Penyuluhan pekerja anak',
                'id_lembaga' => 15,
                'nomenklatur' => 'Pelaksanaan Komunikasi, Informasi dan Edukasi KG dan Perlindungan Anak',
                'indikator_kegiatan' => 'Jumlah Komunikasi, Informasi, Edukasi (KIE) Kesetaraan Gender (KG) dan Perlindungan Anak bagi Keluarga Kewenangan Kabupaten/Kota yang Tersedia',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            100 =>
            array (
                'id' => 101,
                'id_strategi' => 2,
                'id_intervensi' => 13,
                'kegiatan' => 'Pengembangan sistem yang PATBM dengan dukungan anggaran daerah dan desa',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Penataan, Pemberdayaan dan Pendayagunaan Kelembagaan Lembaga Kemasyarakatan Desa/Kelurahan (RT,RW,PKK,Posyandu,LPM dan Karang Taruna), Lembaga Adat Desa/Kelurahan dan Masyarakat Hukum Adat',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penataan, Pemberdayaan dan Pendayagunaan Kelembagaan Lembaga Kemasyarakatan Desa/Kelurahan (RT,RW,PKK,Posyandu,LPM dan Karang Taruna), Lembaga Adat Desa/Kelurahan dan Masyarakat Hukum Adat',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            101 =>
            array (
                'id' => 102,
                'id_strategi' => 2,
                'id_intervensi' => 13,
                'kegiatan' => 'Penyusunan materi muatan lokal kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            102 =>
            array (
                'id' => 103,
                'id_strategi' => 2,
                'id_intervensi' => 13,
                'kegiatan' => 'Pengembangan sistem pengawasan dan remediasi pekerja anak di lokal desa sampai ke kabupaten',
                'id_lembaga' => 15,
                'nomenklatur' => 'Pelaksanaan Komunikasi, Informasi dan Edukasi KG dan Perlindungan Anak bagi Keluarga Kewenangan Kabupaten/Kota',
                'indikator_kegiatan' => 'Jumlah Komunikasi, Informasi, Edukasi (KIE) Kesetaraan Gender (KG) dan Perlindungan Anak bagi Keluarga Kewenangan Kabupaten/Kota yang Tersedia',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            103 =>
            array (
                'id' => 104,
                'id_strategi' => 2,
                'id_intervensi' => 13,
                'kegiatan' => 'Memantau dan mengevaluasi sistem pencegahan pekerja anak',
                'id_lembaga' => 15,
                'nomenklatur' => 'Advokasi Kebijakan dan Pendampingan untuk Mewujudkan KG dan Perlindungan Anak Kewenangan Kabupaten/Kota',
                'indikator_kegiatan' => 'Jumlah Perangkat Daerah yang mendapat Advokasi dan Pendampingan Keluarga untuk Mewujudkan Kesetaraan Gender (KG) dan Perlindungan Anak Kewenangan Kabupaten/Kota',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            104 =>
            array (
                'id' => 105,
                'id_strategi' => 2,
                'id_intervensi' => 14,
                'kegiatan' => 'Melakukan studi atau kajian tentang kebijakan kakao lestari',
                'id_lembaga' => 1,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            105 =>
            array (
                'id' => 106,
                'id_strategi' => 2,
                'id_intervensi' => 14,
                'kegiatan' => 'Penguatan kelompok kerja kakao lestari untuk penyusunan kebijakan',
                'id_lembaga' => 1,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            106 =>
            array (
                'id' => 107,
                'id_strategi' => 2,
                'id_intervensi' => 14,
                'kegiatan' => 'Integrasi dengan peta jalan kakao lestari',
                'id_lembaga' => 1,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            107 =>
            array (
                'id' => 108,
                'id_strategi' => 2,
                'id_intervensi' => 14,
                'kegiatan' => 'Integrasi dengan kebijakan replanting dan sertifikasi',
                'id_lembaga' => 4,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            108 =>
            array (
                'id' => 109,
                'id_strategi' => 2,
                'id_intervensi' => 14,
                'kegiatan' => 'Alokasi pembiayaan untuk program kakao lestari',
                'id_lembaga' => 1,
                'nomenklatur' => 'Sub kegiatan koordiansi penyusunan dokumen perencanaan bidang utnuk penyusunan dokumen RPJMD, RPJPD, RKPD',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            109 =>
            array (
                'id' => 110,
                'id_strategi' => 2,
                'id_intervensi' => 14,
                'kegiatan' => 'Sub kegiatan Asistensi penyusunan dokumen perencanaan pembangunan daerah bidang',
                'id_lembaga' => 1,
                'nomenklatur' => 'Sub kegiatan Asistensi penyusunan dokumen perencanaan pembangunan daerah bidang',
                'indikator_kegiatan' => '',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            110 =>
            array (
                'id' => 111,
                'id_strategi' => 2,
                'id_intervensi' => 14,
                'kegiatan' => 'Sub kegiatan pelaksanaan monitoring dan evaluasi penyusunan dokumen perencanaan pembangunan perangkat daerah bidang',
                'id_lembaga' => 1,
                'nomenklatur' => 'Sub kegiatan pelaksanaan monitoring dan evaluasi penyusunan dokumen perencanaan pembangunan perangkat daerah bidang',
                'indikator_kegiatan' => '',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            111 =>
            array (
                'id' => 112,
                'id_strategi' => 2,
                'id_intervensi' => 14,
                'kegiatan' => 'Koordinasi penyusunan dokumen perencanaan pembangunan daerah bidang (RPJPD, RPJMD, RKPD)',
                'id_lembaga' => 1,
                'nomenklatur' => 'Koordinasi penyusunan dokumen perencanaan pembangunan daerah bidang (RPJPD, RPJMD, RKPD)',
                'indikator_kegiatan' => '',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            112 =>
            array (
                'id' => 113,
                'id_strategi' => 2,
                'id_intervensi' => 14,
                'kegiatan' => 'Koordinasi pelaksanaan sinergitas dan harmonisasi perencanaan pembangunan daerah bidang perekonomian',
                'id_lembaga' => 1,
                'nomenklatur' => 'Koordinasi pelaksanaan sinergitas dan harmonisasi perencanaan pembangunan daerah bidang perekonomian',
                'indikator_kegiatan' => '',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            113 =>
            array (
                'id' => 114,
                'id_strategi' => 2,
                'id_intervensi' => 15,
                'kegiatan' => 'Studi banding implementasi asuransi pertanian',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penanganan Dampak Perubahan Iklim (DPI) Tanaman Pangan, Hortikultura, dan Perkebunan',
                'indikator_kegiatan' => 'Jumlah Area Terdampak Perubahan Iklim (DPI) Tanaman Pangan, Hortikultura, dan Perkebunan yang Ditangani',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            114 =>
            array (
                'id' => 115,
                'id_strategi' => 2,
                'id_intervensi' => 15,
                'kegiatan' => 'Studi atau kajian peraturan pemberian asuransi petani kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            115 =>
            array (
                'id' => 116,
                'id_strategi' => 2,
                'id_intervensi' => 15,
                'kegiatan' => 'Menginisasi pertemuan bisnis dengan lembaga asuransi',
                'id_lembaga' => 6,
                'nomenklatur' => 'Penanganan Dampak Perubahan Iklim (DPI) Tanaman Pangan, Hortikultura, dan Perkebunan',
                'indikator_kegiatan' => 'Jumlah Area Terdampak Perubahan Iklim (DPI) Tanaman Pangan, Hortikultura, dan Perkebunan yang Ditangani',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            116 =>
            array (
                'id' => 117,
                'id_strategi' => 2,
                'id_intervensi' => 15,
                'kegiatan' => 'Pendataan petani calon penerima program asuransi',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            117 =>
            array (
                'id' => 118,
                'id_strategi' => 2,
                'id_intervensi' => 15,
                'kegiatan' => 'Sosialisasi program asuransi pertanian bekerja sama dengan lembaga asuransi',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penanganan Dampak Perubahan Iklim (DPI) Tanaman Pangan, Hortikultura, dan Perkebunan',
                'indikator_kegiatan' => 'Jumlah Area Terdampak Perubahan Iklim (DPI) Tanaman Pangan, Hortikultura, dan Perkebunan yang Ditangani',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            118 =>
            array (
                'id' => 119,
                'id_strategi' => 2,
                'id_intervensi' => 15,
                'kegiatan' => 'Pendampingan petani untuk dapat mengakses asuransi pertanian',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Pengelolaan Keuangan Desa',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil fasilitasi Pengelolaan Keuangan Desa',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            119 =>
            array (
                'id' => 120,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pembangunan kebun induk bersertifikat',
                'id_lembaga' => 4,
                'nomenklatur' => 'Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            120 =>
            array (
                'id' => 121,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pendampingan penangkaran benih mandiri',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            121 =>
            array (
                'id' => 122,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Memperbaharui database petani kakao Luwu Utara secara berkala',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            122 =>
            array (
                'id' => 123,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pembangunan demplot kakao agroforestri',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            123 =>
            array (
                'id' => 124,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pembangunan sistem informasi pojok belajar kakao di desa',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            124 =>
            array (
                'id' => 125,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pengadaan dan pelatihan teknologi pemeliharaan tanaman kakao ',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            125 =>
            array (
                'id' => 126,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Memantau dan mengevaluasi penerapan teknologi pemeliharaan tanaman kakao oleh petani',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian yang termanfaatkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            126 =>
            array (
                'id' => 127,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pengadaan bibit multi-klon',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            127 =>
            array (
                'id' => 128,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Peningkatan kesadartahuan masyarakat tentang penanaman multi-klon',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            128 =>
            array (
                'id' => 129,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Peningkatan kesadartahuan terkait penanaman multi-spesies (agroforestri)',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            129 =>
            array (
                'id' => 130,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Melakukan studi/kajian tentang bahan tanam yang tahan PBK, adaptif terhadap perubahan iklim, produksi tinggi',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            130 =>
            array (
                'id' => 131,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pengadaan bahan tanam resisten OPT',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian Organisme Pengganggu Tumbuhan (OPT) Tanaman Pangan, Hortikultura, dan Perkebunan',
                'indikator_kegiatan' => 'Jumlah Luas Serangan Organisme Pengganggu Tumbuhan (OPT) Tanaman Pangan, Hortikultura, dan Perkebunan yang Dikendalikan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            131 =>
            array (
                'id' => 132,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Sosialisasi penggunaan bahan tanam resisten OPT',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            132 =>
            array (
                'id' => 133,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pelatihan kelembagaan dan manajerial untuk kelompok tani',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penguatan Kelembagaan penyuluhan pertanian di Tingkat Kabupaten/Kota',
                'indikator_kegiatan' => 'Jumlah kelembagaan penyuluhan pertanian di tingkat kabupaten/kota yang ditingkatkan kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            133 =>
            array (
                'id' => 134,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Fasilitasi kemitraan kelompok tani dengan penyedia bibit bersertifikat',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penguatan Kelembagaan penyuluhan pertanian di Tingkat Kabupaten/Kota',
                'indikator_kegiatan' => 'Jumlah kelembagaan penyuluhan pertanian di tingkat kabupaten/kota yang ditingkatkan kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            134 =>
            array (
                'id' => 135,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Fasilitasi kemitraan kelompok tani dengan sektor industri',
                'id_lembaga' => 6,
                'nomenklatur' => 'Penguatan Kelembagaan penyuluhan pertanian di Tingkat Kabupaten/Kota',
                'indikator_kegiatan' => 'Jumlah kelembagaan penyuluhan pertanian di tingkat kabupaten/kota yang ditingkatkan kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            135 =>
            array (
                'id' => 136,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Menginisiasi keterlibatan sektor swasta dalam penyuluhan GAP',
                'id_lembaga' => 4,
                'nomenklatur' => 'Peningkatan Kapasitas Kelembagaan Penyuluhan Pertanian di Kecamatan dan Desa',
                'indikator_kegiatan' => 'Jumlah Kelembagaan Penyuluhan Pertanian di Kecamatan dan Desa yang Ditingkatkan Kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            136 =>
            array (
                'id' => 137,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Memantau dan mengevaluasi adopsi Praktik Pertanian yang Baik (GAP) di tingkat petani',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            137 =>
            array (
                'id' => 138,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pendampingan pelaksanaan Praktik Pertanian yang Baik (GAP) secara berkelanjutan',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            138 =>
            array (
                'id' => 139,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Peningkatan kapasitas penyuluh, penyuluh swadaya, dan petani champion',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Peningkatan Kapasitas Penyuluh pertanian',
                'indikator_kegiatan' => 'Jumlah penyuluh pertanian yang tersedia dan ditingkatkan kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            139 =>
            array (
                'id' => 140,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Peningkatan jejaring penyuluhan oleh petani champion',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penguatan Kelembagaan penyuluhan pertanian di Tingkat Kabupaten/Kota',
                'indikator_kegiatan' => 'Jumlah kelembagaan penyuluhan pertanian di tingkat kabupaten/kota yang ditingkatkan kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            140 =>
            array (
                'id' => 141,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Penyusunan panduan penerapan GAP untuk petani',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            141 =>
            array (
                'id' => 142,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Peremajaan tanaman kakao yang tidak produktif',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            142 =>
            array (
                'id' => 143,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pembangunan/pengaktifan forum kajian ahli kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penguatan Kelembagaan penyuluhan pertanian di Tingkat Kabupaten/Kota',
                'indikator_kegiatan' => 'Jumlah kelembagaan penyuluhan pertanian di tingkat kabupaten/kota yang ditingkatkan kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            143 =>
            array (
                'id' => 144,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pertemuan rutin pokja kakao berkelanjutan sebagai wadah kolaborasi antar sektor',
                'id_lembaga' => 1,
                'nomenklatur' => 'Kemitraan dengan Pemangku Kepentingan',
                'indikator_kegiatan' => 'Jumlah Dokumen Kemitraan dengan Pemangku Kepentingan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            144 =>
            array (
                'id' => 145,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Studi/kajian tentang penerapan GAP untuk peningkatan produktivitas kaako',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            145 =>
            array (
                'id' => 146,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pelatihan sistem pertanian tahan perubahan iklim',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            146 =>
            array (
                'id' => 147,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Sosialisasi terkait penggunaan pupuk organik',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            147 =>
            array (
                'id' => 148,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pelatihan pembuatan pupuk organik',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            148 =>
            array (
                'id' => 149,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pengadaan sarana-prasarana pembuatan pupuk organik',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            149 =>
            array (
                'id' => 150,
                'id_strategi' => 3,
                'id_intervensi' => 16,
                'kegiatan' => 'Pembangunan sistem informasi ilkim melalui kerjasama dengan BMKG',
                'id_lembaga' => 5,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            150 =>
            array (
                'id' => 151,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Sosialisasi/penyadartahuan petani tentang penggunaan bibit multi-klon, media tanam, dan bahan tanam',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            151 =>
            array (
                'id' => 152,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Pemantauan dan evaluasi penggunaan bahan tanam',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian yang termanfaatkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            152 =>
            array (
                'id' => 153,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Konsultasi dengan pihak distributor sesuai kebutuhan pengguna dan lokasi',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pendampingan Penggunaan Sarana Pendukung Pertanian',
                'indikator_kegiatan' => 'Jumlah Pendampingan Penggunaan Sarana Pendukung Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            153 =>
            array (
                'id' => 154,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Memetakan dan memperbaharui data kebutuhan petani pengguna',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            154 =>
            array (
                'id' => 155,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Bantuan bibit kakako yang berkualitas',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            155 =>
            array (
                'id' => 156,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Membangun sistem quality control  pengadaan barang dan jasa kepada petani',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            156 =>
            array (
                'id' => 157,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Pelatihan quality control',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pendampingan Penggunaan Sarana Pendukung Pertanian',
                'indikator_kegiatan' => 'Jumlah Pendampingan Penggunaan Sarana Pendukung Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            157 =>
            array (
                'id' => 158,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Pendampingan pembuatan dan penggunaan pupuk organik untuk petani kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pendampingan Penggunaan Sarana Pendukung Pertanian',
                'indikator_kegiatan' => 'Jumlah Pendampingan Penggunaan Sarana Pendukung Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            158 =>
            array (
                'id' => 159,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Pembangunan mekanisme insentif untuk bisnis saprodi pertanian di tingkat desa',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintahan Desa dalam Meningkatkan Pendapatan Asli Desa',
                'indikator_kegiatan' => 'Jumlah Laporan Hasil Pelaksanaan Fasilitasi, Pelaksanaan dan Evaluasi Penelitian dan Pengembangan Bidang Badan Usaha Milik Desa',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            159 =>
            array (
                'id' => 160,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Penyusunan kebijakan dan perbaikan mekanisme distribusi pupuk subsidi',
                'id_lembaga' => 1,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            160 =>
            array (
                'id' => 161,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Pembentukan pusat kajian kakao daerah',
                'id_lembaga' => 1,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            161 =>
            array (
                'id' => 162,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Melakukan studi/kajian tentang bibit unggul dan metode pembibitan ',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            162 =>
            array (
                'id' => 163,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Bantuan pengembangan kebun induk di tingkat desa',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Pengelolaan Keuangan Desa',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil fasilitasi Pengelolaan Keuangan Desa',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            163 =>
            array (
                'id' => 164,
                'id_strategi' => 3,
                'id_intervensi' => 17,
                'kegiatan' => 'Pendampingan pembangunan kebun induk kakao di tingkat desa',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Daerah',
                'indikator_kegiatan' => 'Jumlah Laporan Hasil Pelaksanaan Fasilitasi, Pelaksanaan dan Evaluasi Penelitian dan Pengembangan Bidang Badan Usaha Milik Desa',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            164 =>
            array (
                'id' => 165,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Identifikasi produk turunan kakao potensial dan penyusunan model bisnis',
                'id_lembaga' => 6,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            165 =>
            array (
                'id' => 166,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Bantuan sarana dan prasarana pengolahan produk turunan kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            166 =>
            array (
                'id' => 167,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Bantuan sarana dan prasarana penanaman tanaman pelindung dan tanaman sela',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            167 =>
            array (
                'id' => 168,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Pendampingan inkubasi industri rumah tangga produk turunan kakao',
                'id_lembaga' => 6,
                'nomenklatur' => 'Fasilitasi Pengembangan Inkubasi Secara Terpadu dan Berjenjang',
                'indikator_kegiatan' => 'Jumlah Inkubator yang Terfasilitasi',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            168 =>
            array (
                'id' => 169,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Pendampingan peningkatan kualitas produk kakao petani',
                'id_lembaga' => 6,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            169 =>
            array (
                'id' => 170,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Fasilitasi pemerintah desa dalam pemanfaatan teknologi tepat guna',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi pemerintah desa dalam pemanfaatan teknologi tepat guna',
                'indikator_kegiatan' => 'Jumlah Laporan Hasil Fasilitasi Pemerintah Desa dalam Pemanfaatan Teknologi Tepat Guna',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            170 =>
            array (
                'id' => 171,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintahan Desa dalam Meningkatkan Pendapatan Asli Desa',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintahan Desa dalam Meningkatkan Pendapatan Asli Desa',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Desa',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            171 =>
            array (
                'id' => 172,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Peningkatan kapasitas penyuluh, penyuluh swadaya, dan petani champion',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Peningkatan Kapasitas Penyuluh pertanian',
                'indikator_kegiatan' => 'Jumlah penyuluh pertanian yang tersedia dan ditingkatkan kapasitasnya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            172 =>
            array (
                'id' => 173,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Pembangunan dan peningkatan sistem konsultasi oleh penyuluh swadaya dan petani champion',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            173 =>
            array (
                'id' => 174,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Kampanye konsumsi produk IRT kakao',
                'id_lembaga' => 6,
                'nomenklatur' => 'Produksi dan Pengolahan, Pemasaran, Sumber Daya Manusia, serta Desain dan Teknologi',
                'indikator_kegiatan' => 'Jumlah Unit Usaha UMKM yang Mendapatkan Fasilitas Produksi dan Pengolahan, Pemasaran, Sumber Daya Manusia, Serta Desain dan Teknologi',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            174 =>
            array (
                'id' => 175,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Pendampingan inisiasi kemitraan dengan industri dan pembeli potensial',
                'id_lembaga' => 6,
                'nomenklatur' => 'Fasilitasi Inkubator Usaha Mikro',
                'indikator_kegiatan' => 'Jumlah Usaha Mikro yang Terfasilitasi',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            175 =>
            array (
                'id' => 176,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Pelatihan penyusunan proposal',
                'id_lembaga' => 6,
                'nomenklatur' => 'Peningkatan Pemahaman dan Pengetahuan UMKM serta Kapasitas dan Kompetensi SDM UMKM dan Kewirausahaan melalui Pendidikan dan Pelatihan',
                'indikator_kegiatan' => 'Jumlah SDM yang Memahami Pengetahuan Usaha Mikro dan Kewirausahaan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            176 =>
            array (
                'id' => 177,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Pelatihan penyusunan rencana bisnis',
                'id_lembaga' => 6,
                'nomenklatur' => 'Peningkatan Pemahaman dan Pengetahuan UMKM serta Kapasitas dan Kompetensi SDM UMKM dan Kewirausahaan melalui Pendidikan dan Pelatihan',
                'indikator_kegiatan' => 'Jumlah SDM yang Memahami Pengetahuan Usaha Mikro dan Kewirausahaan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            177 =>
            array (
                'id' => 178,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Daerah',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Daerah',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Desa',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            178 =>
            array (
                'id' => 179,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Fasilitasi Kerjasama Antar Desa Dalam Kabupaten/Kota',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Kerjasama Antar Desa Dalam Kabupaten/Kota',
                'indikator_kegiatan' => 'Jumlah Dokumen Kerjasama Antar Desa dalam Kabupaten/Kota',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            179 =>
            array (
                'id' => 180,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Pelatihan pengelolaan pasca panen kakao',
                'id_lembaga' => 6,
                'nomenklatur' => 'Peningkatan Pemahaman dan Pengetahuan UMKM serta Kapasitas dan Kompetensi SDM UMKM dan Kewirausahaan melalui Pendidikan dan Pelatihan',
                'indikator_kegiatan' => 'Jumlah SDM yang Memahami Pengetahuan Usaha Mikro dan Kewirausahaan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            180 =>
            array (
                'id' => 181,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Pembentukan kelompok/unit usaha pengolahan kakao ',
                'id_lembaga' => 6,
                'nomenklatur' => 'Pembentukan Kelembagaan Ekonomi Petani',
                'indikator_kegiatan' => 'Jumlah Kelembagaan Ekonomi Petani yang dibentuk',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            181 =>
            array (
                'id' => 182,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Pendampingan penguatan kelembagaan dan manajemen keuangan',
                'id_lembaga' => 6,
                'nomenklatur' => 'Peningkatan Pemahaman dan Pengetahuan UMKM serta Kapasitas dan Kompetensi SDM UMKM dan Kewirausahaan melalui Pendidikan dan Pelatihan',
                'indikator_kegiatan' => 'Jumlah SDM yang Memahami Pengetahuan Usaha Mikro dan Kewirausahaan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            182 =>
            array (
                'id' => 183,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Pelatihan diversifikasi produk turunan kakao',
                'id_lembaga' => 6,
                'nomenklatur' => 'Peningkatan Pemahaman dan Pengetahuan UMKM serta Kapasitas dan Kompetensi SDM UMKM dan Kewirausahaan melalui Pendidikan dan Pelatihan',
                'indikator_kegiatan' => 'Jumlah SDM yang Memahami Pengetahuan Usaha Mikro dan Kewirausahaan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            183 =>
            array (
                'id' => 184,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Daerah',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Daerah',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Desa',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            184 =>
            array (
                'id' => 185,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Fasilitasi Penataan, Pemberdayaan dan Pendayagunaan Kelembagaan Lembaga Kemasyarakatan Desa/Kelurahan (RT,RW,PKK,Posyandu,LPM dan Karang Taruna), Lembaga Adat Desa/Kelurahan dan Masyarakat Hukum Adat',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Penataan, Pemberdayaan dan Pendayagunaan Kelembagaan Lembaga Kemasyarakatan Desa/Kelurahan (RT,RW,PKK,Posyandu,LPM dan Karang Taruna), Lembaga Adat Desa/Kelurahan dan Masyarakat Hukum Adat',
                'indikator_kegiatan' => 'JJumlah Dokumen Hasil Penataan, Pemberdayaan dan Pendayagunaan Kelembagaan Lembaga Kemasyarakatan Desa/Kelurahan (RT,RW,PKK,Posyandu,LPM dan Karang Taruna), Lembaga Adat Desa/Kelurahan dan Masyarakat Hukum Adat',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            185 =>
            array (
                'id' => 186,
                'id_strategi' => 3,
                'id_intervensi' => 18,
                'kegiatan' => 'Fasilitasi Kerjasama Antar Desa Dalam Kabupaten/Kota',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Kerjasama Antar Desa Dalam Kabupaten/Kota',
                'indikator_kegiatan' => 'Jumlah Dokumen Kerjasama Antar Desa dalam Kabupaten/Kota',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            186 =>
            array (
                'id' => 187,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Membangun sistem informasi pasar untuk produk kakao',
                'id_lembaga' => 14,
                'nomenklatur' => 'Pengembangan Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik',
                'indikator_kegiatan' => 'Jumlah Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik yang Dikembangkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            187 =>
            array (
                'id' => 188,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Pelatihan pengolahan produk turunan kakao bagi KWT dan petani perempuan',
                'id_lembaga' => 6,
                'nomenklatur' => 'Pemberdayaan Kelembagaan Potensi dan Pengembangan Usaha Mikro',
                'indikator_kegiatan' => 'Jumlah Unit Usaha yang Telah Menerima Pembinaan dan Pendampingan Terhadap Usaha Mikro',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            188 =>
            array (
                'id' => 189,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Pendampingan pengembangan produk turunan kakao',
                'id_lembaga' => 6,
                'nomenklatur' => 'Pemberdayaan Kelembagaan Potensi dan Pengembangan Usaha Mikro',
                'indikator_kegiatan' => 'Jumlah Unit Usaha yang Telah Menerima Pembinaan dan Pendampingan Terhadap Usaha Mikro',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            189 =>
            array (
                'id' => 190,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Akses modal bagi UKM',
                'id_lembaga' => 6,
                'nomenklatur' => 'Fasilitasi Usaha Mikro Menjadi Usaha Kecil dalam Pengembangan Produksi dan Pengolahan, Pemasaran, SDM, serta Desain dan Teknologi',
                'indikator_kegiatan' => 'Jumlah Usaha Mikro yang Terfasilitasi',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            190 =>
            array (
                'id' => 191,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Fasilitasi pemerintah desa dalam pemanfaatan teknologi tepat guna',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi pemerintah desa dalam pemanfaatan teknologi tepat guna',
                'indikator_kegiatan' => 'Jumlah Laporan Hasil Fasilitasi Pemerintah Desa dalam Pemanfaatan Teknologi Tepat Guna',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            191 =>
            array (
                'id' => 192,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Daerah',
                'id_lembaga' => 3,
                'nomenklatur' => 'Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Daerah',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Fasilitasi Pengembangan Usaha Ekonomi Masyarakat dan Pemerintah Desa dalam Meningkatkan Pendapatan Asli Desa',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            192 =>
            array (
                'id' => 193,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Pelatihan perbaikan manajemen kebun',
                'id_lembaga' => 4,
                'nomenklatur' => 'Peningkatan Pemahaman dan Pengetahuan UMKM serta Kapasitas dan Kompetensi SDM UMKM dan Kewirausahaan melalui Pendidikan dan Pelatihan',
                'indikator_kegiatan' => 'Jumlah SDM yang Memahami Pengetahuan Usaha Mikro dan Kewirausahaan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            193 =>
            array (
                'id' => 194,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Pelibatan anak muda/kelompok pemuda dalam agribisnis kakao',
                'id_lembaga' => 6,
                'nomenklatur' => 'Peningkatan Pemahaman dan Pengetahuan UMKM serta Kapasitas dan Kompetensi SDM UMKM dan Kewirausahaan melalui Pendidikan dan Pelatihan',
                'indikator_kegiatan' => 'Jumlah SDM yang Memahami Pengetahuan Usaha Mikro dan Kewirausahaan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            194 =>
            array (
                'id' => 195,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Inkubator bisnis jasa sektor kakao guna mangatasi kelangkaan tenaga kerja terampil',
                'id_lembaga' => 6,
                'nomenklatur' => 'Pemberdayaan Melalui Kemitraan Usaha Mikro',
                'indikator_kegiatan' => 'Jumlah Unit Usaha yang Telah Melaksanakan Kemitraan Usaha Mikro',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            195 =>
            array (
                'id' => 196,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Membangun pasar diversifikasi kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            196 =>
            array (
                'id' => 197,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Perbaikan dan pembaharuan data produksi kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pengelolaan Data dalam Sistem Informasi Pemerintahan Daerah di Bidang Pembangunan Daerah',
                'indikator_kegiatan' => 'Jumlah Data dalam Sistem Informasi Pemerintahan Daerah di Bidang Pembangunan Daerah yang Dikelola',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            197 =>
            array (
                'id' => 198,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Fasilitasi kemitraan produsen dengan industri oleh pemerintah dan perguruan tinggi',
                'id_lembaga' => 6,
                'nomenklatur' => 'Fasilitasi Usaha Mikro Menjadi Usaha Kecil dalam Pengembangan Produksi dan Pengolahan, Pemasaran, SDM, serta Desain dan Teknologi',
                'indikator_kegiatan' => 'Jumlah Usaha Mikro yang Terfasilitasi',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            198 =>
            array (
                'id' => 199,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Pembangunan regulasi dan sistem insentif untuk pelaku agribisnis kakao',
                'id_lembaga' => 1,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            199 =>
            array (
                'id' => 200,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Pembangunan mekanisme penjaminan dari produsen dan konsumen',
                'id_lembaga' => 6,
                'nomenklatur' => 'Pengendalian dan Pemanfaatan Kawasan Pertanian',
                'indikator_kegiatan' => 'Luas kawasan pertanian  yang termanfaatkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            200 =>
            array (
                'id' => 201,
                'id_strategi' => 3,
                'id_intervensi' => 19,
                'kegiatan' => 'Pembentukan kelompok usaha tani yang mendapat pembinaan khusus untuk meningkatkan kualitas produksi',
                'id_lembaga' => 4,
                'nomenklatur' => 'Fasilitasi Pengembangan Inkubasi Secara Terpadu dan Berjenjang',
                'indikator_kegiatan' => 'Jumlah Inkubator yang Terfasilitasi',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            201 =>
            array (
                'id' => 202,
                'id_strategi' => 4,
                'id_intervensi' => 20,
                'kegiatan' => 'Pemantauan rantai pasok dan rantai nilai',
                'id_lembaga' => 6,
                'nomenklatur' => 'Kurasi, Peningkatan mutu produk, dan Kemitraan Usaha Mikro dengan Usaha Kecil dan Menengah melalui rantai pasok',
                'indikator_kegiatan' => 'Jumlah Usaha Mikro yang terfasilitasi Kurasi, Peningkatan mutu produk, dan Kemitraan dengan Usaha Kecil dan Menengah melalui rantai pasok',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            202 =>
            array (
                'id' => 203,
                'id_strategi' => 4,
                'id_intervensi' => 20,
                'kegiatan' => 'Pembentukan korporasi petani sebagai bagian dari rantai nilai',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            203 =>
            array (
                'id' => 204,
                'id_strategi' => 4,
                'id_intervensi' => 20,
                'kegiatan' => 'Pendampingan kelembagaan dan kapasitas teknis bagi korporasi petani',
                'id_lembaga' => 6,
                'nomenklatur' => 'Peningkatan Pemahaman dan Pengetahuan UMKM serta Kapasitas dan Kompetensi SDM UMKM dan Kewirausahaan melalui Pendidikan dan Pelatihan',
                'indikator_kegiatan' => 'Jumlah SDM yang Memahami Pengetahuan Usaha Mikro dan Kewirausahaan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            204 =>
            array (
                'id' => 205,
                'id_strategi' => 4,
                'id_intervensi' => 20,
                'kegiatan' => 'Penyusunan kebijakan sistem informasi harga untuk meningkatkan transparansi',
                'id_lembaga' => 1,
                'nomenklatur' => 'Perumusan Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan',
                'indikator_kegiatan' => 'Jumlah Rekomendasi atas Rencana Penetapan Peraturan Baru dan/atau Evaluasi Terhadap Pelaksanaan Peraturan yang Diterbitkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            205 =>
            array (
                'id' => 206,
                'id_strategi' => 4,
                'id_intervensi' => 20,
                'kegiatan' => 'Peningkatan kapasitas kelembagaan dan manajemen koperasi',
                'id_lembaga' => 6,
                'nomenklatur' => 'Penguatan Tata Kelola Kelembagaan Koperasi',
                'indikator_kegiatan' => 'Jumlah Koperasi yang Dilakukan Penguatan Tata Kelola Kelembagaan Koperasi',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            206 =>
            array (
                'id' => 207,
                'id_strategi' => 4,
                'id_intervensi' => 20,
                'kegiatan' => 'Pelatihan manajemen keuangan untuk petani dan kelompok tani',
                'id_lembaga' => 6,
                'nomenklatur' => 'Peningkatan Pemahaman dan Pengetahuan UMKM serta Kapasitas dan Kompetensi SDM UMKM dan Kewirausahaan melalui Pendidikan dan Pelatihan',
                'indikator_kegiatan' => 'Jumlah SDM yang Memahami Pengetahuan Usaha Mikro dan Kewirausahaan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            207 =>
            array (
                'id' => 208,
                'id_strategi' => 4,
                'id_intervensi' => 20,
                'kegiatan' => 'Pelatihan enterprenuership untuk petani dan keluarga petani',
                'id_lembaga' => 15,
                'nomenklatur' => 'Peningkatan Pemahaman dan Pengetahuan UMKM serta Kapasitas dan Kompetensi SDM UMKM dan Kewirausahaan melalui Pendidikan dan Pelatihan',
                'indikator_kegiatan' => 'Jumlah SDM yang Memahami Pengetahuan Usaha Mikro dan Kewirausahaan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            208 =>
            array (
                'id' => 209,
                'id_strategi' => 4,
                'id_intervensi' => 20,
                'kegiatan' => 'Pendampingan kemitraan untuk koperasi dan kelompok tani',
                'id_lembaga' => 6,
                'nomenklatur' => 'Fasilitasi Kemitraan Koperasi yang Keanggotaannya Daerah Kabupaten/Kota',
                'indikator_kegiatan' => 'Jumlah Koperasi yang Difasilitasi Kemitraannya',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            209 =>
            array (
                'id' => 210,
                'id_strategi' => 4,
                'id_intervensi' => 21,
                'kegiatan' => 'Pengembangan sistem pencatatan dan pengelolaan dokumen berbasis digital',
                'id_lembaga' => 14,
                'nomenklatur' => 'Pengembangan Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik',
                'indikator_kegiatan' => 'Jumlah Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik yang Dikembangkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            210 =>
            array (
                'id' => 211,
                'id_strategi' => 4,
                'id_intervensi' => 21,
                'kegiatan' => 'Bantuan sarana dan prasarana untuk mengakses internet',
                'id_lembaga' => 8,
                'nomenklatur' => 'Pengadaan Alat/Perangkat Sistem Informasi Kesehatan dan Jaringan Internet',
                'indikator_kegiatan' => 'Jumlah Dokumen Pelaksanaan Pengembangan dan Pengelolaan Sumber Daya Teknologi Informasi dan Komunikasi Pemerintah Daerah ',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            211 =>
            array (
                'id' => 212,
                'id_strategi' => 4,
                'id_intervensi' => 21,
                'kegiatan' => 'Pembangunan infrastruktur jaringan internet',
                'id_lembaga' => 8,
                'nomenklatur' => 'Pembangunan/Pengembangan/Pemeliharaan Sistem Layanan Informasi dan Komunikasi Bidang Perumahan dan Kawasan Permukiman',
                'indikator_kegiatan' => 'Jumlah Sistem Layanan Informasi dan Komunikasi Bidang Perumahan dan Kawasan Permukiman yang Terbangun/Terpelihara',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            212 =>
            array (
                'id' => 213,
                'id_strategi' => 4,
                'id_intervensi' => 21,
                'kegiatan' => 'Peningkatan kapasitas penguasaan sistem digital di tingkat kelompok tani dan pelaku rantai nilai',
                'id_lembaga' => 8,
                'nomenklatur' => 'Diseminasi  Informasi  Teknis,  Sosial,  Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            213 =>
            array (
                'id' => 214,
                'id_strategi' => 4,
                'id_intervensi' => 22,
                'kegiatan' => 'Pembangunan sistem traceability (penelurusan) open source yang profesional',
                'id_lembaga' => 14,
                'nomenklatur' => 'Pengembangan Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik',
                'indikator_kegiatan' => 'Jumlah Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik yang Dikembangkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            214 =>
            array (
                'id' => 215,
                'id_strategi' => 4,
                'id_intervensi' => 22,
                'kegiatan' => 'Penyediaan jasa/layanan traceability komoditas oleh koperasi dengan fasilitasi dari pemerintah',
                'id_lembaga' => 14,
                'nomenklatur' => 'Pengembangan Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik',
                'indikator_kegiatan' => 'Jumlah Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik yang Dikembangkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            215 =>
            array (
                'id' => 216,
                'id_strategi' => 4,
                'id_intervensi' => 22,
                'kegiatan' => 'Organisasi petani sebagai penyedia layanan sistem database',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            216 =>
            array (
                'id' => 217,
                'id_strategi' => 4,
                'id_intervensi' => 22,
                'kegiatan' => 'Peningkatan kapasitas petani untuk pengelolaan sistem digital',
                'id_lembaga' => 14,
                'nomenklatur' => 'Pengembangan Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik',
                'indikator_kegiatan' => 'Jumlah Aplikasi dan Proses Bisnis Pemerintahan Berbasis Elektronik yang Dikembangkan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            217 =>
            array (
                'id' => 218,
                'id_strategi' => 4,
                'id_intervensi' => 22,
                'kegiatan' => 'Pendampingan sertifikasi secara berkelanjutan',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            218 =>
            array (
                'id' => 219,
                'id_strategi' => 4,
                'id_intervensi' => 22,
                'kegiatan' => 'Sosialisasi dan fasilitasi sertifikasi oleh pemerintah',
                'id_lembaga' => 4,
                'nomenklatur' => 'Fasilitasi Sertifikasi dan Standardisasi Usaha Mikro',
                'indikator_kegiatan' => 'Jumlah Usaha Mikro yang Terfasilitasi',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            219 =>
            array (
                'id' => 220,
                'id_strategi' => 4,
                'id_intervensi' => 22,
                'kegiatan' => 'Pembangunan sistem kontrol terhadap penerapan sertifikasi oleh pemerintah',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            220 =>
            array (
                'id' => 221,
                'id_strategi' => 4,
                'id_intervensi' => 22,
                'kegiatan' => 'Mengintegrasikan indikator sertifikasi kakao dengan indikator kinerja daerah',
                'id_lembaga' => 1,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            221 =>
            array (
                'id' => 222,
                'id_strategi' => 5,
                'id_intervensi' => 23,
                'kegiatan' => 'Membangun skema penjaminan perminjaman modal bagi petani dengan pola budidaya ramah lingkungan',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            222 =>
            array (
                'id' => 223,
                'id_strategi' => 5,
                'id_intervensi' => 24,
                'kegiatan' => 'Pendampingan kepada kelompok kebun organik',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pendampingan penggunaan sarana pendukung pertanian',
                'indikator_kegiatan' => 'Jumlah pendampingan penggunaan sarana pendukung pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            223 =>
            array (
                'id' => 224,
                'id_strategi' => 5,
                'id_intervensi' => 24,
                'kegiatan' => 'Memberikan insentif kepada petani dengan pola budidaya ramah lingkungan',
                'id_lembaga' => 5,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            224 =>
            array (
                'id' => 225,
                'id_strategi' => 5,
                'id_intervensi' => 24,
                'kegiatan' => 'Memberikan insentif bantuan alat pertanian kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penyediaan dan Pemanfaatan Sarana dan Prasarana Penyuluhan Pertanian',
                'indikator_kegiatan' => 'Jumlah Sarana dan Prasarana Penyuluhan Pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            225 =>
            array (
                'id' => 226,
                'id_strategi' => 5,
                'id_intervensi' => 24,
                'kegiatan' => 'Memfasilitasi kapasitas kebun organik',
                'id_lembaga' => 4,
                'nomenklatur' => 'Pendampingan penggunaan sarana pendukung pertanian',
                'indikator_kegiatan' => 'Jumlah pendampingan penggunaan sarana pendukung pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            226 =>
            array (
                'id' => 227,
                'id_strategi' => 5,
                'id_intervensi' => 24,
                'kegiatan' => 'Membangun skema penjaminan modal bagi petani dengan pola budidaya ramah lingkugan',
                'id_lembaga' => 4,
                'nomenklatur' => 'Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'indikator_kegiatan' => 'Jumlah Dokumen Hasil Penelitian dan Pengembangan Pertanian, Perkebunan dan Pangan',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            227 =>
            array (
                'id' => 228,
                'id_strategi' => 5,
                'id_intervensi' => 24,
                'kegiatan' => 'Sosialisasi jenis instrumen ekonomi jasa lingkungan hidup',
                'id_lembaga' => 5,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            228 =>
            array (
                'id' => 229,
                'id_strategi' => 5,
                'id_intervensi' => 24,
                'kegiatan' => 'Memfasilitasi sertifikasi dan aspek prioritas untuk insentif',
                'id_lembaga' => 5,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            229 =>
            array (
                'id' => 230,
                'id_strategi' => 5,
                'id_intervensi' => 25,
                'kegiatan' => 'Sosialisasi label ramah lingkungan hidup',
                'id_lembaga' => 5,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            230 =>
            array (
                'id' => 231,
                'id_strategi' => 5,
                'id_intervensi' => 25,
                'kegiatan' => 'Pendampingan label ramah lingkungan hidup untuk unit usaha kakao',
                'id_lembaga' => 4,
                'nomenklatur' => 'Diseminasi Informasi Teknis, Sosial, Ekonomi dan Inovasi Pertanian',
                'indikator_kegiatan' => 'Jumlah diseminasi informasi teknis, sosial, ekonomi dan inovasi pertanian',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            231 =>
            array (
                'id' => 232,
                'id_strategi' => 5,
                'id_intervensi' => 26,
                'kegiatan' => 'Penyusunan kebijakan daerah terkait dana pencemaran dan kerusakan lingkungan hidup',
                'id_lembaga' => 1,
                'nomenklatur' => 'Koordinasi, Sinkronisasi, dan Pelaksanaan Pencegahan Pencemaran Lingkungan Hidup Dilaksanakan Terhadap Media Tanah, Air, Udara, dan Laut',
                'indikator_kegiatan' => 'Jumlah Dokumen Uji Kualitas Lingkunagn Hidup Dilaksanakan Terhadap Media Tanah, Air, Udara, dan Laut',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            232 =>
            array (
                'id' => 233,
                'id_strategi' => 5,
                'id_intervensi' => 26,
                'kegiatan' => 'Monitoring dan evaluasi',
                'id_lembaga' => 1,
                'nomenklatur' => 'Pelaksanaan Sosialisasi, Pembinaan, Monitoring, Evaluasi, dan Pelaporan',
                'indikator_kegiatan' => 'Meningkatnya Jumlah Kegiatan Sosialisasi, Pembinaan, Monitoring, Evaluasi, dan Pelaporan Pelaksanaan Upaya Inventarisasi GRK, Mitigasi, dan Adaptasi Perubahan Iklim',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            233 =>
            array (
                'id' => 234,
                'id_strategi' => 5,
                'id_intervensi' => 27,
                'kegiatan' => 'Penyusunan kebijakan daerah terkait penghargaan kinerja perlindungan dan pengelolaan lingkungan hidup',
                'id_lembaga' => 1,
                'nomenklatur' => 'Koordinasi, Sinkronisasi, dan Pelaksanaan Pencegahan Pencemaran Lingkungan Hidup Dilaksanakan Terhadap Media Tanah, Air, Udara, dan Laut',
                'indikator_kegiatan' => 'Jumlah Dokumen Uji Kualitas Lingkunagn Hidup Dilaksanakan Terhadap Media Tanah, Air, Udara, dan Laut',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            234 =>
            array (
                'id' => 235,
                'id_strategi' => 5,
                'id_intervensi' => 27,
                'kegiatan' => 'Sosialisasi kebijakan',
                'id_lembaga' => 1,
                'nomenklatur' => 'Pelaksanaan Sosialisasi, Pembinaan, Monitoring, Evaluasi, dan Pelaporan',
                'indikator_kegiatan' => 'Meningkatnya Jumlah Kegiatan Sosialisasi, Pembinaan, Monitoring, Evaluasi, dan Pelaporan Pelaksanaan Upaya Inventarisasi GRK, Mitigasi, dan Adaptasi Perubahan Iklim',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            ),
            235 =>
            array (
                'id' => 236,
                'id_strategi' => 5,
                'id_intervensi' => 27,
                'kegiatan' => 'Monitoring dan evaluasi kinerja perusahaan, komunitas, dan perorangan',
                'id_lembaga' => 1,
                'nomenklatur' => 'Pelaksanaan Sosialisasi, Pembinaan, Monitoring, Evaluasi, dan Pelaporan',
                'indikator_kegiatan' => 'Meningkatnya Jumlah Kegiatan Sosialisasi, Pembinaan, Monitoring, Evaluasi, dan Pelaporan Pelaksanaan Upaya Inventarisasi GRK, Mitigasi, dan Adaptasi Perubahan Iklim',
                'periode' => '2023-2024',
                'target_volume' => '',
                'target_anggaran' => ''
            )
        ));
    }
}
