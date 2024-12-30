@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>Daftar Hero</h4>
    <div class="ms-auto">
        <a  class="btn btn-success" href="{{ route('hero.tambah') }}">Tambah Hero</a>
        <a  class="btn btn-info" href="/">Kembali ke menu</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No Hero Order</th>
        <th>Name Hero</th>
        <th>Nickname</th>
        <th>Role</th>
        <th>Lane Recc</th>
        <th>Specialty</th>
        <th>Damage Type</th>
        <th>Price</th>
        <th>Aksi</th>
    </tr>
    @foreach($hero as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->nickname }}</td>
        <td>{{ $data->role }}</td>
        <td>{{ $data->lane_recc }}</td>
        <td>{{ $data->speciality }}</td>
        <td>{{ $data->damage }}</td>
        <td>{{ $data->price }}</td>
        <td>
            <div class="d-flex">
                <a href="{{ route('hero.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>                
                <form action="{{ route('hero.delete', $data->id) }}" method="post">
                    @csrf
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>

@endsection