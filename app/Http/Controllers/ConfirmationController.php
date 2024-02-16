<?php

namespace App\Http\Controllers;

use App\Models\Confirmation;
use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $confirmations = Confirmation::paginate();
        return view('apps.confirmation.index', compact('confirmations'));
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
        $this->validate($request, [
            'email'     => 'required|unique:confirmations',
            'bukti'     => 'required|image|mimes:jpeg,jpg,png',
        ]);
        $image = $request->file('bukti');
        $image->storeAs('public/bukti', $image->hashName());

        Confirmation::create([
            'jalur'=>$request['jalur'],
            'nama'=>$request['nama'],
            'email'=>$request['email'],
            'bukti'=>$image->hashName(),
        ]);

        return redirect(route('payment'))->with('success', 'Mengunggah Bukti Pembayaran Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Confirmation $confirmation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Confirmation $confirmation)
    {
        return view('apps.confirmation.edit-confirmation')->with('confirmation', $confirmation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Confirmation $confirmation)
    {
        $confirmation->update([
            'jalur'=>$request['jalur'],
            'nama'=>$request['nama'],
            'email'=>$request['email'],
            'status'=>$request['status'],
        ]);
        return redirect(route('confirmation.index'))->with('success', 'Data Pendaftar berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Confirmation $confirmation)
    {
        //
    }
}
