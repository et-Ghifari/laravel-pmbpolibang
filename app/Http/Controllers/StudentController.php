<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate();
        return view('apps.student.index', compact('students'));
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
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('apps.student.edit-student')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->update([
            'angkatan'=>$request['angkatan'],
            'jalur'=>$request['jalur'],
            'beasiswa'=>$request['beasiswa'],
            'prodi'=>$request['prodi'],
            'kelas'=>$request['kelas'],
            'nisn'=>$request['nisn'],
            'nik'=>$request['nik'],
            'nama'=>$request['nama'],
            'tptLahir'=>$request['tptLahir'],
            'tglLahir'=>$request['tglLahir'],
            'blnLahir'=>$request['blnLahir'],
            'thnLahir'=>$request['thnLahir'],
            'jk'=>$request['jk'],
            'anak'=>$request['anak'],
            'saudara'=>$request['saudara'],
            'berat'=>$request['berat'],
            'tinggi'=>$request['tinggi'],
            'jas'=>$request['jas'],
            'rt'=>$request['rt'],
            'rw'=>$request['rw'],
            'desa'=>$request['desa'],
            'kecamatan'=>$request['kecamatan'],
            'kabupaten'=>$request['kabupaten'],
            'provinsi'=>$request['provinsi'],
            'kodepos'=>$request['kodepos'],
            'nohp'=>$request['nohp'],
            'email'=>$request['email'],
            'sekolah'=>$request['sekolah'],
            'skhun'=>$request['skhun'],
            'lulus'=>$request['lulus'],
            'kk'=>$request['kk'],
            'nikAyah'=>$request['nikAyah'],
            'namaAyah'=>$request['namaAyah'],
            'pekerjaanA'=>$request['pekerjaanA'],
            'pendidikanA'=>$request['pendidikanA'],
            'nikIbu'=>$request['nikIbu'],
            'namaIbu'=>$request['namaIbu'],
            'pekerjaanI'=>$request['pekerjaanI'],
            'pendidikanI'=>$request['pendidikanI'],
            'penghasilan'=>$request['penghasilan'],
            'lomba'=>$request['lomba'],
            'tingkat'=>$request['tingkat'],
            'peringkat'=>$request['peringkat'],
            'tahun'=>$request['tahun'],
            'organisasi'=>$request['organisasi'],
            'keadaan'=>$request['keadaan'],
            'sumber'=>$request['sumber'],
        ]);
        return redirect(route('student.index'))->with('success', 'Data Mahasiswa berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
