@extends('layouts.app')
@section('title', 'Beasiswa')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>MENU BEASISWA</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Ubah Menu Beasiswa</h2>
                    </div>
                    <div class="body">
                    <form id="form_validation" action="{{ route ('beasiswa.update', $beasiswa) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label>Judul</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="judul" placeholder="judul" autocomplete="off" value="{{ $beasiswa->judul }}" required/>
                            </div>
                        </div>
                        <label>Ikon</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="ikon" placeholder="ikon" autocomplete="off" value="{{ $beasiswa->ikon }}" required/>
                            </div>
                        </div>
                        <label>Isi</label>
                        <textarea id="ckeditor" name="isi" type="text" required>
                            {{ $beasiswa->isi }}
                        </textarea>
                        <div class="form-group align-center">
                            <button type="submit" class="btn bg-green m-t-15 waves-effect" name="uploadBukti">
                                <i class="material-icons">save</i>
                                <span><strong>SIMPAN</strong></span>
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset ('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset ('js/pages/forms/form-validation.js') }}"></script>
    <script src="{{ asset ('plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset ('js/pages/forms/editors.js') }}"></script>
@endpush
