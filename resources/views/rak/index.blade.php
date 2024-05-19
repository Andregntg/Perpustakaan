<!-- resources/views/rak/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Rak</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Rak</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($raks as $rak)
                <tr>
                    <td>{{ $rak->kd_rak }}</td>
                    <td>{{ $rak->lokasi }}</td>
                    <td>
                        <a href="{{ route('rak.edit', $rak->kd_rak) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('rak.destroy', $rak->kd_rak) }}" method="POST" style="display:inline;">
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
