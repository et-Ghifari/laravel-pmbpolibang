@section('title', '500')@extends('layouts.error')
@section('error')
    <div class="five-zero-zero-container">
        <div class="error-code">500</div>
        <div class="error-message">Upss! someting when wrong on our servers</div>
        <div class="button-place">
            <a href="{{ url('/') }}" class="btn btn-default btn-lg waves-effect">GO TO HOMEPAGE</a>
        </div>
    </div>
@endsection
