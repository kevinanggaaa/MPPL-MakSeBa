@extends('adminlte.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Konselor PMK ITS</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Konselor</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="row">
    <div class="col-md-3">

        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="https://api.adorable.io/avatars/285/abott@adorable.png" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">{{$admin->name}}</h3>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div>

    <div class="col-md-9">

        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#data-diri" data-toggle="tab">Data
                            Diri</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#riwayat" data-toggle="tab">Riwayat</a>
                    </li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">

                    <div id="data-diri">

                        <table class="table">
                            <div class="text-center">
                                <img class="img-fluid" src="{{ url('/cuisines_photo/'.$admin->photo) }}" alt="Cuisine photo">
                            </div>
                            <tbody>

                                <tr>
                                    <td>ID</td>
                                    <td>{{ $admin->id }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Masakan</td>
                                    <td>{{ $admin->cuisine_name }}</td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>{{ $admin->description }}</td>
                                </tr>
                                <tr>
                                    <td>Bahan</td>
                                    <td>{{ $admin->ingredients }}</td>
                                </tr>
                                <tr>
                                    <td>Cara Masak</td>
                                    <td>{{ $admin->recipe }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->

</div>
@endsection