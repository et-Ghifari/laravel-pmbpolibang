<?php

namespace App\Http\Controllers;

use App\Models\Sliding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlidingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slidings = Sliding::paginate();
        return view('apps.sliding.index', compact('slidings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps.sliding.add-sliding');
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
        $image->storeAs('public/sliding', $image->hashName());

        Sliding::create([
            'foto'=>$image->hashName(),
        ]);

        return redirect(route('sliding.index'))->with('success', 'Mengunggah Sliding Image Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sliding $sliding)
    {
        return view('welcome', ['sliding' => $sliding]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sliding $sliding)
    {
        return view('apps.sliding.edit-sliding')->with('sliding', $sliding);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sliding $sliding)
    {
        $this->validate($request, [
            'foto'     => 'required|image|mimes:jpeg,jpg,png',
        ]);
        $image = $request->file('foto');
        $image->storeAs('public/sliding', $image->hashName());
        Storage::delete('public/sliding/'.$sliding->foto);
        $sliding->update([
            'foto'=>$image->hashName(),
        ]);
        return redirect(route('sliding.index'))->with('success', 'Sliding Image berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sliding $sliding)
    {
        //
    }
}
