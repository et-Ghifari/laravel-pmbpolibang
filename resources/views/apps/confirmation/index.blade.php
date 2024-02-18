@extends('layouts.app')
@section('title', 'Konfirmasi')
@push('style')
    <link href="{{ asset ('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>KONFIRMASI PEMBAYARAN</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>Konfirmasi Pembayaran</h2>
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
                                        <th class="col-sm-1 ">NO.</th>
                                        <th class="col-sm-3 ">NAMA LENGKAP</th>
                                        <th class="col-sm-1 ">JALUR</th>
                                        <th class="col-sm-2 ">ALAMAT EMAIL</th>
                                        <th class="col-sm-3 align-center">BUKTI TRANFER</th>
                                        <th class="col-sm-1 align-center">STATUS</th>
                                        <th class="col-sm-1 align-center"><i class="material-icons">settings</i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($confirmations as $index=>$confirmation)
                                    <tr>
                                        <td>{{ $index + $confirmations->firstItem() }}</td>
                                        <td>{{ $confirmation->nama }}</td>
                                        <td>{{ $confirmation->jalur }}</td>
                                        <td>{{ $confirmation->email }}</td>

                                        <td class="align-center"><a href="{{ asset ('storage/bukti/'.$confirmation->bukti) }}" target="_blank">Bukti Pembayaran</a></td>
                                        <td>
                                            <div class="demo-switch">
                                                <div class="switch">
                                                    <label>BELUM<input type="checkbox" value="SELESAI" {{ $confirmation->status == 'SELESAI' ? 'checked' : '' }}><span class="lever" ></span>SELESAI</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-center">
                                            @if (auth()->user()->role=='admin' || auth()->user()->role=='superuser')
                                                <a href="{{ route ('confirmation.edit', $confirmation->id) }}" class="btn bg-cyan waves-effect" data-toggle="tooltip" data-placement="left" title="Review"><i class="material-icons">visibility</i></a>
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
@endpush
