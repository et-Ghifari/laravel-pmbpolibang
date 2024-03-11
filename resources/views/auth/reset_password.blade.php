@extends('layouts.auth')
@section('title', 'Reset Password')
@push('class')
    class="signup-page"
@endpush
@section('auth')
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Ganti-<b>Kata Sandi</b></a>
            <small>Admin PMB | POLIBANG</small>
        </div>
        @error('password')
            <div class="alert bg-red alert-dismissible" role="alert">
                <center><b>Maaf Konfirmasi Password Tidak Sama</b></center>
            </div>
        @enderror
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <div class="msg">Konfirmasi password baru</div>
                    <div class="input-group">
                        <input type="text" name="token" value="{{ $request->token }}" hidden>
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" value="{{ $request->email }}"
                                readonly>
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
                                name="password" minlength="8" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password_confirmation" minlength="8"
                                placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIMPAN PASSWORD</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Validation Plugin Js -->
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/pages/examples/sign-up.js') }}"></script>
@endpush
