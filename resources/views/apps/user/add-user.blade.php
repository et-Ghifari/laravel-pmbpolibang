@extends('layouts.app')
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
                            <div class="demo-radio-button">
                                <input name="role" type="radio" id="superuser" value="superuser" required/>
                                <label for="superuser">Super User</label>
                                <input name="role" type="radio" id="admin" value="admin" required/>
                                <label for="admin">Admin</label>
                                <input name="role" type="radio" id="user" value="user" required/>
                                <label for="user">Pengguna</label>
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
