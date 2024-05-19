@extends('layouts.app')
<link rel="stylesheet" href="/css/style.css">

@section('content')
    <div class="container">
        <h1>Daftar Buku</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No Buku</th>
                    <th>Judul</th>
                    <th>Edisi</th>
                    <th>No Rak</th>
                    <th>Tahun</th>
                    <th>Penerbit</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $buku)
                    <tr>
                        <td>{{ $buku->no_buku }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->edisi }}</td>
                        <td>{{ $buku->no_rak }}</td>
                        <td>{{ $buku->tahun }}</td>
                        <td>{{ $buku->penerbit }}</td>
                        <td>{{ $buku->penulis->nama_penulis }}</td>
                        <td>
                            <a href="{{ route('buku.edit', $buku->no_buku) }}" class="btn btn-warning"style="background-color: blue; color: white;">Edit</a>
                            <form action="{{ route('buku.destroy', $buku->no_buku) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
