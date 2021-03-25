<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'level' => 'admin',
            'password' => bcrypt(12345),
        ]);
        DB::table('users')->insert([
            [
                'name' => 'sigit',
                'level' => 'petugas',
                'password' => bcrypt(12345),
            ],
            [
                'name' => 'ambarwati',
                'level' => 'petugas',
                'password' => bcrypt(12345),
            ]
        ]);
        DB::table('users')->insert([
            [
                'name' => 'agus',
                'level' => 'siswa',
                'password' => bcrypt(12345),
            ],
            [
                'name' => 'yosi',
                'level' => 'siswa',
                'password' => bcrypt(12345),
            ],
            [
                'name' => 'carel',
                'level' => 'siswa',
                'password' => bcrypt(12345),
            ],
            [
                'name' => 'tegar',
                'level' => 'siswa',
                'password' => bcrypt(12345),
            ],
            [
                'name' => 'alful',
                'level' => 'siswa',
                'password' => bcrypt(12345),
            ],
            [
                'name' => 'anisa',
                'level' => 'siswa',
                'password' => bcrypt(12345),
            ],
        ]);
    }
}
