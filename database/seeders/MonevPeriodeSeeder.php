<?php

namespace Database\Seeders;

use App\Models\MonevPeriode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonevPeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monev_periodes')->delete();

        MonevPeriode::create([ 'periode' => '2023-2024' ]);
        MonevPeriode::create([ 'periode' => '2024-2025' ]);
    }
}
