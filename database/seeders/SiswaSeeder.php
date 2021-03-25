<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            [
                'nisn' => '123456781',
                'nis' => '54321',
                'nama' => 'Agus',
                'id_kelas' => 10,
                'alamat' => 'Jln. Gatot Subroto',
                'no_telp' => '09888888',
                'id_spp' => 123451,
            ],
            [
                'nisn' => '123456782',
                'nis' => '54322',
                'nama' => 'Yosi',
                'id_kelas' => 10,
                'alamat' => 'Jln. Soekarno',
                'no_telp' => '09888888',
                'id_spp' => 123452,
            ],
            [
                'nisn' => '123456783',
                'nis' => '54323',
                'nama' => 'Carel',
                'id_kelas' => 11,
                'alamat' => 'Jln. Soeharto',
                'no_telp' => '09888888',
                'id_spp' => 123453,
            ],
            [
                'nisn' => '123456784',
                'nis' => '54324',
                'nama' => 'Tegar',
                'id_kelas' => 11,
                'alamat' => 'Jln. Jend Sudirman',
                'no_telp' => '09888888',
                'id_spp' => 123454,
            ],
            [
                'nisn' => '123456785',
                'nis' => '54325',
                'nama' => 'Alful',
                'id_kelas' => 12,
                'alamat' => 'Jln. Moehammad Yamin',
                'no_telp' => '09888888',
                'id_spp' => 123455,
            ],
            [
                'nisn' => '123456786',
                'nis' => '54326',
                'nama' => 'Anisa',
                'id_kelas' => 12,
                'alamat' => 'Jln. Asia Afrika ',
                'no_telp' => '09888888',
                'id_spp' => 123456,
            ]
        ]);
    }
}
