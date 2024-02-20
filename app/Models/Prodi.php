<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'nama',
        'keterangan',
        'hastag',
        'foto',
        'isi',
    ];
}
