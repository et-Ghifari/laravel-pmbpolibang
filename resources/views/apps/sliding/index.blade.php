@extends('layouts.app')
@section('title', 'Sliding')
@push('style')

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                SLIDING IMAGE
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Manajemen Sliding Image
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <a href="{{ route ('sliding.create') }}" class="btn bg-green waves-effect">
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
                        </div>
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            @foreach ($slidings as $sliding)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset ('storage/sliding/'.$sliding->foto) }}" data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail" src="{{ asset ('storage/sliding/'.$sliding->foto) }}" height="100px" width="200px">
                                </a>
                                <a href="{{ route ('sliding.edit', $sliding->id) }}" class="btn bg-cyan waves-effect " title="Edit User"><i class="material-icons">edit</i></a>
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
    <script src="{{ asset ('plugins/light-gallery/js/lightgallery-all.js') }}"></script>
    <script src="{{ asset ('js/pages/medias/image-gallery.js') }}"></script>
@endpush
