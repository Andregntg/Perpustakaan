@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Anggota</h1>

        <div class="card">
            <div class="card-header">
                {{ $anggota->nama }}
            </div>
            <div class="card-body">
                <p><strong>No. HP:</strong> {{ $anggota->no_hp }}</p>
                <p><strong>Alamat:</strong> {{ $anggota->alamat }}</p>
                <p><strong>Email:</strong> {{ $anggota->email }}</p>
            </div>
        </div>

        <a href="{{ route('anggota.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </div>
@endsection
