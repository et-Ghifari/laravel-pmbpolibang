@extends('layouts.auth')
@section('title', 'Password Link')
@push('class')
    class="fp-page"
@endpush
@section('auth')
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Confirmation <b>Email</b></a>
            <small>Admin Laravel - Flutter</small>
        </div>
        <div class="card">
            <div class="body">
                <div class="thumbnail">
                    <img src="{{ asset('images/email_success.png') }}" class="img-responsive">
                </div>
                <center>
                    <p>We have sent confirmation to your email,</p>
                    <b>please check your email!</b>
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
