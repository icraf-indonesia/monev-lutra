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
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'Pokja 1',
            'username' => 'pokja1',
            'email'=>'pokja1@gmail.com',
            'role'=>'admin',
            'password'=>Hash::make('123456'),
            'id_stakeholder'=>0
        ]);
        DB::table('users')->insert([
            'name' => 'Kontributor 1',
            'username' => 'kontributor1',
            'email'=>'kontributor1@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('123456'),
            'id_stakeholder'=>0
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>0
        ]);
        DB::table('users')->insert([
            'name' => 'Bappelitbangda Lutra',
            'username' => 'bappelitbangda_lutra',
            'email'=>'bappelitbangda_lutra@gmail.com',
            'role'=>'admin',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>0
        ]);
        DB::table('users')->insert([
            'name' => 'Dinas Pertanian Lutra',
            'username' => 'distan_lutra',
            'email'=>'distan_lutra@gmail.com',
            'role'=>'admin',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>0
        ]);
        DB::table('users')->insert([
            'name' => 'Disdagindkukm Lutra',
            'username' => 'disdagindkukm_lutra',
            'email'=>'disdagindkukm_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>6
        ]);
        DB::table('users')->insert([
            'name' => 'DLH Lutra',
            'username' => 'dlh_lutra',
            'email'=>'dlh_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>4
        ]);
        DB::table('users')->insert([
            'name' => 'DPMDes Lutra',
            'username' => 'dpmdes_lutra',
            'email'=>'dpmdes_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>7
        ]);
        DB::table('users')->insert([
            'name' => 'DP3A Lutra',
            'username' => 'dp3a_lutra',
            'email'=>'dp3a_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>7
        ]);
        DB::table('users')->insert([
            'name' => 'Dinsos Lutra',
            'username' => 'dinsos_lutra',
            'email'=>'dinsos_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>11
        ]);
        DB::table('users')->insert([
            'name' => 'Diskominfo Lutra',
            'username' => 'diskominfo_lutra',
            'email'=>'diskominfo_lutra@gmail.com',
            'role'=>'admin',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>0
        ]);
        DB::table('users')->insert([
            'name' => 'BPKPD Lutra',
            'username' => 'bpkpd_lutra',
            'email'=>'diskominfo_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12
        ]);
        DB::table('users')->insert([
            'name' => 'BPKAD Lutra',
            'username' => 'bpkad_lutra',
            'email'=>'bpkad_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12
        ]);
        DB::table('users')->insert([
            'name' => 'KPHRongkong Lutra',
            'username' => 'kphrongkong_lutra',
            'email'=>'kphrongkong_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Univ Andi Djemma Lutra',
            'username' => 'univandidjemma_lutra',
            'email'=>'univandidjemma_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'MARS Lutra',
            'username' => 'mars_lutra',
            'email'=>'mars_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Olam Indonesia',
            'username' => 'olam_indonesia',
            'email'=>'olam_indonesia@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Forum Kakao Lutra',
            'username' => 'forumkakao_lutra',
            'email'=>'forumkakao_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Asosiasi Kakao Lutra',
            'username' => 'asosiasikakao_lutra',
            'email'=>'asosiasikakao_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Asosiasi Kakao Doctor',
            'username' => 'kakaodoctor_lutra',
            'email'=>'kakaodoctor_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Chalodo Lutra',
            'username' => 'chalodo_lutra',
            'email'=>'chalodo_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Koperasi SIMULTAN',
            'username' => 'koperasi_simultan',
            'email'=>'koperasi_simultan@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'P4S Kakao',
            'username' => 'p4skakao',
            'email'=>'p4skakao@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Koperasi Masagena',
            'username' => 'koperasi_masagena',
            'email'=>'koperasi_masagena@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Readsi Lutra',
            'username' => 'readsi_lutra',
            'email'=>'readsi_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Universitas Hasanuddin',
            'username' => 'unhas',
            'email'=>'unhas@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Program ACTIVE',
            'username' => 'program_active',
            'email'=>'program_active@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023')
        ]);
        DB::table('users')->insert([
            'name' => 'Program Lascar Cocoa',
            'username' => 'lascar_cocoa',
            'email'=>'lascar_cocoa@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Save The Children',
            'username' => 'stchildren',
            'email'=>'stchildren@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'Sekretariat Pokja',
            'username' => 'sekpokja',
            'email'=>'sekpokja@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'UKM Lutra',
            'username' => 'ukm_lutra',
            'email'=>'ukm_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>15
        ]);


    }
}
