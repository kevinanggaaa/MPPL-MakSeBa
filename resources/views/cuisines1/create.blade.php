<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Masakan</title>

    <link rel="stylesheet" href=" {{ asset('/bootstrap/css/bootstrap.min.css')}}">
    <script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</head>

<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <form role="form" method="POST" action="{{ route('cuisines.store')  }}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="cuisine_name">Nama Masakan</label>
                                    <input type="text" class="form-control" id="cuisine_name" name="cuisine_name" placeholder="Masukkan Nama Masakan" value="{{old('name')}}" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi Masakan" value="{{old('description')}}" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="ingredients">Bahan</label>
                                    <input type="text" class="form-control" id="ingredients" name="ingredients" placeholder="Masukkan Bahan Masakan" value="{{old('ingredients')}}" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="recipe">Cara Masak</label>
                                    <input type="text" class="form-control" id="recipe" name="recipe" placeholder="Masukkan Cara Masak" value="{{old('recipe')}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>