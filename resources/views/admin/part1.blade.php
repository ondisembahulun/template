@extends('admin.template')

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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

@section('content')
    
            <div class="container mt-5">
            <h4>
                <i class="bi bi-plus-circle me-1"></i>Form Tambah Data
            </h4>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    </div>

                    <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                        <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
                    </div>
                    </div>

                    <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    </div>

                    <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telp</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                    </div>
                    </div>

                    <button type="submit" class="btn btn-success">
                    <i class="bi bi-plus-circle me-1"></i> Simpan
                    </button>
                    <a href="#" class="btn btn-secondary">Batal</a>
                </form>
                </div>
>>>>>>> 429af7e (PR telah dikerjakan namun banyak yang salah)
    </div>
@endsection

@section('js')
@endsection
