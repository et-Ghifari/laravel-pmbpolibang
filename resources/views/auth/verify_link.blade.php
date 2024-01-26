@extends('layouts.auth')
@section('title', 'Verify Link')
@push('class')
    class="fp-page"
@endpush
@section('auth')
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Verification <b>Email</b></a>
            <small>Admin Laravel - Flutter</small>
        </div>
        @if (session('status') == 'verification-link-sent')
            <div class="alert bg-pink alert-dismissible" role="alert">
                <center><b>Email verifikasi telah terkirim!</b></center>
            </div>
        @endif
        <div class="card">
            <div class="body">
                <div class="thumbnail">
                    <img src="{{ asset('images/email_success.png') }}" class="img-responsive">
                </div>
                <center>
                    <p>Kami telah mengirimkan verifikasi ke email Anda,</p>
                    <b>silahkan cek email anda!</b>
                </center>
                <br>
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">KIRIM ULANG VERIFIKASI</button>
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
