@extends('layouts.app')
@section('title', 'Pendaftaran')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>FORMULIR PENDAFTARAN</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>FORMULIR PENDAFTARAN</h2>
                                <small>Jika ada pertanyaan/masalah dalam pendaftaran bisa menghubungi panitia pendaftaran</small>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <a href="{{ url ('edit-registration') }}" class="btn bg-cyan waves-effect">
                                        <i class="material-icons">edit</i>
                                        <span><strong>EDIT FORMULIR</strong></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <blockquote class="m-b-25">
                            <p>Anda Sudah Melakukan Pengisian Formulir Pendaftaran</p>
                        </blockquote>
                        <blockquote>
                            <p>Untuk Langkah Selanjutnya Silahakan Upload Bukti Pembayaran</p>
                            <footer>Silahkan menuju halaman pada <cite title="Source Title" class="col-cyan">Menu Bukti Pembayaran</cite></footer>
                        </blockquote>
                        <blockquote class="blockquote-reverse">
                            <p>Terimakasih Telah Mendaftar di </p><p class="col-green">POLITEKNIK BALEKAMBANG JEPARA</p>
                            <footer><cite title="Source Title" class="col-red">Excellent and Character Building</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
