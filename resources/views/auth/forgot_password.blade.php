@extends('layouts.auth')
@section('title', 'Forgot Password')
@push('class')
    class="fp-page"
@endpush
@section('auth')
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Lupa-<b>Kata Sandi</b></a>
            <small>Admin PMB - POLIBANG</small>
        </div>
        @if (session('status'))
            <meta http-equiv="Refresh" content="0; url='password_link'" />
        @endif
        @error('email')
            <div class="alert bg-red alert-dismissible" role="alert">
                <center><b>Maaf email tidak terdaftar!</b></center>
            </div>
        @enderror
        <div class="card">
            <div class="body">
                <form id="forgot_password" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="msg">
                        Masukkan alamat email yang Anda gunakan untuk mendaftar. Kami akan mengirimkan email kepada Anda
                        tautan untuk mengatur ulang password Anda.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email"
                                class="form-control @error('email')
                                is-invalid
                            @enderror"
                                name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">ATUR ULANG PASSWORD</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="{{ route('login') }}">Masuk dengan akun anda</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Validation Plugin Js -->
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/pages/examples/forgot-password.js') }}"></script>
@endpush
