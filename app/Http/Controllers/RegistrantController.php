<?php

namespace App\Http\Controllers;

use App\Models\Registrant;
use App\Models\Student;
use Illuminate\Http\Request;

class RegistrantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrants = Registrant::paginate();
        $all = Registrant::count();
        $rpl = Registrant::where('prodi', 'RPL')->count();
        $abi = Registrant::where('prodi', 'ABI')->count();
        $akp = Registrant::where('prodi', 'AKP')->count();
        $mandiri = Registrant::where('jalur', 'Mandiri')->count();
        $beasiswa = Registrant::where('jalur', 'Beasiswa')->count();
        return view('apps.registrant.index', compact('registrants', 'all', 'rpl', 'abi', 'akp', 'mandiri', 'beasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|unique:registrants',
        ]);
        Registrant::create([
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
        Student::create([
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
        return redirect(route('registration'))->with('success', 'Pendaftaran Anda Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registrant $registrant)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registrant $registrant)
    {
        return view('apps.registrant.edit-registrant')->with('registrant', $registrant);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registrant $registrant)
    {
        $registrant->update([
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
        return redirect(route('registrant.index'))->with('success', 'Data Pendaftar berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registrant $registrant)
    {
        $registrant->delete();
        return redirect(route('registrant.index'))->with('success', 'Data Pendaftar berhasil di Hapus!');
    }
}
