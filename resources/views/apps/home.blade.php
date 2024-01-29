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
                            @auth
                                @if (auth()->user()->role == 'superuser')
                                    <div class="col-lg-12 col-md-3 col-sm-6 col-xs-12">
                                        <div class="info-box bg-cyan">
                                            <div class="icon">
                                                <i class="material-icons">people</i>
                                            </div>
                                            <div class="content">
                                                <div class="text">TOTAL PENDAFTAR</div>
                                                <div class="number count-to" data-from="0" data-to="173" data-speed="1000" data-fresh-interval="20"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                                        <div class="info-box bg-blue">
                                            <div class="icon">
                                                <i class="material-icons">code</i>
                                            </div>
                                            <div class="content">
                                                <div class="text">RPL</div>
                                                <div class="number count-to" data-from="0" data-to="54" data-speed="1000" data-fresh-interval="20"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                                        <div class="info-box bg-red">
                                            <div class="icon">
                                                <i class="material-icons">computer</i>
                                            </div>
                                            <div class="content">
                                                <div class="text">ABI</div>
                                                <div class="number count-to" data-from="0" data-to="108" data-speed="1000" data-fresh-interval="20"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                                        <div class="info-box bg-green">
                                            <div class="icon">
                                                <i class="material-icons">monetization_on</i>
                                            </div>
                                            <div class="content">
                                                <div class="text">AKP</div>
                                                <div class="number count-to" data-from="0" data-to="11" data-speed="1000" data-fresh-interval="20"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endauth
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
