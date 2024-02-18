@extends('layouts.app')
@section('title', 'Biaya')
@push('style')
    <link href="{{ asset ('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>MENU BIAYA</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>Manajemen Menu Biaya</h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <a type="button" href="{{ url ('previous') }}" class="btn btn-default waves-effect" data-toggle="tooltip" data-placement="bottom" title="Perbarui"><i class="material-icons">refresh</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                @include('layouts.alert')
                            </div>
                        </div>
                        <div class="table">
                            <table class="table table-bordered table-striped table-hover js-basic-example">
                                <thead>
                                    <tr>
                                        <th class="col-sm-1">JUDUL</th>
                                        <th class="col-sm-1">TOTAL</th>
                                        <th class="col-sm-1">SUMBANGAN</th>
                                        <th class="col-sm-1">SEMESTER</th>
                                        <th class="col-sm-1">JAS</th>
                                        <th class="col-sm-1">POSMA</th>
                                        <th class="col-sm-1">SARUNG</th>
                                        <th class="col-sm-1">BULANAN</th>
                                        <th class="col-sm-1">ALMARI</th>
                                        <th class="col-sm-1">LOUDRY</th>
                                        <th class="col-sm-1">CLASS</th>
                                        <th class="col-sm-1 align-center"><i class="material-icons">settings</i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($biayas as $biaya)
                                        <tr>
                                            <td>{{ $biaya->judul }}</td>
                                            <td>{{ $biaya->total }}</td>
                                            <td>{{ $biaya->sumbangan }}</td>
                                            <td>{{ $biaya->semester }}</td>
                                            <td>{{ $biaya->jas }}</td>
                                            <td>{{ $biaya->posma }}</td>
                                            <td>{{ $biaya->sarung }}</td>
                                            <td>{{ $biaya->bulanan }}</td>
                                            <td>{{ $biaya->almari }}</td>
                                            <td>{{ $biaya->loundry }}</td>
                                            <td>{{ $biaya->class }}</td>
                                            <td class="align-center">
                                                <a href="{{ route ('biaya.edit', $biaya->id) }}" class="btn bg-cyan waves-effect" data-toggle="tooltip" data-placement="left" title="Review"><i class="material-icons">visibility</i></a>
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
@endpush

