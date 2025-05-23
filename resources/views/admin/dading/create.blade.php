@extends('admin.template')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Data</title>
</head>
<body>
        <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-header">
                data
            </div>
            <div class="card-body">
                <input class="form-control" type="text" placeholder="Nama" aria-label="default input example"><br>
                <input class="form-control" type="text" placeholder="Tanggal" aria-label="default input example">
            </div>
            <div class="card-fotter">
                <a href="" class="btn btn-primary" onclick="" >simpan</a><br>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
@section('js')