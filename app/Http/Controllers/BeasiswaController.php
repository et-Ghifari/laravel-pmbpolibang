<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beasiswas = Beasiswa::paginate();
        return view('apps.beasiswa.index', compact('beasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps.beasiswa.add-beasiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Beasiswa::create([
            'judul'=>$request['judul'],
            'isi'=>$request['isi'],
        ]);

        return redirect(route('beasiswa.index'))->with('success', 'Mengunggah Menu Beasiswa Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Beasiswa $beasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beasiswa $beasiswa)
    {
        return view('apps.beasiswa.edit-beasiswa')->with('beasiswa', $beasiswa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beasiswa $beasiswa)
    {
        $beasiswa->update([
            'judul'=>$request['judul'],
            'isi'=>$request['isi'],
        ]);
        return redirect(route('beasiswa.index'))->with('success', 'Menu Beasiswa berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beasiswa $beasiswa)
    {
        $beasiswa->delete();
        return redirect(route('prodi.index'))->with('success', 'Menu Prodi berhasil di Hapus!');
    }
}
