<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /***** UPDATE *****/
        $this->call(IndikatorStakeholderSeeder::class);
        // $this->call(KegiatanSeeder::class);
        $this->call(LembagaSeeder::class);
        $this->call(LuasAgroforestriKakaoSeeder::class);
        $this->call(LuasAlokasiLahanKakaoSeeder::class);
        $this->call(LuasKawasanHutanSeeder::class);
        $this->call(MonevCapaianSeeder::class);
        $this->call(MonevIndikatorMakroSeeder::class);
        $this->call(MonevIndikatorSeeder::class);
        $this->call(MonevIntervensiSeeder::class);
        $this->call(MonevKegiatanSeeder::class);
        $this->call(MonevPeriodeKegiatanSeeder::class);
        $this->call(MonevPeriodeSeeder::class);
        $this->call(MonevStrategySeeder::class);
        $this->call(StakeholderSeeder::class);
        $this->call(UsersTableSeeder::class);
        /***** END UPDATE *****/
    }
}
