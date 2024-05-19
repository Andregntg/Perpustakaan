@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Anggota</h1>

        <form action="{{ route('anggota.update', $anggota->id_anggota) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $anggota->nama }}" required>
            </div>
            <div class="form-group">
                <label for="no_hp">No. HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $anggota->no_hp }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required>{{ $anggota->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $anggota->email }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
