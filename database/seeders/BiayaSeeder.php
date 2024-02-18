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
            'total'=>4675000,
            'sumbangan'=>1500000,
            'semester'=>2500000,
            'jas'=>200000,
            'posma'=>350000,
            'sarung'=>125000,
            'bulanan'=>650000,
            'almari'=>600000,
            'loundry'=>70000,
            'class'=>'na',
        ]);
        Biaya::create([
            'judul'=>'Kelas Karyawan',
            'total'=>5175000,
            'sumbangan'=>1500000,
            'semester'=>3000000,
            'jas'=>200000,
            'posma'=>350000,
            'sarung'=>125000,
            'bulanan'=>650000,
            'almari'=>600000,
            'loundry'=>70000,
            'class'=>'na',
        ]);
        Biaya::create([
            'judul'=>'Kelas Reguler + Mondok',
            'total'=>5995000,
            'sumbangan'=>1500000,
            'semester'=>2500000,
            'jas'=>200000,
            'posma'=>350000,
            'sarung'=>125000,
            'bulanan'=>650000,
            'almari'=>600000,
            'loundry'=>70000,
            'class'=>'',
        ]);
    }
}
