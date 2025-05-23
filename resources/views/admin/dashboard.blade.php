@extends('admin.template')
  {{ $no = 1 }}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">



@section('content')

<div class="col-lg-12">
        <div class="card w-100">
            <div class="container mt-4">
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <i class="bi bi-house-door-fill me-2 fs-4"></i>
                    <div>
                     Selamat datang<strong> Admin</strong>! Semoga harimu menyenangkan 🌟
                    </div>
                </div>
                </div>
            </div>
        </div>

    <div class="col-lg-12">
        <div class="card w-100">
        <div class="card-body">
            <button type="button" class="btn btn-primary">
                {{-- <a href="/part1" class="text-white text-decoration-none"> --}}
                <i class="bi bi-plus-circle me-1"></i> Tambah
            </button>
        </div>
        </div>
    </div>
</div>

            <!-- table-->
                <div class="container mt-2">
                    <table class="table table-bordered table-striped align-middle mt-3">
                        <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>Ondi Asroni</td>
                    <td>Jln. Merdeka  No. 123</td>
                    <td>Ondi817@gmail.com</td>
                    <td>081234567890</td>

                    <td class="text-left">
                        <span type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
                            <i class="bi bi-pencil-square"></i> Edit
                        </span>

                        <!-- Modal -->
                            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="edit"><i class="bi bi-pencil-square"></i> Edit Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container mt-2">
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
                                            </form>
                                            </div>
                                     </div>
                                     <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
                            <i class="bi bi-trash3"></i> Delete
                        </button>

                        <!-- Modal -->
                            <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="delete"><i class="bi bi-trash3"></i> Hapus Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus data ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </div>
                                </div>
                            </div>
                            </div>

                    </td>
                </tr>

                <tbody>
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>Laola Wardani</td>
                    <td>Jln Taman Gunung Rinjani Sembalun No. 143</td>
                    <td>laola@gmail.com</td>
                    <td>081234667890</td>
                    <td class="text-left">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>

                        <!-- Modal -->
                            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="edit"><i class="bi bi-pencil-square"></i> Edit Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container mt-2">
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
                                            </form>
                                            </div>
                                     </div>
                                     <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
                            <i class="bi bi-trash3"></i> Delete
                        </button>

                        <!-- Modal -->
                            <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="delete"><i class="bi bi-trash3"></i> Hapus Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus data ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </div>
                                </div>
                            </div>
                            </div>

                    </td>
                </tr>
                <tbody>
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>Dading Oktaviadi</td>
                    <td>Jln Langko kota Mataram No. 133</td>
                    <td>dading@gmail.com</td>
                    <td>081234567890</td>
                    <td class="text-left">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>

                        <!-- Modal -->
                            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="edit"><i class="bi bi-pencil-square"></i> Edit Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container mt-2">
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
                                            </form>
                                            </div>
                                     </div>
                                     <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
                            <i class="bi bi-trash3"></i> Delete
                        </button>

                        <!-- Modal -->
                            <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="delete"><i class="bi bi-trash3"></i> Hapus Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus data ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </div>
                                </div>
                            </div>
                            </div>

                    </td>
                </tr>
                <tbody>
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>Muhammad Ikhwan</td>
                    <td>Jln Merpati No. 123</td>
                    <td>ikhwan@gmail.com</td>
                    <td>081234567890</td>
                   <td class="text-left">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>

                        <!-- Modal -->
                            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="edit"><i class="bi bi-pencil-square"></i> Edit Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container mt-2">
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
                                            </form>
                                            </div>
                                     </div>
                                     <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
                            <i class="bi bi-trash3"></i> Delete
                        </button>

                        <!-- Modal -->
                            <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="delete"><i class="bi bi-trash3"></i> Hapus Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus data ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </div>
                                </div>
                            </div>
                            </div>
                    </td>
                </tr>
                <!-- Tambahkan baris data lain di sini -->
                </tbody>
            </table>
            </div>
            <!--endtabel-->

@endsection

@section('js')

@endsection