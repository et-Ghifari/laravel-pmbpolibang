@extends('layouts.app')
@section('title', 'Beasiswa')
@push('style')

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                MENU BEASISWA
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>Manajemen Menu Beasiswa</h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <a href="{{ route ('beasiswa.create') }}" class="btn bg-green waves-effect">
                                        <i class="material-icons">add_circle_outline</i>
                                        <span>TAMBAH</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                @include('layouts.alert')
                            </div>
                            @foreach ($beasiswas as $beasiswa)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h4>{{ $beasiswa->judul }}</h4>
                                <br>
                                {!! $beasiswa->isi !!}
                                <a href="{{ route ('beasiswa.edit', $beasiswa->id) }}" class="btn bg-cyan waves-effect"><i class="material-icons">edit</i></a>
                                <form action="{{ route ('beasiswa.destroy', $beasiswa->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger waves-effect" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="material-icons">delete_forever</i></button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset ('plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset ('js/pages/forms/editors.js') }}"></script>
@endpush
