@extends('layouts.app')
@section('title', 'Status')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>STATUS PENDAFTARAN</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>STATUS PENDAFTARAN</h2>
                        <small>Jika ada pertanyaan/masalah dalam pendaftaran bisa menghubungi panitia pendaftaran</small>
                    </div>
                    <div class="body">
                        <blockquote class="m-b-25">
                            <p class="col-red">Pendaftaran Belum Selesai<footer>Silahkan konfirmasi pada panitia pendaftaran</footer></p>                            </blockquote>
                        <blockquote class="blockquote-reverse">
                            <p>Terimakasih Telah Mendaftar di </p>
                            <p class="col-green">POLITEKNIK BALEKAMBANG JEPARA</p>
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
