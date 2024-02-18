@extends('layouts.app')
@section('title', 'Biaya')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>MENU BIAYA</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Ubah Menu Biaya</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" action="{{ route ('biaya.update', $biaya) }}" method="POST" >
                            @csrf
                            @method('PUT')
                            <div class="body">
                                <div class="row">
                                    <label>Judul</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="judul" placeholder="nama" required autocomplete="off" value="{{ $biaya->judul }}" required/>
                                        </div>
                                    </div>
                                    <label>Total</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="total" placeholder="jabatan" required autocomplete="off" value="{{ $biaya->total }}" required/>
                                        </div>
                                    </div>
                                    <label>Sumbangan</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="sumbangan" placeholder="nama" required autocomplete="off" value="{{ $biaya->sumbangan }}" required/>
                                        </div>
                                    </div>
                                    <label>Semester</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="semester" placeholder="jabatan" required autocomplete="off" value="{{ $biaya->semester }}" required/>
                                        </div>
                                    </div>
                                    <label>Jas</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="jas" placeholder="nama" required autocomplete="off" value="{{ $biaya->jas }}" required/>
                                        </div>
                                    </div>
                                    <label>Posma</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="posma" placeholder="jabatan" required autocomplete="off" value="{{ $biaya->posma }}" required/>
                                        </div>
                                    </div>
                                    <label>Sarung</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="sarung" placeholder="nama" required autocomplete="off" value="{{ $biaya->sarung }}" required/>
                                        </div>
                                    </div>
                                    <label>Bulanan</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="bulanan" placeholder="jabatan" required autocomplete="off" value="{{ $biaya->bulanan }}" required/>
                                        </div>
                                    </div>
                                    <label>Almari</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="almari" placeholder="nama" required autocomplete="off" value="{{ $biaya->almari }}" required/>
                                        </div>
                                    </div>
                                    <label>Loundry</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="loundry" placeholder="jabatan" required autocomplete="off" value="{{ $biaya->loundry }}" required/>
                                        </div>
                                    </div>
                                    <label>Class</label>
                                    <div class="form-group form-float">
                                        <div class="demo-radio-button">
                                            @if ($biaya->class=='na')
                                                <input name="class" value="na" type="radio" id="radio_1" required checked/>
                                                <label for="radio_1">Tidak Aktif</label>
                                                <input name="class" value="" type="radio" id="radio_2" required />
                                                <label for="radio_2">Aktif</label>
                                            @endif
                                            @if ($biaya->class=='')
                                                <input name="class" value="na" type="radio" id="radio_1" required />
                                                <label for="radio_1">Tidak Aktif</label>
                                                <input name="class" value="" type="radio" id="radio_2" required checked/>
                                                <label for="radio_2">Aktif</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script src="{{ asset ('js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ asset ('pages/forms/basic-form-elements.js') }}"></script>
    <script src="{{ asset ('js/display.js') }}"></script>
@endpush
