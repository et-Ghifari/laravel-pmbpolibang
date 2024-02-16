@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>INFORMASI PENDAFTARAN</h2>
                        <small>Jika ada pertanyaan/masalah dalam pendaftaran bisa menghubungi petugas administrasi</small>
                    </div>
                    <div class="body">
                        <div class="row">
                            <blockquote class="blockquote-reverse">
                                <p>SELAMAT DATANG DI - PMB</p>
                                <p class="col-green">POLITEKNIK BALEKAMBANG JEPARA</p>
                                <footer><cite title="Source Title" class="col-red">Excellent and Character Building</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset ('js/pages/index.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-countto/jquery.countTo.js') }}"></script>
@endpush
