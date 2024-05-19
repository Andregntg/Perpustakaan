@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/style.css">
    <div class="container">
        <h1 class="mb-4">Data Anggota</h1>
        <a href="{{ route('anggota.create') }}" class="btn btn-primary mb-3">Tambah Anggota</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>No. HP</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggotas as $anggota)
                <tr>
                    <td>{{ $anggota->id_anggota }}</td>
                    <td>{{ $anggota->nama }}</td>
                    <td>{{ $anggota->no_hp }}</td>
                    <td>{{ $anggota->alamat }}</td>
                    <td>{{ $anggota->email }}</td>
                    <td>
                        <a href="{{ route('anggota.edit', $anggota->id_anggota) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('anggota.destroy', $anggota->id_anggota) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
