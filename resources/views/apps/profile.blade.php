@extends('layouts.app')
@section('title', 'Profil')
@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-3">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                    <div class="profile-body">
                        <div class="image-area">
                            <img src="{{ asset('images/profile.jpg') }}" width="125" height="125" alt="{{ auth()->user()->name }}" />
                        </div>
                        <div class="content-area">
                            <h5>{{ auth()->user()->name }}</h5>
                        </div>
                    </div>
                </div>
                <div class="card card-about-me">
                    <div class="header align-center">
                        <h2>Informasi Akun</h2>
                    </div>
                    <div class="body">
                        <ul>
                            <li>
                                <div class="title">
                                    <i class="material-icons">person</i>
                                    Nama
                                </div>
                                <div class="content">
                                    {{ auth()->user()->name }}
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">email</i>
                                    Email
                                </div>
                                <div class="content">
                                    {{ auth()->user()->email }}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Ganti Password</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="change_password_settings">
                                @include('layouts.alert')
                                @error('current_password', 'updatePassword')
                                    <div class="alert bg-red alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <b>{{ $message }}</b>
                                    </div>
                                @enderror
                                @error('password', 'updatePassword')
                                    <div class="alert bg-red alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <b>Maaf Konfirmasi Password Tidak Sama</b>
                                    </div>
                                @enderror
                                <form id="form_validation" action="{{ route('user-password.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" name="current_password" class="form-control" minlength="8" placeholder="Password Lama" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" name="password" class="form-control" minlength="8" placeholder="Password Baru" required>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" name="password_confirmation" class="form-control" minlength="6" placeholder="Konfirmasi Password Baru" required>
                                        </div>
                                    </div>
                                    <div class="form-group align-center">
                                        <button type="submit" class="btn bg-green m-t-15 waves-effect" name="editPassword">
                                            <i class="material-icons">save</i>
                                            <span><strong>SIMPAN</strong></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection\
@push('scripts')
    <script src="{{ asset ('js/pages/examples/profile.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/pages/forms/form-validation.js') }}"></script>
@endpush
