@extends('layouts.app')
@section('title', 'Prodi')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>MENU PRODI</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Ubah Menu Prodi</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" action="{{ route ('prodi.update', $prodi) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="body">
                                <div class="row">
                                    <div class="form-group form-float">
                                        <label>Upload Gambar Menu Prodi*</label>
                                        <img id="buktiDisplay" onclick="buktiClick()" src="{{ !empty($prodi->foto) ? asset ('storage/prodi/'.$prodi->foto) : asset ('images/file.png') }}" class="img-responsive">
                                        <input id="buktiFile" type="file" name="foto" onchange="displayBukti(this)" class="thumbnail" required height="100px" width="200px">
                                    </div>
                                    <p>Format (jpg, jpeg, png, pdf) dan Maksimal Size 2.5 Mb</p>
                                    <label>Judul</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="judul" placeholder="judul" required autocomplete="off" value="{{ $prodi->judul }}" required/>
                                        </div>
                                    </div>
                                    <label>Nama</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama" placeholder="nama" required autocomplete="off" value="{{ $prodi->nama }}" required/>
                                        </div>
                                    </div>
                                    <label>Keterangan</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea rows="4" type="text" class="form-control no-resize" name="keterangan" placeholder="keterangan" required autocomplete="off" required>{{ $prodi->keterangan }}</textarea>
                                        </div>
                                    </div>
                                    <label>Hastag</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea rows="4" type="text" class="form-control no-resize" name="hastag" placeholder="hastag" required autocomplete="off" required>{{ $prodi->hastag }}</textarea>
                                        </div>
                                    </div>
                                    <label>Isi</label>
                                    <textarea id="ckeditor" name="isi" type="text" required>
                                        {{ $prodi->isi }}
                                    </textarea>
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
<script src="{{ asset ('pages/forms/basic-form-elements.js') }}"></script>

<script src="{{ asset ('js/display.js') }}"></script>

<script src="{{ asset ('plugins/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset ('js/pages/forms/form-validation.js') }}"></script>
<script src="{{ asset ('plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset ('js/pages/forms/editors.js') }}"></script>
@endpush
