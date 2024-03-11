@extends('layouts.auth')
@section('title', 'Password Link')
@push('class')
    class="fp-page"
@endpush
@section('auth')
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Notifikasi-<b>Email Lupa Kata Sandi</b></a>
            <small>Admin PMB | POLIBANG</small>
        </div>
        <div class="card">
            <div class="body">
                <div class="thumbnail">
                    <img src="{{ asset('images/email_success.png') }}" class="img-responsive">
                </div>
                <center>
                    <p>Kami telah mengirimkan notifikasi reset password ke email Anda,</p>
                    <b>silahkan cek email anda!</b>
                </center>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Validation Plugin Js -->
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/pages/examples/forgot-password.js') }}"></script>
@endpush
