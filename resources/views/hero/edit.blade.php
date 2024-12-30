@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>Ubah Hero</h4>
    <div class="ms-auto">
        <a class="btn btn-warning" href="{{ route('hero.list-hero') }}">Kembali ke list</a>
    </div>
</div> 

<form action="{{ route('hero.update', $hero->id) }}" method="post">
    @csrf
    <label>Name Hero</label>
    <input type="text" name="name" value="{{ $hero->name }}" class="form-control mb-2">
    <label>Nick Name</label>
    <input type="text" name="nickname" value="{{ $hero->nickname }}" class="form-control mb-2">
    <label>Role</label>
    <input type="text" name="role" value="{{ $hero->role }}" class="form-control mb-2">
    <label>Lane Recc</label>
    <input type="text" name="lane" value="{{ $hero->lane_recc }}" class="form-control mb-2">
    <label>Speciality</label>
    <input type="text" name="speciality" value="{{ $hero->speciality }}" class="form-control mb-2">
    <label>Damage Type</label>
    <input type="text" name="damage" value="{{ $hero->damage }}" class="form-control mb-2">
    <label>Price</label>
    <input type="number" name="price" value="{{ $hero->price }}" class="form-control mb-2">

    <button class="btn btn-primary">Ubah Hero</button>
</form>

@endsection