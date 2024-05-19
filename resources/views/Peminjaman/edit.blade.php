<!-- resources/views/peminjaman/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Peminjaman</h1>
        <form action="{{ route('peminjaman.update', $peminjaman->id_peminjaman) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_anggota">ID Anggota</label>
                <select name="id_anggota" id="id_anggota" class="form-control">
                    @foreach($anggota as $a)
                        <option value="{{ $a->id_anggota }}" {{ $peminjaman->id_anggota == $a->id_anggota ? 'selected' : '' }}>{{ $a->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="no_buku">No Buku</label>
                <select name="no_buku" id="no_buku" class="form-control">
                    @foreach($buku as $b)
                        <option value="{{ $b->no_buku }}" {{ $peminjaman->no_buku == $b->no_buku ? 'selected' : '' }}>{{ $b->judul }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ $peminjaman->tanggal_pinjam }}">
            </div>

            <div class="form-group">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="{{ $peminjaman->tanggal_kembali }}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="dipinjam" {{ $peminjaman->status == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                    <option value="kembali" {{ $peminjaman->status == 'kembali' ? 'selected' : '' }}>Kembali</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
