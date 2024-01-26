@extends('layouts.app')
@section('title', 'User')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>MANAJEMEN USER</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>Manajemen User</h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <a type="button" href="{{ url ('user') }}" class="btn btn-default waves-effect" data-toggle="tooltip" data-placement="bottom" title="Perbarui"><i class="material-icons">refresh</i></a>
                                    <!--<a href="addUser.php" class="btn bg-green waves-effect">
                                        <i class="material-icons">add_circle_outline</i>
                                        <span><strong>TAMBAH</strong></span>
                                    -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="table">
                            <table class="table table-bordered table-striped table-hover js-basic-example">
                                <thead>
                                    <tr>
                                        <th class="col-sm-1 align-center">FOTO</th>
                                        <th class="col-sm-3 ">NAMA LENGKAP</th>
                                        <th class="col-sm-3 ">ALAMAT EMAIL</th>
                                        <th class="col-sm-3 ">TELEPHONE</th>
                                        <th class="col-sm-1 align-center"><i class="material-icons">verified_user</i></th>
                                        <th class="col-sm-2 align-center"><i class="material-icons">settings</i></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="align-center"><img src="{{ asset ('images/users/image.png') }}" width="40" height="40" alt=""></td>
                                        <td></td>
                                        <td><</td>
                                        <td><</td>
                                        <td class="align-center">

                                            <span class="badge bg-green"><h6>Active</h2></span>

                                            <span class="badge bg-orange"><h6>Pending</h2></span>

                                        </td>
                                        <td class="align-center">
                                            <a href="" class="btn bg-cyan waves-effect" title="Edit User"><i class="material-icons">edit</i></a>
                                            <a href="" class="btn btn-danger waves-effect" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" title="Hapus User"><i class="material-icons">delete_forever</i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
