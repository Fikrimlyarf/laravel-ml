@extends('layout')

@section('konten')

<div class="container justify-content-center p-2 col-md-8">
    <div class="d-flex">
        <h4>Daftar Lane</h4>
        <div class="ms-auto">
            <a class="btn btn-success" href="">Tambah Lane</a>
            <a class="btn btn-info" href="/">Kembali ke menu</a>
        </div>
    </div>

    <div class="table-responsive-sm">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Lane</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Gold Lane</td>
                    <td>
                        <div class="d-flex">
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            &nbsp;
                            <form action="" method="post">
                                <!-- @csrf -->
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection