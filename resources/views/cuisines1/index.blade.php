<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masakan</title>
    <link rel="stylesheet" href=" {{ asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('/datatables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="{{ asset('/bootstrap/js/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('/datatables/js/jquery.dataTables.min.js')}}"></script>
</head>

<body>
    <div class="card-tools">
        <div class="">
            <a class="btn btn-success" href="{{ route('cuisines.create') }}"> Tambah data masakan</a>
        </div>
    </div>
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Makanan</th>
                <th>Deskripsi</th>
                <th style="width: 280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cuisines as $cuisine)
            <tr>
                <td>{{ $cuisine->id }}</td>
                <td>{{ $cuisine->cuisine_name }}</td>
                <td>{{ $cuisine->description }}</td>
                <td>
                    <div style="display: flex">
                        <div style="margin-right: 5px;">
                            <a class="btn btn-info" href="{{ route('cuisines.show',$cuisine->id) }}"><i class="fa fa-eye"></i></a>
                        </div>
                        <div style="margin-right: 5px;">
                            <a class="btn btn-primary" href="{{ route('cuisines.edit',$cuisine->id) }}"><i class="fa fa-edit"></i></a>
                        </div>
                        <div style="margin-right: 5px;">
                            <form action="{{ route('cuisines.destroy', $cuisine->id) }}" method="POST" class="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger deleteData"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</body>

</html>