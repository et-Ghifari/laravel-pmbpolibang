<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliding;
use App\Models\Visi;
use App\Models\Panduan;
use App\Models\Beasiswa;
use App\Models\Prodi;
use App\Models\Biaya;
use App\Models\Facility;
use App\Models\Testimoni;

class PmbController extends Controller
{
    public function index()
    {
        return view('apps.pmb', [
            'slidings'=>Sliding::paginate(),
            'visis'=>Visi::paginate(),
            'panduans'=>Panduan::paginate(),
            'beasiswas'=>Beasiswa::paginate(),
            'prodis'=>Prodi::paginate(),
            'biayas'=>Biaya::paginate(),
            'facilities'=>Facility::paginate(),
            'testimonis'=>Testimoni::paginate(),
        ]);
    }
}
