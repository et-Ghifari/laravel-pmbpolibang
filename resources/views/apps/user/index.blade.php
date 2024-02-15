@extends('layouts.apps')
@section('title', 'User')
@push('style')
    <link href="{{ asset ('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>MANAJEMEN USER</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>Manajemen Akun Pengguna</h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <a type="button" href="{{ url ('user') }}" class="btn btn-default waves-effect" data-toggle="tooltip" data-placement="bottom" title="Perbarui"><i class="material-icons">refresh</i></a>
                                    <a href="{{ route ('user.create') }}" class="btn bg-green waves-effect">
                                        <i class="material-icons">add_circle_outline</i>
                                        <span>TAMBAH</span>
                                    </a>
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
                                        <th class="col-sm-1 align-center">NO</th>
                                        <th class="col-sm-4 ">NAMA LENGKAP</th>
                                        <th class="col-sm-4 ">EMAIL</th>
                                        <th class="col-sm-1 align-center"><i class="material-icons">verified_user</i></th>
                                        <th class="col-sm-1 align-center"><i class="material-icons">settings</i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $index=>$user)
                                    <tr>
                                        <td class="col-sm-1 align-center">
                                            {{ $index + $users->firstItem() }}
                                        </td>
                                        <td class="col-sm-4 ">{{ $user->name }}</td>
                                        <td class="col-sm-4 ">{{ $user->email }}</td>
                                        <td class="col-sm-1 align-center">
                                            @if ($user->email_verified_at != null)
                                                <span class="badge bg-green"><h6>Active</h2></span>
                                            @else
                                                <span class="badge bg-orange"><h6>Pending</h2></span>
                                            @endif
                                        </td>
                                        <td class="col-sm-1 align-center">
                                            <a href="{{ route ('user.edit', $user->id) }}" class="btn bg-cyan waves-effect" title="Edit User"><i class="material-icons">edit</i></a>
                                            <form action="{{ route ('user.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button class="btn btn-danger waves-effect" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" title="Hapus User"><i class="material-icons">delete_forever</i></button>
                                            </form>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset ('js/sweet.js') }}"></script>
@endpush
