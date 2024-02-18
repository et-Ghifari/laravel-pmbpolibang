<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visis = Visi::paginate();
        return view('apps.visi.index', compact('visis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps.visi.add-visi');
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
        $image->storeAs('public/visi', $image->hashName());

        Visi::create([
            'foto'=>$image->hashName(),
            'hastag'=>$request['hastag'],
            'isi'=>$request['isi'],
        ]);

        return redirect(route('visi.index'))->with('success', 'Mengunggah Menu Visi Misi Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Visi $visi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visi $visi)
    {
        return view('apps.visi.edit-visi')->with('visi', $visi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visi $visi)
    {
        $this->validate($request, [
            'foto'     => 'required|image|mimes:jpeg,jpg,png',
        ]);
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $image->storeAs('public/visi', $image->hashName());
            Storage::delete('public/visi/'.$visi->foto);
            $visi->update([
                'foto'=>$image->hashName(),
                'hastag'=>$request['hastag'],
                'isi'=>$request['isi'],
            ]);
            return redirect(route('visi.index'))->with('success', 'Menu Visi Misi berhasil di Ubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visi $visi)
    {
        Storage::delete('public/visi/'.$visi->foto);
        $visi->delete();
        return redirect(route('visi.index'))->with('success', 'Menu Visi Misi berhasil di Hapus!');
    }
}
