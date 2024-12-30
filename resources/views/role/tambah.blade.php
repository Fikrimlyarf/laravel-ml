@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>Tambah Role</h4>
    <div class="ms-auto">
        <a class="btn btn-warning" href="{{ route('role.list-role') }}">Kembali ke list</a>
    </div>
</div>

<form action="{{ route('role.submit') }}" method="post">
    @csrf
    <label>Role</label>
    <input type="text" name="name" class="form-control mb-2">

    <button class="btn btn-primary">Simpan Role</button>
</form>

@endsection