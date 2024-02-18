@extends('layouts.app')
@section('title', 'Panduan')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>MENU PANDUAN</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Tambah Menu Panduan</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" action="{{ route ('panduan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="body">
                                <div class="row">
                                    <div class="form-group form-float">
                                        <label>Upload Gambar Sliding Image*</label>
                                        <img id="buktiDisplay" onclick="buktiClick()" src="{{ asset ('images/file.png') }}" class="img-responsive">
                                        <input id="buktiFile" type="file" name="foto" onchange="displayBukti(this)" class="thumbnail" required height="100px" width="200px">
                                    </div>
                                    <p>Format (jpg, jpeg, png, pdf) dan Maksimal Size 2.5 Mb</p>
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
