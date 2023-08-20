@extends('layouts.auth')
@section('title', 'Confrmation Password')
@push('class')
    class="signup-page"
@endpush
@section('auth')
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Confirmation <b>Password</b></a>
            <small>Admin Laravel - Flutter</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST" action="{{ url('/sign_link') }}">
                    <div class="msg">Confirmation new pasword</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="old_password" minlength="6"
                                placeholder="Old Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="new_password" minlength="6"
                                placeholder="New Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm_password" minlength="6"
                                placeholder="Confirm Password" required>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SAVE PASSWORD</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="{{ url('/sign_in') }}">Sign In your account</a>
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
