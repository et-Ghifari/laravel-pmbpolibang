<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = Prodi::paginate();
        return view('apps.prodi.index', compact('prodis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps.prodi.add-prodi');
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
        $image->storeAs('public/prodi', $image->hashName());

        Prodi::create([
            'foto'=>$image->hashName(),
            'judul'=>$request['judul'],
            'nama'=>$request['nama'],
            'keterangan'=>$request['keterangan'],
            'hastag'=>$request['hastag'],
            'isi'=>$request['isi'],
        ]);

        return redirect(route('prodi.index'))->with('success', 'Mengunggah Menu Prodi Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        return view('apps.prodi.edit-prodi')->with('prodi', $prodi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        $this->validate($request, [
            'foto'     => 'required|image|mimes:jpeg,jpg,png',
        ]);
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $image->storeAs('public/prodi', $image->hashName());
            Storage::delete('public/prodi/'.$prodi->foto);
            $prodi->update([
                'foto'=>$image->hashName(),
                'judul'=>$request['judul'],
                'nama'=>$request['nama'],
                'keterangan'=>$request['keterangan'],
                'hastag'=>$request['hastag'],
                'isi'=>$request['isi'],
            ]);
            return redirect(route('prodi.index'))->with('success', 'Menu Prodi berhasil di Ubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        Storage::delete('public/prodi/'.$prodi->foto);
        $prodi->delete();
        return redirect(route('prodi.index'))->with('success', 'Menu Prodi berhasil di Hapus!');
    }
}
