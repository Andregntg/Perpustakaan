@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Buku</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $buku->judul }}</h5>
                <p class="card-text"><strong>Edisi:</strong> {{ $buku->edisi }}</p>
                <p class="card-text"><strong>Nomor Rak:</strong> {{ $buku->no_rak }}</p>
                <p class="card-text"><strong>Tahun Terbit:</strong> {{ $buku->tahun }}</p>
                <p class="card-text"><strong>Penerbit:</strong> {{ $buku->penerbit }}</p>
                <p class="card-text"><strong>Kode Penulis:</strong> {{ $buku->kd_penulis }}</p>
            </div>
        </div>
    </div>
@endsection
