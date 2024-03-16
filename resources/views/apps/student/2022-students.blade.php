@extends('layouts.app')
@section('title', 'Terdahulu')
@push('style')
    <link href="{{ asset ('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA PENDAFTAR</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>Data Mahasiswa  2022</h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <a type="button" href="{{ url ('student') }}" class="btn btn-default waves-effect" data-toggle="tooltip" data-placement="bottom" title="Perbarui"><i class="material-icons">refresh</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    @include('layouts.alert')
                                </div>
                            </div>
                        <div class="table">
                            <table class="table table-bordered table-striped table-hover js-basic-example">
                                <thead>
                                    <tr>
                                        <th class="col-sm-1">ANGKATAN</th>
                                        <th class="col-sm-1">JALUR</th>
                                        <th class="col-sm-3">NAMA LENGKAP</th>
                                        <th class="col-sm-3">ALAMAT EMAIL</th>
                                        <th class="col-sm-2">No.TELP/WA</th>
                                        <th class="col-sm-1 align-center"><i class="material-icons">settings</i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($angkatans as $angkatan)
                                        <tr>
                                            <td>{{ $angkatan->angkatan }}</td>
                                            <td>{{ $angkatan->jalur }}</td>
                                            <td>{{ $angkatan->nama }}</td>
                                            <td>{{ $angkatan->email }}</td>
                                            <td>{{ $angkatan->nohp }}</td>
                                            <td class="align-center">
                                                @if (auth()->user()->role == 'superuser' || auth()->user()->role == 'admin')
                                                    <a href="" class="btn bg-cyan waves-effect" data-toggle="tooltip" data-placement="left" title="Review"><i class="material-icons">visibility</i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset ('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
    <script src="{{ asset ('js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ asset ('js/pages/index.js') }}"></script>
    <script src="{{ asset ('plugins/jquery-countto/jquery.countTo.js') }}"></script>
@endpush
