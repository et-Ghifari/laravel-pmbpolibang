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
                        <h2>FORMULIR PENDAFTARAN</h2>
                        <small>Jika ada pertanyaan/masalah dalam pendaftaran bisa menghubungi panitia pendaftaran</small>
                    </div>
                    <div class="body align-center">
                        <div class="row">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    @include('layouts.alert')
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-2">
                            </div>
                            <div class="col-sm-3 col-md-4">
                                <div class="button-demo">
                                    <img src="{{ asset ('images/mandiri.png') }}" width="30%">
                                    <div class="caption">
                                        <h3>Mandiri</h3>
                                        <p>
                                            <a href="{{ url ('independent') }}" class="btn bg-cyan waves-effect" role="button"><strong>DAFTAR</strong></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-4">
                                <div class="button-demo">
                                    <img src="{{ asset ('images/beasiswa.png') }}" width="30%">
                                    <div class="caption">
                                        <h3>Beasiswa</h3>
                                        <p>
                                            <a href="{{ url ('scholarship') }}" class="btn bg-cyan waves-effect" role="button"><strong>DAFTAR</strong></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
