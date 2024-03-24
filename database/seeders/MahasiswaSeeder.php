<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Mahasiswa::firstOrCreate([
            'nim' => 'V3421001',
            'nama' => 'budi',
            'email' => 'budi@budi',
            'tanggallahir' => '2000-01-01',
            'umur' => 20,
            'gender' => 1,
            'alamat' => 'jalan jalan',
        ]);
    }
}
