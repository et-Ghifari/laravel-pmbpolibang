@section('title', '404')@extends('layouts.error')
@section('error')
    <div class="five-zero-zero-container">
        <div class="error-code">
            <img src="{{ asset('images/file_not_exist.png') }}" height="200">
        </div>
        <br>
        <br>
        <br>
        <div class="error-message">This page doesn't exist</div>
        <div class="button-place">
            <a href="{{ url('/') }}" class="btn btn-default btn-lg waves-effect">GO TO HOMEPAGE</a>
        </div>
    </div>
@endsection
