<!-- resources/views/peminjaman/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Peminjaman</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID Anggota</th>
                    <th>No Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th> <!-- Kolom untuk tombol edit dan delete -->
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjamans as $peminjaman)
                    <tr>
                        <td>{{ $peminjaman->id_anggota }}</td>
                        <td>{{ $peminjaman->no_buku }}</td>
                        <td>{{ $peminjaman->tanggal_pinjam }}</td>
                        <td>{{ $peminjaman->tanggal_kembali }}</td>
                        <td>{{ $peminjaman->status }}</td>
                        <td>
                            <!-- Tombol edit -->
                            <a href="{{ route('peminjaman.edit', $peminjaman->id_peminjaman) }}" class="btn btn-primary">Edit</a>
                            <!-- Form untuk tombol delete -->
                            <form action="{{ route('peminjaman.destroy', $peminjaman->id_peminjaman) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
