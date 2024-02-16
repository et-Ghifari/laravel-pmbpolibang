@extends('layouts.app')
@section('title', 'Sliding')
@push('style')
    <link href="{{ asset ('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA FASILITAS</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="align-center">
                            <img src="{{ asset('images/fasilitas/gedung.jpg') }}" width="250" height="125" alt="{{ auth()->user()->name }}" />
                            <h4>Gedung Utama</h4>
                            <span>Gedung Pembelajaran</span>
                            <br></br>
                            <a href="" class="btn bg-cyan waves-effect" title="Edit User"><i class="material-icons">edit</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="align-center">
                            <img src="{{ asset('images/fasilitas/aula.jpg') }}" width="250" height="125" alt="{{ auth()->user()->name }}" />
                            <h4>Aula</h4>
                            <span>Gedung Serba Guna</span>
                            <br></br>
                            <a href="" class="btn bg-cyan waves-effect" title="Edit User"><i class="material-icons">edit</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="align-center">
                            <img src="{{ asset('images/fasilitas/bisnis.jpg') }}" width="250" height="125" alt="{{ auth()->user()->name }}" />
                            <h4>Unit Bisnis</h4>
                            <span>Gedung Bisnis</span>
                            <br></br>
                            <a href="" class="btn bg-cyan waves-effect" title="Edit User"><i class="material-icons">edit</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="align-center">
                            <img src="{{ asset('images/fasilitas/lab1.png') }}" width="250" height="125" alt="{{ auth()->user()->name }}" />
                            <h4>Lab Programmer</h4>
                            <span>Laboratorium Komputer Rekayasa Perangkat Lunak</span>
                            <br></br>
                            <a href="" class="btn bg-cyan waves-effect" title="Edit User"><i class="material-icons">edit</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="align-center">
                            <img src="{{ asset('images/fasilitas/lab2.jpeg') }}" width="250" height="125" alt="{{ auth()->user()->name }}" />
                            <h4>Lab Bisnis</h4>
                            <span>Laboratorium Komputer Administrasi Bisnis Internasional</span>
                            <br></br>
                            <a href="" class="btn bg-cyan waves-effect" title="Edit User"><i class="material-icons">edit</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="align-center">
                            <img src="{{ asset('images/fasilitas/homestay.jpg') }}" width="250" height="125" alt="{{ auth()->user()->name }}" />
                            <h4>Homestay</h4>
                            <span>Tempat Penginapan</span>
                            <br></br>
                            <a href="" class="btn bg-cyan waves-effect" title="Edit User"><i class="material-icons">edit</i></a>
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
