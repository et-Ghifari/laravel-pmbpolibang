<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities = Facility::paginate();
        return view('apps.fasilitas.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps.fasilitas.add-fasilitas');
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
        $image->storeAs('public/fasilitas', $image->hashName());

        Facility::create([
            'foto'=>$image->hashName(),
            'judul'=>$request['judul'],
            'keterangan'=>$request['keterangan'],
        ]);

        return redirect(route('facilities.index'))->with('success', 'Mengunggah Menu Fasilitas Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facility $facility)
    {
        return view('apps.fasilitas.edit-fasilitas')->with('facility', $facility);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facility $facility)
    {
        $this->validate($request, [
            'foto'     => 'required|image|mimes:jpeg,jpg,png',
        ]);
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $image->storeAs('public/fasilitas', $image->hashName());
            Storage::delete('public/fasilitas/'.$facility->foto);
            $facility->update([
                'foto'=>$image->hashName(),
                'judul'=>$request['judul'],
                'keterangan'=>$request['keterangan'],
            ]);
            return redirect(route('facilities.index'))->with('success', 'Menu Fasilitas berhasil di Ubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facility $facility)
    {
        Storage::delete('public/fasilitas/'.$facility->foto);
        $facility->delete();
        return redirect(route('facilities.index'))->with('success', 'Menu Fasilitas berhasil di Hapus!');
    }
}
