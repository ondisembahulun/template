@extends('admin.template')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<<<<<<< HEAD
@section('content')
    <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-body">
                <a href="{{route('create')}}" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td>
                               Nama
                            </td>
                            <td>
                                Tanggal
                            </td>
                            <td>
                                Action
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>iman</td>
                            <td>2</td>
                            <td>
                                <a href="{{route('edit')}}" class="btn btn-success">Edit</a>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
=======
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
@section('js')
@endsection
