@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/style.css">

    <div class="container">
        <h1>Edit Buku</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('buku.update', $buku->no_buku) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="no_buku">No Buku</label>
                <input type="number" class="form-control" id="no_buku" name="no_buku" value="{{ $buku->no_buku }}" required>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}" required>
            </div>
            <div class="form-group">
                <label for="edisi">Edisi</label>
                <input type="text" class="form-control" id="edisi" name="edisi" value="{{ $buku->edisi }}" required>
            </div>
            <div class="form-group">
                <label for="no_rak">No Rak</label>
                <input type="text" class="form-control" id="no_rak" name="no_rak" value="{{ $buku->no_rak }}" required>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" class="form-control" id="tahun" name="tahun" value="{{ $buku->tahun }}" required>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" required>
            </div>
            <div class="form-group">
                <label for="kd_penulis">Penulis</label>
                <select name="kd_penulis" id="kd_penulis" class="form-control" required>
                    @foreach($penulis as $p)
                        <option value="{{ $p->kd_penulis }}" {{ $buku->kd_penulis == $p->kd_penulis ? 'selected' : '' }}>
                            {{ $p->nama_penulis }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
