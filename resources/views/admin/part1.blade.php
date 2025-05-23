@extends('admin.template')

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
    </div>
@endsection

@section('js')
@endsection
