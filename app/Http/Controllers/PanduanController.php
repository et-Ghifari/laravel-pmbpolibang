<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PanduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $panduans = Panduan::paginate();
        return view('apps.panduan.index', compact('panduans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps.panduan.add-panduan');
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
        $image->storeAs('public/panduan', $image->hashName());

        Panduan::create([
            'foto'=>$image->hashName(),
        ]);

        return redirect(route('panduan.index'))->with('success', 'Mengunggah Menu Panduan Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Panduan $panduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Panduan $panduan)
    {
        return view('apps.panduan.edit-panduan')->with('panduan', $panduan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Panduan $panduan)
    {
        $this->validate($request, [
            'foto'     => 'required|image|mimes:jpeg,jpg,png',
        ]);
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $image->storeAs('public/panduan', $image->hashName());
            Storage::delete('public/panduan/'.$panduan->foto);
            $panduan->update([
                'foto'=>$image->hashName(),
            ]);
            return redirect(route('panduan.index'))->with('success', 'Menu Panduan berhasil di Ubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Panduan $panduan)
    {
        Storage::delete('public/panduan/'.$panduan->foto);
        $panduan->delete();
        return redirect(route('panduan.index'))->with('success', 'Menu Panduan berhasil di Hapus!');
    }
}
