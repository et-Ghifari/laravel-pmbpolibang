@extends('layouts.auth')
@section('title', 'Forgot Password')
@push('class')
    class="fp-page"
@endpush
@section('auth')
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Lupa-<b>Password</b></a>
            <small>Admin PMB - POLIBANG</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="forgot_password" action="{{ url('/password_link') }}">
                    <div class="msg">
                        Masukkan alamat email yang Anda gunakan untuk mendaftar. Kami akan mengirimkan email kepada Anda
                        tautan untuk mengatur ulang password Anda.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required
                                autofocus>
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
