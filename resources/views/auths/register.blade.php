@extends('layouts.auth')
@section('title', 'Register')
@push('class')
    class="signup-page"
@endpush
@section('auth')
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Buat-<b>Akun</b></a>
            <small>Admin PMB - POLIBANG</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST" action="">
                    @csrf
                    <div class="msg">Daftarkan akun baru</div>
                    @error('email')
                        <div class="alert bg-red alert-dismissible" role="alert">
                            <center>Maaf email sudah digunakan!</center>
                        </div>
                    @enderror
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap" required
                                value="{{ old('fullname') }}" autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email"
                                class="form-control @error('email')
                                requared
                            @enderror"
                                name="email" placeholder="Email Address" required value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6"
                                placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6"
                                placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">Saya membaca dan setuju dengan <a href="javascript:void(0);">ketentuan
                                pengguna</a>.</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">BUAT AKUN</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="{{ route('login') }}">Anda sudah memiliki akun?</a>
                    </div>
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
