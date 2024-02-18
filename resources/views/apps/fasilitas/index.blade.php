@extends('layouts.app')
@section('title', 'Fasilitas')
@push('style')

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                MENU FASILITAS
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Manajemen Menu Fasilitas
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <a href="{{ route ('fasilitas.create') }}" class="btn bg-green waves-effect">
                                <i class="material-icons">add_circle_outline</i>
                                <span>TAMBAH</span>
                            </a>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                @include('layouts.alert')
                            </div>
                            @foreach ($fasilitas as $fasilita)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img class="img-responsive thumbnail" src="{{ asset ('storage/sliding/'.$fasilita->foto) }}" height="150px" width="300px">
                                <h4>{{ $fasilita->judul }}</h4>
                                <span>{{ $fasilita->keterangan }}</span>
                                <a href="{{ route ('fasilitas.edit', $fasilita->id) }}" class="btn bg-cyan waves-effect"><i class="material-icons">edit</i></a>
                                <form action="{{ route ('fasilitas.destroy', $fasilita->id) }}" method="POST">
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

@endpush
