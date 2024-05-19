@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Penulis</h1>
        <a href="{{ route('penulis.create') }}" class="btn btn-primary">Tambah Penulis</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Penulis</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penulis as $p)
                    <tr>
                        <td>{{ $p->kd_penulis }}</td>
                        <td>{{ $p->nama_penulis }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->tanggal_lahir }}</td>
                        <td>{{ $p->tempat_lahir }}</td>
                        <td>
                            <a href="{{ route('penulis.edit', $p->kd_penulis) }}" class="btn btn-warning"style="background-color: blue; color: white;">Edit</a>
                            <form action="{{ route('penulis.destroy', $p->kd_penulis) }}" method="POST" style="display:inline-block;">
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
