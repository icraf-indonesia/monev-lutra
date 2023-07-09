<?php

namespace Database\Seeders;

use App\Models\MonevStrategy;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonevStrategySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // [1.] Strategi
        MonevStrategy::create([
            'strategi' => 'Alokasi dan tata guna lahan berkelanjutan'
        ]);
        MonevStrategy::create([
            'strategi' => 'Meningkatkan akses masyarakat terutama petani kakao terhadap modal penghidupan'
        ]);
        MonevStrategy::create([
            'strategi' => 'Meningkatkan produktivitas dan diversifikasi produk kakao'
        ]);
        MonevStrategy::create([
            'strategi' => 'Memperbaiki rantai pasok yang berkelanjutan'
        ]);
        MonevStrategy::create([
            'strategi' => 'Insentif jasa ekosistem dari kakao berkelanjutan'
        ]);
    }
}
