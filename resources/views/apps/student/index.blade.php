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
                                <h2>Data Mahasiswa</h2>
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
                            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-blue">
                                    <div class="icon">
                                        <a href="{{ route ('2023') }}"><i class="material-icons">date_range</i></a>
                                    </div>
                                    <div class="content">
                                        <div class="text">ANGKATAN</div>
                                        <div class="number">2023</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-green">
                                    <div class="icon">
                                        <a href=""><i class="material-icons">date_range</i></a>
                                    </div>
                                    <div class="content">
                                        <div class="text">ANGKATAN</div>
                                        <div class="number">2022</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-red">
                                    <div class="icon">
                                        <a href=""><i class="material-icons">date_range</i></a>
                                    </div>
                                    <div class="content">
                                        <div class="text">ANGKATA</div>
                                        <div class="number">2021</div>
                                    </div>
                                </div>
                            </div>
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
