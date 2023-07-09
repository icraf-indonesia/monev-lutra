<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pokja 1',
            'email'=>'pokja1@gmail.com',
            'role'=>'admin',
            'password'=>Hash::make('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'password'=>Hash::make('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'Kontributor 1',
            'email'=>'kontributor1@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'Kontributor 2',
            'email'=>'kontributor2@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('123456')
        ]);
    }
}
