<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliding;

class PmbController extends Controller
{
    public function index()
    {
        return view('apps.pmb', [
            'slidings'=>Sliding::paginate()
        ]);
    }
}
