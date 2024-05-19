<!-- resources/views/penulis/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Penulis</h1>
<a href="{{ route('penulis.edit', ['id' => $penulis->nama_penulis]) }}">Edit</a>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_penulis">Nama Penulis</label>
                <input type="text" class="form-control" id="nama_penulis" name="nama_penulis" value="{{ $penulis->nama_penulis }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $penulis->email }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $penulis->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $penulis->tanggal_lahir }}" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $penulis->tempat_lahir }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
