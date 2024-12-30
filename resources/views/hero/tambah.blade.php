@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>Tambah Hero</h4>
    <div class="ms-auto">
        <a class="btn btn-warning" href="{{ route('hero.list-hero') }}">Kembali ke list</a>
    </div>
</div>

<form action="{{ route('hero.submit') }}" method="post">
    @csrf
    <label>Name Hero</label>
    <input type="text" name="name" class="form-control mb-2">
    <label>Nick Name</label>
    <input type="text" name="nickname" class="form-control mb-2">

    <label>Role</label>
    <select class="form-select mb-2" name="role" aria-label="Default select example">
        <option selected>--Pilih Role--</option>
        @foreach($role as $data)
        <option value="{{ $data->id }}">{{ $data->name }}</option>
        @endforeach
    </select>

    <label>Lane Recc</label>
    <input type="text" name="lane" class="form-control mb-2">
    <label>Speciality</label>
    <input type="text" name="speciality" class="form-control mb-2">
    <label>Damage Type</label>
    <input type="text" name="damage" class="form-control mb-2">
    <label>Price</label>
    <input type="number" name="price" class="form-control mb-2">

    <button class="btn btn-primary">Simpan Hero</button>
</form>

@endsection