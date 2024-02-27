<?php

namespace Database\Seeders;

use App\Models\MonevIntervensi;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonevIntervensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('monev_intervensis')->delete();
        // [1.1] Intervensi
        MonevIntervensi::create([
            'intervensi' => '1.1 Alokasi kebun kakao dengan mempertimbangkan kesesuaian lahan dan tata ruang kabupaten',
            'id_strategi' => 1
        ]);
        MonevIntervensi::create([
            'intervensi'  => '1.2 Alokasi peremajaaan lahan kakao',
            'id_strategi' => 1
        ]);
        MonevIntervensi::create([
            'intervensi'  => '1.3 Perluasan terbatas kebun kakao',
            'id_strategi' => 1
        ]);
        MonevIntervensi::create([
            'intervensi'  => '1.4 Pengembangan agroforestri kakao',
            'id_strategi' => 1
        ]);
        MonevIntervensi::create([
            'intervensi'  => '2.1 Kemudahan akses sertifikasi lahan',
            'id_strategi' => 2
        ]);
        MonevIntervensi::create([
            'intervensi'  => '2.2 Optimalisasi perhutanan sosial berbasis kakao',
            'id_strategi' => 2
        ]);
        MonevIntervensi::create([
            'intervensi'  => '2.3 Penyuluhan kakao yang tepat sasaran',
            'id_strategi' => 2
        ]);
        MonevIntervensi::create([
            'intervensi'  => '2.4 Pengembangan kelembagaan keuangan petani kakao',
            'id_strategi' => 2
        ]);
        MonevIntervensi::create([
            'intervensi'  => '2.5 Bantuan peralatan pertanian',
            'id_strategi' => 2
        ]);
        MonevIntervensi::create([
            'intervensi'  => '2.6 Korporasi petani kakao',
            'id_strategi' => 2
        ]);
        MonevIntervensi::create([
            'intervensi'  => '2.7 Pelibatan dan pemberdayaan perempuan',
            'id_strategi' => 2
        ]);
        MonevIntervensi::create([
            'intervensi'  => '2.8 Pelatihan dan penyediaan sarana dan prasarana untuk menjaga keselamatan dan kesehatan kerja',
            'id_strategi' => 2
        ]);
        MonevIntervensi::create([
            'intervensi'  => '2.9 Sistem pencegahan dan pengawasan pekerja anak',
            'id_strategi' => 2
        ]);
        MonevIntervensi::create([
            'intervensi'  => '2.10 Kebijakan kakao lestari',
            'id_strategi' => 2
        ]);
        MonevIntervensi::create([
            'intervensi'  => '2.11 Asuransi pertanian kakao',
            'id_strategi' => 2
        ]);
        MonevIntervensi::create([
            'intervensi'  => '3.1 Budidaya kakao dengan penerapan GAP',
            'id_strategi' => 3
        ]);
        MonevIntervensi::create([
            'intervensi'  => '3.2 Akses terhadap sarana dan prasarana pendukung usaha tani kakao',
            'id_strategi' => 3
        ]);
        MonevIntervensi::create([
            'intervensi'  => '3.3 Diversifikasi produk kakao',
            'id_strategi' => 3
        ]);
        MonevIntervensi::create([
            'intervensi'  => '3.4 Agribisnis kakao',
            'id_strategi' => 3
        ]);
        MonevIntervensi::create([
            'intervensi'  => '4.1 Pengembangan rantai pasok yang efektif dan integratif',
            'id_strategi' => 4
        ]);
        MonevIntervensi::create([
            'intervensi'  => '4.2 Sistem pencatatan dan pengelolaan dokumen',
            'id_strategi' => 4
        ]);
        MonevIntervensi::create([
            'intervensi'  => '4.3 Sertifikasi komoditas kakao berkelanjutan',
            'id_strategi' => 4
        ]);
        MonevIntervensi::create([
            'intervensi'  => '5.1 Kompensasi Imbal Jasa Lingkungan Hidup (KIJLH) antar daerah berupa Transfer Anggaran berbasis Ekologi (TAKE) di tingkat kabupaten untuk peningkatan fungsi daerah aliran sungai (DAS), keanekaragaman hayati, dan stok karbon',
            'id_strategi' => 5
        ]);
        MonevIntervensi::create([
            'intervensi'  => '5.2 Pembayaran jasa lingkungan hidup (PJLH) untuk peningkatan fungsi DAS, keanekaragaman hayati dan kontrak berbasis performa untuk peningkatan stok karbon',
            'id_strategi' => 5
        ]);
        MonevIntervensi::create([
            'intervensi'  => '5.3 Label ramah lingkungan hidup',
            'id_strategi' => 5
        ]);
        MonevIntervensi::create([
            'intervensi'  => '5.4 Dana penanggulangan pencemaran dan/atau kerusakan dan pemulihan lingkungan hidup',
            'id_strategi' => 5
        ]);
        MonevIntervensi::create([
            'intervensi'  => '5.5 Penghargaan kinerja di bidang perlindungan dan pengelolaan lingkungan hidup',
            'id_strategi' => 5
        ]);
    }
}
