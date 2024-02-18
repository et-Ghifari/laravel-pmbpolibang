<?php

namespace App\Http\Controllers;

use App\Models\Biaya;
use Illuminate\Http\Request;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biayas = Biaya::paginate();
        return view('apps.biaya.index', compact('biayas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Biaya $biaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biaya $biaya)
    {
        return view('apps.biaya.edit-biaya')->with('biaya', $biaya);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biaya $biaya)
    {
        $biaya->update([
            'judul'=>$request['judul'],
            'total'=>$request['total'],
            'sumbangan'=>$request['sumbangan'],
            'semester'=>$request['semester'],
            'jas'=>$request['jas'],
            'posma'=>$request['posma'],
            'sarung'=>$request['sarung'],
            'bulanan'=>$request['bulanan'],
            'almari'=>$request['almari'],
            'loundry'=>$request['loundry'],
            'class'=>$request['class'],
        ]);
        return redirect(route('biaya.index'))->with('success', 'Menu Biaya berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biaya $biaya)
    {
        //
    }
}
