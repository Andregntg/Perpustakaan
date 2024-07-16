@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-3xl font-bold">Edit Buku</h1>

    @if ($errors->any())
        <div class="bg-red-500 text-white font-bold py-2 px-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.buku.update', $buku->no_buku) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="judul" class="block text-sm font-medium text-gray-700">Judul:</label>
            <input type="text" id="judul" name="judul" value="{{ $buku->judul }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="edisi" class="block text-sm font-medium text-gray-700">Edisi:</label>
            <input type="text" id="edisi" name="edisi" value="{{ $buku->edisi }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="no_rak" class="block text-sm font-medium text-gray-700">Rak:</label>
            <select id="no_rak" name="no_rak" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                @foreach($rakList as $rak)
                    <option value="{{ $rak->kd_rak }}" {{ $buku->kd_rak == $rak->kd_rak ? 'selected' : '' }}>
                        {{ $rak->kd_rak }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun:</label>
            <input type="date" id="tahun" name="tahun" value="{{ $buku->tahun }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="penerbit" class="block text-sm font-medium text-gray-700">Penerbit:</label>
            <input type="text" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="kd_penulis" class="block text-sm font-medium text-gray-700">Penulis:</label>
            <select id="kd_penulis" name="kd_penulis" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                @foreach($penulisList as $penulis)
                    <option value="{{ $penulis->kd_penulis }}" {{ $buku->kd_penulis == $penulis->kd_penulis ? 'selected' : '' }}>
                        {{ $penulis->nama_penulis }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
        <a href="{{ route('admin.buku.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Kembali</a>
    </form>
</div>
@endsection
