@extends('layouts.app')
@section('title', 'Pembayaran')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>BUKTI PEMBAYARAN</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>BUKTI PEMBAYARAN PENDAFTARAN</h2>
                        <small>Jika ada pertanyaan/masalah dalam pendaftaran bisa menghubungi panitia pendaftaran</small>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                @include('layouts.alert')
                            </div>
                        </div>
                        @error('email')
                            <div class="alert bg-red alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <b>"Maaf Anda Sudah Melakukan Upload Bukti Pembayaran"</b>
                            </div>
                        @enderror
                        @error('bukti')
                            <div class="alert bg-red alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <b>"Maaf Format File Tidak Sesuai"</b>
                            </div>
                        @enderror
                        <form id="form_validation" action="{{ route('confirmation.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label>Jalur Pendaftaran</label>
                            <div class="form-group form-float">
                                <div class="demo-radio-button">
                                    <input name="jalur" value="Mandiri" type="radio" id="radio_1" required />
                                    <label for="radio_1">Jalur Mandiri</label>
                                    <input name="jalur" value="Beasiswa" type="radio" id="radio_2" required />
                                    <label for="radio_2">Jalur Beasiswa</label>
                                </div>
                            </div>
                            <br>
                            <label>Nama Lengkap</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nama" placeholder="nama" required autocomplete="off" value="{{ auth()->user()->name }}" readonly/>
                                </div>
                            </div>
                            <label>Alamat Email</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="email" placeholder="nama" required autocomplete="off" value="{{ auth()->user()->email }}" readonly/>
                                </div>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="form-group form-float">
                                        <label>Upload Bukti Pembayaran*</label>
                                        <img id="buktiDisplay" onclick="buktiClick()" src="{{ asset ('images/file.png') }}" class="img-responsive">
                                        <input id="buktiFile" type="file" name="bukti" onchange="displayBukti(this)" class="thumbnail" required>
                                    </div>
                                    <p>Format (jpg, jpeg, png, pdf) dan Maksimal Size 2.5 Mb</p>
                                </div>
                            </div>
                            <h5><strong>* = WAJIB DIISI!</strong></h5>
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
