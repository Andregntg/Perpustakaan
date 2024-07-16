@extends('layouts.user')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Buku</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No Buku</th>
                        <th>Judul</th>
                        <th>Edisi</th>
                        <th>No Rak</th>
                        <th>Tahun</th>
                        <th>Penerbit</th>
                        <th>Kode Penulis</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bukuList as $buku)
                        <tr>
                            <td>{{ $buku->no_buku }}</td>
                            <td>{{ $buku->judul }}</td>
                            <td>{{ $buku->edisi }}</td>
                            <td>{{ $buku->no_rak }}</td>
                            <td>{{ $buku->tahun }}</td>
                            <td>{{ $buku->penerbit }}</td>
                            <td>{{ $buku->kd_penulis }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $bukuList->links() }}
        </div>
    </div>
@endsection
