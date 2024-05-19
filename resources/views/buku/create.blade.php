@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Buku</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="no_buku">No Buku</label>
                <input type="number" class="form-control" id="no_buku" name="no_buku" required>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="edisi">Edisi</label>
                <input type="text" class="form-control" id="edisi" name="edisi" required>
            </div>
            <div class="form-group">
                <label for="no_rak">No Rak</label>
                <input type="text" class="form-control" id="no_rak" name="no_rak" required>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="year" class="form-control" id="tahun" name="tahun" required>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" required>
            </div>
            <div class="form-group">
                <label for="kd_penulis">Penulis</label>
                <select name="kd_penulis" id="kd_penulis" class="form-control" required>
                    <option value="">Pilih Penulis</option>
                    @foreach($penulis as $p)
                        <option value="{{ $p->kd_penulis }}">{{ $p->nama_penulis }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
