@extends('layouts.error')
@section('title', '503')
@section('error')
    <div class="five-zero-zero-container">
        <div class="error-code">
            <img src="{{ asset('images/maintenance.png') }}" height="200">
        </div>
        <br>
        <br>
        <br>
        <div class="error-message">Internal Server Maintenance</div>
    </div>
@endsection
