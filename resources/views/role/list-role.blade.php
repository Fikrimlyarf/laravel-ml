@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>Daftar Role</h4>
    <div class="ms-auto">
        <a  class="btn btn-success" href="{{ route('role.tambah') }}">Tambah Role</a>
        <a  class="btn btn-info" href="/">Kembali ke menu</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Role</th>
        <th>Aksi</th>
    </tr>
    @foreach($role as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->name }}</td>
        <td>
            <div class="d-flex">
                <a href="{{ route('role.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>                
                <form action="{{ route('role.delete', $data->id) }}" method="post">
                    @csrf
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>

@endsection