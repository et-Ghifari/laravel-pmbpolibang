<?php

namespace Database\Seeders;

use App\Models\Biaya;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Biaya::create([
            'judul'=>'Kelas Reguler',
            'sumbangan'=>1500000,
            'semester'=>2500000,
            'jas'=>200000,
            'posma'=>350000,
            'sarung'=>125000,
            'bulanan'=>650000,
            'almari'=>600000,
            'loundry'=>70000,
        ]);
        Biaya::create([
            'judul'=>'Kelas Karyawan',
            'sumbangan'=>1500000,
            'semester'=>3000000,
            'jas'=>200000,
            'posma'=>350000,
            'sarung'=>125000,
            'bulanan'=>650000,
            'almari'=>600000,
            'loundry'=>70000,
        ]);
        Biaya::create([
            'judul'=>'Kelas Reguler + Mondok',
            'sumbangan'=>1500000,
            'semester'=>2500000,
            'jas'=>200000,
            'posma'=>350000,
            'sarung'=>125000,
            'bulanan'=>650000,
            'almari'=>600000,
            'loundry'=>70000,
        ]);
    }
}
