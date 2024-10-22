@extends('layouts.app')
@section('title', 'Pendaftar')
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
                                <h2>Data Calon Mahasiswa</h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <a type="button" href="{{ url ('registrant') }}" class="btn btn-default waves-effect" data-toggle="tooltip" data-placement="bottom" title="Perbarui"><i class="material-icons">refresh</i></a>
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
                            <div class="col-lg-12 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-cyan">
                                    <div class="icon">
                                        <a href=""><i class="material-icons">people</i></a>
                                    </div>
                                    <div class="content">
                                        <div class="text">TOTAL</div>
                                        <div class="number count-to" data-from="0" data-to="{{ $all }}" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-blue">
                                    <div class="icon">
                                        <a href=""><i class="material-icons">code</i></a>
                                    </div>
                                    <div class="content">
                                        <div class="text">RPL</div>
                                        <div class="number count-to" data-from="0" data-to="{{ $rpl }}" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-red">
                                    <div class="icon">
                                        <a href=""><i class="material-icons">computer</i></a>
                                    </div>
                                    <div class="content">
                                        <div class="text">ABI</div>
                                        <div class="number count-to" data-from="0" data-to="{{ $abi }}" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-green">
                                    <div class="icon">
                                        <a href=""><i class="material-icons">monetization_on</i></a>
                                    </div>
                                    <div class="content">
                                        <div class="text">AKP</div>
                                        <div class="number count-to" data-from="0" data-to="{{ $akp }}" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-teal">
                                    <div class="icon">
                                        <i class="material-icons">import_contacts</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">Jalur Mandiri</div>
                                        <div class="number count-to" data-from="0" data-to="{{ $mandiri }}" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-lime">
                                    <div class="icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">Jalur Beasiswa</div>
                                        <div class="number count-to" data-from="0" data-to="{{ $beasiswa }}" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table">
                            <table class="table table-bordered table-striped table-hover js-basic-example">
                                <thead>
                                    <tr>
                                        <th class="col-sm-1">NO.</th>
                                        <th class="col-sm-1">JALUR</th>
                                        <th class="col-sm-3">NAMA LENGKAP</th>
                                        <th class="col-sm-3">ALAMAT EMAIL</th>
                                        <th class="col-sm-2">No.TELP/WA</th>
                                        <th class="col-sm-1 align-center"><i class="material-icons">settings</i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registrants as $index=>$registrant)
                                    <tr>
                                        <td>{{ "PMB" }} {{ date('Y') }} {{ $index + $registrants->firstItem() }}</td>
                                        <td>{{ $registrant->jalur }}</td>
                                        <td>{{ $registrant->nama }}</td>
                                        <td>{{ $registrant->email }}</td>
                                        <td>{{ $registrant->nohp }}</td>
                                        <td class="align-center">
                                            @if (auth()->user()->role == 'superuser' || auth()->user()->role == 'admin')
                                                <a href="{{ route ('registrant.edit', $registrant->id) }}" class="btn bg-cyan waves-effect" data-toggle="tooltip" data-placement="left" title="Review"><i class="material-icons">visibility</i></a>
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
