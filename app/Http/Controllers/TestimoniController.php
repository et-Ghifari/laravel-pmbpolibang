<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonis = Testimoni::paginate();
        return view('apps.testimoni.index', compact('testimonis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps.testimoni.add-testimoni');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto'     => 'required|image|mimes:jpeg,jpg,png',
        ]);
        $image = $request->file('foto');
        $image->storeAs('public/testimoni', $image->hashName());

        Testimoni::create([
            'foto'=>$image->hashName(),
            'nama'=>$request['nama'],
            'jabatan'=>$request['jabatan'],
            'isi'=>$request['isi'],
        ]);

        return redirect(route('testimoni.index'))->with('success', 'Mengunggah Menu Testimoni Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni)
    {
        return view('apps.testimoni.edit-testimoni')->with('testimoni', $testimoni);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $this->validate($request, [
            'foto'     => 'required|image|mimes:jpeg,jpg,png',
        ]);
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $image->storeAs('public/testimoni', $image->hashName());
            Storage::delete('public/testimoni/'.$testimoni->foto);
            $testimoni->update([
                'foto'=>$image->hashName(),
                'nama'=>$request['nama'],
                'jabatan'=>$request['jabatan'],
                'isi'=>$request['isi'],
            ]);
            return redirect(route('testimoni.index'))->with('success', 'Menu Testimoni berhasil di Ubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        Storage::delete('public/testimoni/'.$testimoni->foto);
        $testimoni->delete();
        return redirect(route('testimoni.index'))->with('success', 'Menu Testimoni berhasil di Hapus!');
    }
}
