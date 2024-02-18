@extends('layouts.app')
@section('title', 'Testimoni')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>MENU TESTIMONI</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Ubah Menu Testimoni</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" action="{{ route ('testimoni.update', $testimoni) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="body">
                                <div class="row">
                                    <div class="form-group form-float">
                                        <label>Upload Gambar Menu Testimoni*</label>
                                        <img id="buktiDisplay" onclick="buktiClick()" src="{{ !empty($testimoni->foto) ? asset ('storage/testimoni/'.$testimoni->foto) : asset ('images/file.png') }}" class="img-responsive">
                                        <input id="buktiFile" type="file" name="foto" onchange="displayBukti(this)" class="thumbnail" required height="100px" width="200px">
                                    </div>
                                    <p>Format (jpg, jpeg, png, pdf) dan Maksimal Size 2.5 Mb</p>
                                    <label>Nama</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama" placeholder="nama" required autocomplete="off" value="{{ $testimoni->nama }}" required/>
                                        </div>
                                    </div>
                                    <label>Jabatan</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="jabatan" placeholder="jabatan" required autocomplete="off" value="{{ $testimoni->jabatan }}" required/>
                                        </div>
                                    </div>
                                    <label>Isi</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea rows="4" type="text" class="form-control no-resize" name="isi" placeholder="isi" required autocomplete="off" required>{{ $testimoni->isi }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group align-center">
                                <button type="submit" class="btn bg-green m-t-15 waves-effect" name="uploadBukti">
                                    <i class="material-icons">save</i>
                                    <span><strong>SIMPAN</strong></span>
                                </button>
                                <h5><strong>~ Cek Terlebih Dahulu File Yang Akan Di Upload! ~</strong></h5>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset ('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset ('js/pages/forms/form-validation.js') }}"></script>
    <script src="{{ asset ('js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ asset ('pages/forms/basic-form-elements.js') }}"></script>
    <script src="{{ asset ('js/display.js') }}"></script>
@endpush