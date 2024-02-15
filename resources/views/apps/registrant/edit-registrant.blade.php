@extends('layouts.apps')
@section('title', 'Pendaftar')
@push('style')
    <link href="{{ asset ('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>PENDAFTAR</h2>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-4">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                    <div class="profile-body">
                        <div class="image-area">
                            <img src="{{ asset('images/profile.jpg') }}" width="100" height="100" alt="{{ $registrant->nama }}" />
                        </div>
                        <div class="content-area">
                            <h5>{{ $registrant->nama }}</h5>
                            <p>{{ $registrant->jalur }}</p>
                        </div>
                    </div>
                </div>
                <div class="card card-about-me">
                    <div class="header align-center">
                        <h2>Informasi Akun</h2>
                    </div>
                    <div class="body">
                        <ul>
                            <li>
                                <div class="title">
                                    <i class="material-icons">school</i>
                                    Beasiswa
                                </div>
                                <div class="content">
                                    {{ !isset($registrant->beasiswa) ? '-' : $registrant->beasiswa }}
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">business_center</i>
                                    Program Studi
                                </div>
                                <div class="content">
                                    {{ $registrant->prodi }}
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">access_time</i>
                                    Kelas
                                </div>
                                <div class="content">
                                    {{ $registrant->kelas }}
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">email</i>
                                    Email
                                </div>
                                <div class="content">
                                    {{ $registrant->email }}
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">smartphone</i>
                                    No.Hp/WA
                                </div>
                                <div class="content">
                                    {{ $registrant->nohp }}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="card">
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#informasi" aria-controls="home" role="tab" data-toggle="tab">Informasi Mahasiswa</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="informasi">
                                    <form id="form_validation" method="POST">
                                        <label>JALUR</label>
                                        <div class="form-group form-float">
                                            <div class="demo-radio-button">
                                                @if ($registrant->jalur == 'Beasiswa')
                                                    <input name="jalur" value="Beasiswa" type="radio" id="radio_7" required checked/>
                                                    <label for="radio_7"><b>BEASISWA</b></label>
                                                    <input name="jalur" value="Mandiri" type="radio" id="radio_8" required />
                                                    <label for="radio_8"><b>MANDIRI</b></label>
                                                @endif
                                                @if ($registrant->jalur == 'Mandiri')
                                                    <input name="jalur" value="Beasiswa" type="radio" id="radio_7" required />
                                                    <label for="radio_7"><b>BEASISWA</b></label>
                                                    <input name="jalur" value="Mandiri" type="radio" id="radio_8" required checked/>
                                                    <label for="radio_8"><b>MANDIRI</b></label>
                                                @endif
                                            </div>
                                        </div>
                                        <label>BEASISWA</label>
                                        <div class="form-group form-float">
                                            <select name="beasiswa" class="form-control show-tick">
                                                <option value="{{ $registrant->beasiswa }}">{{ $registrant->beasiswa }}</option>
                                                <option value="Prestasi Tahfidz">Beasiswa Tahfidz</option>
                                                <option value="Prestasi Kitab Kuning">Beasiswa Kitab Kuning</option>
                                                <option value="Prestasi Akademik">Beasiswa Prestasi Akademik</option>
                                                <option value="Prestasi Non Akademik">Beasiswa Prestasi Non Akademik</option>
                                                <option value="Prestasi Kelas">Beasiswa Prestasi Kelas</option>
                                                <option value="Alumni Balekambang">Beasiswa Alumni Balekambang</option>
                                                <option value="KIP">Beasiswa Kartu Indonesia Pintar</option>
                                            </select>
                                        </div>
                                        <label>PROGRAM STUDI</label>
                                        <div class="form-group form-float">
                                            <select name="prodi" class="form-control show-tick" required>
                                                <option value="{{ $registrant->prodi }}">{{ $registrant->prodi }}</option>
                                                <option value="RPL">D4-Rekayasa Perangkat Lunak</option>
                                                <option value="ABI">D4-Administrasi Bisnis Internasional</option>
                                                <option value="AKP">D4-Akutansi Keuangan Publik</option>
                                            </select>
                                        </div>
                                        <label>KELAS</label>
                                        <div class="form-group form-float">
                                            <select name="kelas" class="form-control show-tick" required>
                                                <option value="{{ $registrant->kelas }}">{{ $registrant->kelas }}</option>
                                                <option value="Reguler">Reguler</option>
                                                <option value="Karyawan">Karyawan</option>
                                            </select>
                                        </div>
                                        <label>NAMA</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama" placeholder="nama" required autocomplete="off" value="{{ $registrant->nama }}"/>
                                            </div>
                                        </div>
                                        <label>NISN</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nisn" placeholder="nisn" maxlength="10" minlength="10" required autocomplete="off" value="{{ $registrant->nisn }}"/>
                                            </div>
                                        </div>
                                        <label>NIK</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="nik" class="form-control" placeholder="nik" maxlength="16" minlength="16" required autocomplete="off" value="{{ $registrant->nik }}"/>
                                            </div>
                                        </div>
                                        <label>Tempat Tanggal Lahir</label>
                                        <div class="row clearfix">
                                            <div class="col-sm-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="tptLahir" class="form-control" placeholder="tempat" required autocomplete="off" value="{{ $registrant->tptLahir }}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group form-float">
                                                    <select name="tgl" class="form-control show-tick" required>
                                                        <option value="{{ $registrant->tglLahir }}">{{ $registrant->tglLahir }}</option>
                                                        <?php for ($a = 1; $a < 32; $a++) {
                                                        ?>
                                                            <option value="<?php echo $a; ?>"><?php echo $a; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group form-float">
                                                    <select name="bln" class="form-control show-tick" required>
                                                        <option value="{{ $registrant->blnLahir }}">{{ $registrant->blnLahir }}</option>
                                                        <option value="Januari">Januari</option>
                                                        <option value="Februari">Februari</option>
                                                        <option value="Maret">Maret</option>
                                                        <option value="April">April</option>
                                                        <option value="Mei">Mei</option>
                                                        <option value="Juni">Juni</option>
                                                        <option value="Juli">Juli</option>
                                                        <option value="Agustus">Agustus</option>
                                                        <option value="September">September</option>
                                                        <option value="Oktober">Oktober</option>
                                                        <option value="November">November</option>
                                                        <option value="Desember">Desember</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group form-float">
                                                    <select name="thn" class="form-control show-tick" required>
                                                        <option value="{{ $registrant->thnLahir }}">{{ $registrant->thnLahir }}</option>
                                                        <?php $th = date('Y') - 30; ?>
                                                        <?php for ($th; $th <= date('Y'); $th++) {
                                                        ?>
                                                            <option value="<?php echo $th; ?>"><?php echo $th; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Provinsi</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="provinsi" class="form-control" placeholder="provinsi" required autocomplete="off" value="{{ $registrant->provinsi }}"/>
                                            </div>
                                        </div>
                                        <label>Kabupaten</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="kabupaten" class="form-control" placeholder="kabupaten" required autocomplete="off" value="{{ $registrant->kabupaten }}"/>
                                            </div>
                                        </div>
                                        <label>Kecamatan</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="kecamatan" class="form-control" placeholder="kecamatan" required autocomplete="off" value="{{ $registrant->kecamatan }}"/>
                                            </div>
                                        </div>
                                        <label>Desa</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="desa" class="form-control" placeholder="desa" required autocomplete="off" value="{{ $registrant->desa }}"/>
                                            </div>
                                        </div>
                                        <label>Jl/No.Rumah/dll</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea type="text" name="jalan" class="form-control" placeholder="Jl./No.Rumah/dll" autocomplete="off" value="{{ !isset($registrant->jalan) ? '-' : $registrant->jalan }}"></textarea>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="rt" class="form-control" placeholder="RT" required autocomplete="off" value="{{ $registrant->rt }}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="rw" class="form-control" placeholder="RW" required autocomplete="off" value="{{ $registrant->rw }}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="kodepos" class="form-control" placeholder="Kode Pos" maxlength="5" minlength="5" required autocomplete="off" value="{{ $registrant->kodepos }}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <label>NO HP/WA</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nohp" placeholder="no hp/wa" required autocomplete="off" value="{{ $registrant->nohp }}"/>
                                            </div>
                                        </div>
                                        <label>EMAIL</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="email" placeholder="alamat email" required autocomplete="off" value="{{ $registrant->email }}"/>
                                            </div>
                                        </div>
                                        <label>Jenis Kelamin*</label>
                                            <div class="form-group form-float">
                                                <div class="demo-radio-button">
                                                    @if ($registrant->jk == 'L')
                                                        <input name="jk" value="L" type="radio" id="radio_9" required checked/>
                                                        <label for="radio_9">Laki - Laki</label>
                                                        <input name="jk" value="P" type="radio" id="radio_10" required />
                                                        <label for="radio_10">Perempuan</label>
                                                    @endif
                                                    @if ($registrant->jk == 'P')
                                                        <input name="jk" value="L" type="radio" id="radio_9" required />
                                                        <label for="radio_9">Laki - Laki</label>
                                                        <input name="jk" value="P" type="radio" id="radio_10" required checked/>
                                                        <label for="radio_10">Perempuan</label>
                                                    @endif
                                                </div>
                                            </div>
                                        <label>Ukuran Jas</label>
                                        <div class="form-group form-float">
                                            <div class="demo-radio-button">
                                                @if ($registrant->jas == 'S')
                                                    <input name="jas" value="S" type="radio" id="radio_3" required checked/>
                                                    <label for="radio_3">S</label>
                                                    <input name="jas" value="M" type="radio" id="radio_4" required />
                                                    <label for="radio_4">M</label>
                                                    <input name="jas" value="L" type="radio" id="radio_5" required />
                                                    <label for="radio_5">L</label>
                                                    <input name="jas" value="XL" type="radio" id="radio_6" required />
                                                    <label for="radio_6">XL</label>
                                                    <input name="jas" value="XXL" type="radio" id="radio_7" required />
                                                    <label for="radio_7">XXL</label>
                                                    <input name="jas" value="XXXL" type="radio" id="radio_8" required />
                                                    <label for="radio_8">XXXL</label>
                                                @endif
                                                @if ($registrant->jas == 'M')
                                                    <input name="jas" value="S" type="radio" id="radio_3" required />
                                                    <label for="radio_3">S</label>
                                                    <input name="jas" value="M" type="radio" id="radio_4" required checked/>
                                                    <label for="radio_4">M</label>
                                                    <input name="jas" value="L" type="radio" id="radio_5" required />
                                                    <label for="radio_5">L</label>
                                                    <input name="jas" value="XL" type="radio" id="radio_6" required />
                                                    <label for="radio_6">XL</label>
                                                    <input name="jas" value="XXL" type="radio" id="radio_7" required />
                                                    <label for="radio_7">XXL</label>
                                                    <input name="jas" value="XXXL" type="radio" id="radio_8" required />
                                                    <label for="radio_8">XXXL</label>
                                                @endif
                                                @if ($registrant->jas == 'L')
                                                    <input name="jas" value="S" type="radio" id="radio_3" required />
                                                    <label for="radio_3">S</label>
                                                    <input name="jas" value="M" type="radio" id="radio_4" required />
                                                    <label for="radio_4">M</label>
                                                    <input name="jas" value="L" type="radio" id="radio_5" required checked/>
                                                    <label for="radio_5">L</label>
                                                    <input name="jas" value="XL" type="radio" id="radio_6" required />
                                                    <label for="radio_6">XL</label>
                                                    <input name="jas" value="XXL" type="radio" id="radio_7" required />
                                                    <label for="radio_7">XXL</label>
                                                    <input name="jas" value="XXXL" type="radio" id="radio_8" required />
                                                    <label for="radio_8">XXXL</label>
                                                @endif
                                                @if ($registrant->jas == 'XL')
                                                    <input name="jas" value="S" type="radio" id="radio_3" required />
                                                    <label for="radio_3">S</label>
                                                    <input name="jas" value="M" type="radio" id="radio_4" required />
                                                    <label for="radio_4">M</label>
                                                    <input name="jas" value="L" type="radio" id="radio_5" required />
                                                    <label for="radio_5">L</label>
                                                    <input name="jas" value="XL" type="radio" id="radio_6" required checked/>
                                                    <label for="radio_6">XL</label>
                                                    <input name="jas" value="XXL" type="radio" id="radio_7" required />
                                                    <label for="radio_7">XXL</label>
                                                    <input name="jas" value="XXXL" type="radio" id="radio_8" required />
                                                    <label for="radio_8">XXXL</label>
                                                @endif
                                                @if ($registrant->jas == 'XXL')
                                                    <input name="jas" value="S" type="radio" id="radio_3" required />
                                                    <label for="radio_3">S</label>
                                                    <input name="jas" value="M" type="radio" id="radio_4" required />
                                                    <label for="radio_4">M</label>
                                                    <input name="jas" value="L" type="radio" id="radio_5" required />
                                                    <label for="radio_5">L</label>
                                                    <input name="jas" value="XL" type="radio" id="radio_6" required />
                                                    <label for="radio_6">XL</label>
                                                    <input name="jas" value="XXL" type="radio" id="radio_7" required checked/>
                                                    <label for="radio_7">XXL</label>
                                                    <input name="jas" value="XXXL" type="radio" id="radio_8" required />
                                                    <label for="radio_8">XXXL</label>
                                                @endif
                                                @if ($registrant->jas == 'XXXL')
                                                    <input name="jas" value="S" type="radio" id="radio_3" required />
                                                    <label for="radio_3">S</label>
                                                    <input name="jas" value="M" type="radio" id="radio_4" required />
                                                    <label for="radio_4">M</label>
                                                    <input name="jas" value="L" type="radio" id="radio_5" required />
                                                    <label for="radio_5">L</label>
                                                    <input name="jas" value="XL" type="radio" id="radio_6" required />
                                                    <label for="radio_6">XL</label>
                                                    <input name="jas" value="XXL" type="radio" id="radio_7" required />
                                                    <label for="radio_7">XXL</label>
                                                    <input name="jas" value="XXXL" type="radio" id="radio_8" required checked/>
                                                    <label for="radio_8">XXXL</label>
                                                @endif
                                            </div>
                                        </div>
                                        <label>Anak-ke</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="anak" class="form-control" placeholder="anak-ke" autocomplete="off" value="{{ !isset($registrant->anak) ? '-' : $registrant->anak }}"/>
                                            </div>
                                        </div>
                                        <label>Jumlah Saudara</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="saudara" class="form-control" placeholder="jumlah saudara" autocomplete="off" value="{{ !isset($registrant->saudara) ? '-' : $registrant->saudara }}"/>
                                            </div>
                                        </div>
                                        <label>Berat Badan</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="berat" class="form-control" placeholder="berat badan" autocomplete="off" value="{{ !isset($registrant->berat) ? '-' : $registrant->berat }}"/>
                                            </div>
                                        </div>
                                        <label>Tinggi Badan</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="tinggi" class="form-control" placeholder="tinggi badan" autocomplete="off" value="{{ !isset($registrant->tinggi) ? '-' : $registrant->tinggi }}"/>
                                            </div>
                                        </div>
                                        <label>Asal Sekolah</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="asal" class="form-control" placeholder="asal sekolah" autocomplete="off" value="{{ $registrant->asal }}"/>
                                            </div>
                                        </div>
                                        <label>SKHUN</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="skhun" class="form-control" placeholder="skhun" autocomplete="off" value="{{ !isset($registrant->skhun) ? '-' : $registrant->skhun }}"/>
                                            </div>
                                        </div>
                                        <label>Tahun Lulus</label>
                                        <div class="form-group form-float">
                                            <select name="lulus" class="form-control show-tick" required>
                                                <option value="{{ $registrant->lulus }}">{{ $registrant->lulus }}</option>
                                                <?php $th = date('Y') - 30; ?>
                                                <?php for ($th; $th <= date('Y'); $th++) {
                                                ?>
                                                    <option value="<?php echo $th; ?>"><?php echo $th; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <label>Nomor KK</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="kk" class="form-control" placeholder="nomor kk" maxlength="16" minlength="16" required autocomplete="off" value="{{ $registrant->kk }}"/>
                                            </div>
                                        </div>
                                        <label>NIK Ayah</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="nikAyah" class="form-control" placeholder="nik ayah" maxlength="16" minlength="16" required autocomplete="off" value="{{ $registrant->nikAyah }}"/>
                                            </div>
                                        </div>
                                        <label>Nama Ayah</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="namaAyah" class="form-control" placeholder="nama ayah" autocomplete="off" value="{{ $registrant->namaAyah }}"/>
                                            </div>
                                        </div>
                                        <label>Pekerjaan Ayah</label>
                                        <div class="form-group form-float">
                                            <select name="pekerjaanA" class="form-control show-tick" required>
                                                <option value="{{ $registrant->pekerjaanA }}">{{ $registrant->pekerjaanA }}</option>
                                                <option value="Buruh">Buruh</option>
                                                <option value="Dosen">Dosen</option>
                                                <option value="Guru">Guru</option>
                                                <option value="Nelayan">Nelayan</option>
                                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                <option value="Petani">Petani</option>
                                                <option value="PNS">PNS</option>
                                                <option value="Supir">Supir</option>
                                                <option value="Tukang">Tukang</option>
                                                <option value="Wiraswasta">Wiraswasta</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <label>Pendidikan Ayah</label>
                                        <div class="form-group form-float">
                                            <select name="pendidikanA" class="form-control show-tick" required>
                                                <option value="{{ $registrant->pendidikanA }}">{{ $registrant->pendidikanA }}</option>
                                                <option value="SD/MI">SD/MI</option>
                                                <option value="SMP/MTs">SMP/MTs</option>
                                                <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                                <option value="Pesantren">Pesantren</option>
                                            </select>
                                        </div>
                                        <label>NIK Ibu</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="nikIbu" class="form-control" placeholder="nik ibu" maxlength="16" minlength="16" required autocomplete="off" value="{{ $registrant->nikIbu }}"/>
                                            </div>
                                        </div>
                                        <label>Nama Ibu*</label>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="namaIbu" class="form-control" placeholder="nama ibu" required autocomplete="off" value="{{ $registrant->namaIbu }}"/>
                                                </div>
                                            </div>
                                        <label>Pekerjaan Ibu</label>
                                        <div class="form-group form-float">
                                            <select name="pekerjaanI" class="form-control show-tick" required>
                                                <option value="{{ $registrant->pekerjaanI }}">{{ $registrant->pekerjaanI }}</option>
                                                <option value="Buruh">Buruh</option>
                                                <option value="Dosen">Dosen</option>
                                                <option value="Guru">Guru</option>
                                                <option value="Nelayan">Nelayan</option>
                                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                <option value="Petani">Petani</option>
                                                <option value="PNS">PNS</option>
                                                <option value="Supir">Supir</option>
                                                <option value="Tukang">Tukang</option>
                                                <option value="Wiraswasta">Wiraswasta</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <label>Pendidikan Ibu</label>
                                        <div class="form-group form-float">
                                            <select name="pendidikanI" class="form-control show-tick" required>
                                                <option value="{{ $registrant->pendidikanI }}">{{ $registrant->pendidikanI }}</option>
                                                <option value="SD/MI">SD/MI</option>
                                                <option value="SMP/MTs">SMP/MTs</option>
                                                <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                                <option value="Pesantren">Pesantren</option>
                                            </select>
                                        </div>
                                        <label>Penghasilan Orang Tua</label>
                                        <div class="form-group form-float">
                                            <select name="penghasilan" class="form-control show-tick" required>
                                                <option value="{{ $registrant->penghasilan }}">{{ $registrant->penghasilan }}</option>
                                                <option value="< 500.000">< 500.000</option>
                                                <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                                <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                                                <option value="2.000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                                                <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                                                <option value="> 5.000.000">> 5.000.000</option>
                                            </select>
                                        </div>
                                        <label>Cabang Lomba</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="lomba" class="form-control" placeholder="cabang lomba" autocomplete="off" value="{{ !isset($registrant->lomba) ? '-' : $registrant->lomba }}"/>
                                            </div>
                                        </div>
                                        <label>Tingkat Lomba</label>
                                        <div class="form-group form-float">
                                            <select name="tingkat" class="form-control show-tick">
                                                <option value="{{ $registrant->tingkat }}">{{ $registrant->tingkat }}</option>
                                                <option value="Kecamatan">Kecamatan</option>
                                                <option value="Kabupaten">Kabupaten</option>
                                                <option value="Provinsi">Provinsi</option>
                                                <option value="Nasioanl">Nasioanl</option>
                                                <option value="International">International</option>
                                            </select>
                                        </div>
                                        <label>Peringkat Lomba</label>
                                        <div class="form-group form-float">
                                            <select name="peringkat" class="form-control show-tick">
                                                <option value="{{ $registrant->peringkat }}">{{ $registrant->peringkat }}</option>
                                                <option value="Juara I">Juara I</option>
                                                <option value="Juara II">Juara II</option>
                                                <option value="Juara III">Juara III</option>
                                                <option value="Juara Harapan">Juara Harapan</option>
                                            </select>
                                        </div>
                                        <label>Tahun Lomba</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="tahun" class="form-control" placeholder="tahun lomba" autocomplete="off" value="{{ !isset($registrant->tahun) ? '-' : $registrant->tahun }}"/>
                                            </div>
                                        </div>
                                        <label>Organisasi Masyarakat Orang Tua/Wali</label>
                                        <div class="form-group form-float">
                                            <select name="organisasi" class="form-control show-tick" required>
                                                <option value="{{ $registrant->organisasi }}">{{ $registrant->organisasi }}</option>
                                                <option value="NU">NU</option>
                                                <option value="Muhammadiyah">Muhammadiyah</option>
                                                <option value="PERSIS">PERSIS</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <label>Keadaan Calon Mahasiswa</label>
                                        <div class="form-group form-float">
                                            <select name="keadaan" class="form-control show-tick" required>
                                                <option value="{{ $registrant->keadaan }}">{{ $registrant->keadaan }}</option>
                                                <option value="Lengkap">Lengkap</option>
                                                <option value="Yatim">Yatim</option>
                                                <option value="Piatu">Piatu</option>
                                                <option value="Yatim Piatu">Yatim Piatu</option>
                                            </select>
                                        </div>
                                        <label>Sumber Informasi</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="sumber" class="form-control" placeholder="tahun lomba" autocomplete="off" value="{{ !isset($registrant->sumber) ? '-' : $registrant->sumber }}"/>
                                            </div>
                                        </div>
                                        <div class="button-demo align-center">
                                            <button type="submit" class="btn bg-green m-t-15 waves-effect" name="editInfo">
                                                <i class="material-icons">save</i>
                                                <span><strong>SIMPAN</strong></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset ('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
    <script src="{{ asset ('js/pages/tables/jquery-datatable.js') }}"></script>
@endpush
