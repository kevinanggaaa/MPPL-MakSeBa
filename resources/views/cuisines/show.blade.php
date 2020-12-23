@extends('template.master')

@section('content')
<div class="card-body">
    <div class="tab-content">

        <div id="data-diri">

            <table class="table">
                <div class="text-center">
                    <img class="img-fluid" src="{{ url('/cuisines_photo/'.$cuisine->photo) }}" alt="Cuisine photo">
                </div>
                <tbody>

                    <tr>
                        <td>ID</td>
                        <td>{{ $cuisine->id }}</td>
                    </tr>
                    <tr>
                        <td>Nama Masakan</td>
                        <td>{{ $cuisine->cuisine_name }}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>{{ $cuisine->description }}</td>
                    </tr>
                    <tr>
                        <td>Bahan</td>
                        <td>{{ $cuisine->ingredients }}</td>
                    </tr>
                    <tr>
                        <td>Cara Masak</td>
                        <td>{{ $cuisine->recipe }}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection