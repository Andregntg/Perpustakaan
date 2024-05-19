@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/style.css">
    <div class="container">
        <h1>Tambah Anggota</h1>
    <body class="bodyCreate">
        
   
        <form action="{{ route('anggota.store') }}" method="POST" class="minimal-form">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="no_hp">No. HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    </body>
@endsection
