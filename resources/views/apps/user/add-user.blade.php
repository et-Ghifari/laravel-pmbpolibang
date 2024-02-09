@extends('layouts.apps')
@section('title', 'Add User')
@push('style')

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
                        <h2>
                            Tambah Akun Pengguna
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="POST" action="{{ route ('user.store') }}">
                            @csrf
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" required>
                                    <label class="form-label">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" required>
                                    <label class="form-label">Alamat Email</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="role" value="admin" id="admin" class="with-gap" required>
                                <label for="admin">Admin</label>

                                <input type="radio" name="role" value="user" id="user" class="with-gap" required>
                                <label for="user" class="m-l-20">Pengguna</label>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" required>
                                    <label class="form-label">Password</label>
                                </div>
                            </div>
                            <div class="align-center">
                                <button type="submit" class="btn bg-green m-t-15 waves-effect" name="edit">
                                    <i class="material-icons">add_circle_outline</i>
                                    <span>TAMBAH</span>
                                </button>
                                <a type="button" href="{{ url ('user') }}" class="btn bg-orange m-t-15 waves-effect" name="edit">
                                    <i class="material-icons">backspace</i>
                                    <span>KEMBALI</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/pages/forms/form-validation.js') }}"></script>
@endpush
