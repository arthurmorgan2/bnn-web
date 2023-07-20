<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PasienBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasien_baru')->insert([
            'nama_lengkap' => 'Nura Imansyah',
            'nik' => Str::random(40),
            'tempat_lahir' => 'Yogyakarta',
            'tanggal_lahir' => '15 Januari 2001',
            'jenis_kelamin' => 1,
            'alamat_lengkap' => 'Menayu lor',
            'agama' => 'islam',
            'golongan_darah' => 4,
            'no_wa' => 895409042060,
            'email' => 'nurakura9@gmail.com',
        ]);
    }
}
