@extends('layouts.app')
@section('content')
<div class="container">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <h1>Tambah Penulis</h1>

    <form action="{{ route('penulis.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama_penulis">Nama Penulis</label>
            <input type="text" class="form-control" id="nama_penulis" name="nama_penulis" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
