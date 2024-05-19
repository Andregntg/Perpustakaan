<!-- resources/views/rak/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Rak Baru</h2>
        <form action="{{ route('rak.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
