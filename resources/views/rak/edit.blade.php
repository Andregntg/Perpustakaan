<!-- resources/views/rak/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Rak</h2>
        <form action="{{ route('rak.update', $rak->kd_rak) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $rak->lokasi }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
