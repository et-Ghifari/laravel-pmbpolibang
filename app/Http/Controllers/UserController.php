<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::paginate();
        return view('apps.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps.user.add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'email_verified_at'=>now(),
            'role'=>$request['role'],
            'password'=>Hash::make($request['password']),
        ]);
        return redirect(route('user.index'))->with('success', 'Akun Pengguna berhasil di Tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('apps.user.adit-user')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'email_verified_at'=>now(),
            'role'=>$request['role'],
            'password'=>Hash::make($request['password']),
        ]);
        return redirect(route('user.index'))->with('success', 'Akun Pengguna berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'))->with('success', 'Akun Pengguna berhasil di Hapus!');
    }
}
