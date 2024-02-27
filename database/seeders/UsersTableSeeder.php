<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
            'id_stakeholder'=>13,
            'id_lembaga'=>0
        ]);
        DB::table('users')->insert([
            'name' => 'Kontributor 1',
            'username' => 'kontributor1',
            'email'=>'kontributor1@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('123456'),
            'id_stakeholder'=>13,
            'id_lembaga'=>0
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>13,
            'id_lembaga'=>0
        ]);
        DB::table('users')->insert([
            'name' => 'Bapperida',
            'username' => 'bapperida_lutra',
            'email'=>'bappelitbangda_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>1,
            'id_lembaga'=>1
        ]);
        DB::table('users')->insert([
            'name' => 'Distan',
            'username' => 'distan_lutra',
            'email'=>'distan_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>4,
            'id_lembaga'=>4
        ]);
        DB::table('users')->insert([
            'name' => 'DP2KUKM',
            'username' => 'disdagindkukm_lutra',
            'email'=>'disdagindkukm_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>6,
            'id_lembaga'=>6
        ]);
        DB::table('users')->insert([
            'name' => 'DLH',
            'username' => 'dlh_lutra',
            'email'=>'dlh_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>5,
            'id_lembaga'=>5
        ]);
        DB::table('users')->insert([
            'name' => 'DPMD',
            'username' => 'dpmdes_lutra',
            'email'=>'dpmdes_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>3,
            'id_lembaga'=>3
        ]);
        DB::table('users')->insert([
            'name' => 'DP3AP2KB',
            'username' => 'dp3a_lutra',
            'email'=>'dp3a_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>7,
            'id_lembaga'=>7
        ]);
        DB::table('users')->insert([
            'name' => 'Dinsos',
            'username' => 'dinsos_lutra',
            'email'=>'dinsos_lutra@gmail.com',
            'role'=>'kegiatan',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>11,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Diskominfo',
            'username' => 'diskominfo_lutra',
            'email'=>'diskominfo_lutra@gmail.com',
            'role'=>'kegiatan',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>11,
            'id_lembaga'=>14
        ]);
        DB::table('users')->insert([
            'name' => 'BPKPD',
            'username' => 'bpkpd_lutra',
            'email'=>'diskominfo_lutra1@gmail.com',
            'role'=>'kegiatan',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>11,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'BPKAD',
            'username' => 'bpkad_lutra',
            'email'=>'bpkad_lutra@gmail.com',
            'role'=>'kegiatan',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>11,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'KPH Rongkong',
            'username' => 'kphrongkong_lutra',
            'email'=>'kphrongkong_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>9,
            'id_lembaga'=>9
        ]);
        DB::table('users')->insert([
            'name' => 'Univ Andi Djemma Lutra',
            'username' => 'univandidjemma_lutra',
            'email'=>'univandidjemma_lutra@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'MARS Lutra',
            'username' => 'mars_lutra',
            'email'=>'mars_lutra@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Olam Indonesia',
            'username' => 'olam_indonesia',
            'email'=>'olam_indonesia@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Forum Kakao Lutra',
            'username' => 'forumkakao_lutra',
            'email'=>'forumkakao_lutra@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Asosiasi Kakao Lutra',
            'username' => 'asosiasikakao_lutra',
            'email'=>'asosiasikakao_lutra@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Asosiasi Kakao Doctor',
            'username' => 'kakaodoctor_lutra',
            'email'=>'kakaodoctor_lutra@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Chalodo H.R.',
            'username' => 'chalodo_lutra',
            'email'=>'chalodo_lutra@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Koperasi SIMULTAN',
            'username' => 'koperasi_simultan',
            'email'=>'koperasi_simultan@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'P4S Kakao',
            'username' => 'p4skakao',
            'email'=>'p4skakao@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Koperasi Masagena',
            'username' => 'koperasi_masagena',
            'email'=>'koperasi_masagena@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Readsi Lutra',
            'username' => 'readsi_lutra',
            'email'=>'readsi_lutra@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Universitas Hasanuddin',
            'username' => 'unhas',
            'email'=>'unhas@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Program ACTIVE',
            'username' => 'program_active',
            'email'=>'program_active@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Program Lascar Cocoa',
            'username' => 'lascar_cocoa',
            'email'=>'lascar_cocoa@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Save The Children',
            'username' => 'stchildren',
            'email'=>'stchildren@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'BPBD',
            'username' => 'bpbd_lutra',
            'email'=>'bpbd_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>2,
            'id_lembaga'=>2
        ]);
        DB::table('users')->insert([
            'name' => 'DPUTRPKP2',
            'username' => 'dputrpkp2_lutra',
            'email'=>'dputrpkp2_lutra@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>8,
            'id_lembaga'=>8
        ]);
        DB::table('users')->insert([
            'name' => 'Sekretariat Pokja',
            'username' => 'sekpokja',
            'email'=>'sekpokja@gmail.com',
            'role'=>'kontributor',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>10,
            'id_lembaga'=>10
        ]);
        DB::table('users')->insert([
            'name' => 'UKM Lutra',
            'username' => 'ukm_lutra',
            'email'=>'ukm_lutra@gmail.com',
            'role'=>'others',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>12,
            'id_lembaga'=>99
        ]);
        DB::table('users')->insert([
            'name' => 'Disnakertrans',
            'username' => 'disnakertrans',
            'email'=>'disnakertrans@gmail.com',
            'role'=>'kegiatan',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>11,
            'id_lembaga'=>15
        ]);
        DB::table('users')->insert([
            'name' => 'BPHL',
            'username' => 'bphl_lutra',
            'email'=>'bphl_lutra@gmail.com',
            'role'=>'kegiatan',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>11,
            'id_lembaga'=>11
        ]);
        DB::table('users')->insert([
            'name' => 'BPN',
            'username' => 'bpn_lutra',
            'email'=>'bpn_lutra@gmail.com',
            'role'=>'kegiatan',
            'password'=>Hash::make('lutra2023'),
            'id_stakeholder'=>11,
            'id_lembaga'=>12
        ]);


    }
}
