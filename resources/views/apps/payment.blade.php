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
                        <form id="" action="" method="POST" enctype="multipart/form-data">
                                                            <div class="body">
                                <div class="row">
                                    <div class="col-xs-6 col-md-4">
                                        <label>Upload Bukti Pembayaran*</label>
                                        <img src="{{ ('images/file.png') }}" class="img-responsive">
                                        <input type="file" name="bukti" class="thumbnail">
                                        <p>Format (jpg, jpeg, png, pdf) dan Maksimal Size 1.5 Mb</p>
                                    </div>
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

@endpush
