<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card-body">
        <div class="tab-content">

            <div id="data-diri">

                <table class="table">

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

</body>

</html>