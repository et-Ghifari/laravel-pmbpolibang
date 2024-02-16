<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'angkatan',
        'jalur',
        'beasiswa',
        'prodi',
        'kelas',
        'nisn',
        'nik',
        'nama',
        'tptLahir',
        'tglLahir',
        'blnLahir',
        'thnLahir',
        'jk',
        'anak',
        'saudara',
        'berat',
        'tinggi',
        'jas',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kodepos',
        'nohp',
        'email',
        'sekolah',
        'skhun',
        'lulus',
        'kk',
        'nikAyah',
        'namaAyah',
        'pekerjaanA',
        'pendidikanA',
        'nikIbu',
        'namaIbu',
        'pekerjaanI',
        'pendidikanI',
        'penghasilan',
        'lomba',
        'tingkat',
        'peringkat',
        'tahun',
        'organisasi',
        'keadaan',
        'sumber',
    ];
}
