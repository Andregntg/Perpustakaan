@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

@section('content')
    <div class="container">
        <h1>Tambah Peminjaman</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('peminjaman.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_anggota">ID Anggota</label>
                <select name="id_anggota" id="id_anggota" class="form-control" required>
                    @foreach($anggota as $a)
                        <option value="{{ $a->id_anggota }}">{{ $a->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="no_buku">No Buku</label>
                <select name="no_buku" id="no_buku" class="form-control" required>
                    @foreach($buku as $b)
                        <option value="{{ $b->no_buku }}">{{ $b->judul }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
            </div>

            <div class="form-group">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="dipinjam">Dipinjam</option>
                    <option value="kembali">Kembali</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
