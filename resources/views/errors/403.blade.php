@section('title', '403')@extends('layouts.error')
@section('error')
    <div class="five-zero-zero-container">
        <div class="error-code">
            <img src="{{ asset('images/forbiden_acces.png') }}" height="200">
        </div>
        <br>
        <br>
        <br>
        <div class="error-message">You do not have access rights to open the site</div>
        <div class="button-place">
            <a href="{{ url('/') }}" class="btn btn-default btn-lg waves-effect">GO TO HOMEPAGE</a>
        </div>
    </div>
@endsection
