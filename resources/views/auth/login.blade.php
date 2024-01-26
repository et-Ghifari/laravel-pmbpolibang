@extends('layouts.auth')
@section('title', 'Login')
@push('class')
    class="login-page"
@endpush
@section('auth')
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Log-<b>In</b></a>
            <small>Admin PMB - POLIBANG</small>
        </div>
        @error('email')
            <div class="alert bg-red alert-dismissible" role="alert">
                <center><b>Maaf email / password yang Anda masukan salah!</b></center>
            </div>
        @enderror
        @error('password')
            <div class="alert bg-red alert-dismissible" role="alert">
                <center><b>Maaf email / password yang Anda masukan salah!</b></center>
            </div>
        @enderror
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="msg">Masuk untuk memulai sesi Anda</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="text"
                                class="form-control @error('email')
                                is-invalid
                            @enderror"
                                name="email" placeholder="Email" value="{{ old('email') }}" autofocus required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password"
                                class="form-control @error('password')
                                is-invalid
                            @enderror"
                                name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">MASUK</button>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="{{ route('register') }}">Buat Akun Sekarang!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="{{ route('password.request') }}">Lupa Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div align="center">
            <a href="{{ url('') }}" type="button"
                class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float"><i
                    class="material-icons">navigate_before</i></a>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Validation Plugin Js -->
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/pages/examples/sign-in.js') }}"></script>
@endpush
