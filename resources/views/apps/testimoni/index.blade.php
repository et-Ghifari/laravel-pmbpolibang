@extends('layouts.app')
@section('title', 'Testimoni')
@push('style')

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                MENU TESTIMONI
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>Data Testimoni</h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <a href="{{ route ('testimoni.create') }}" class="btn bg-green waves-effect">
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
                            @foreach ($testimonis as $testimoni)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img class="img-responsive thumbnail" src="{{ asset ('storage/testimoni/'.$testimoni->foto) }}" height="150px" width="300px">
                                <h4>{{ $testimoni->nama }}</h4>
                                <span>{{ $testimoni->jabatan }}</span>
                                <br></br>
                                <p>{{ $testimoni->isi }}</p>
                                <a href="{{ route ('testimoni.edit', $testimoni->id) }}" class="btn bg-cyan waves-effect"><i class="material-icons">edit</i></a>
                                <form action="{{ route ('testimoni.destroy', $testimoni->id) }}" method="POST">
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
