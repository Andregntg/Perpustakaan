@extends('layouts.admin')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4 max-w-md w-full">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Edit Anggota</h2>

            @if ($errors->any())
                <div class="mb-4 text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.anggota.update', $anggota->id_anggota) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="nama" name="nama" value="{{ $anggota->nama }}" required>
                </div>
                <div class="mb-5">
                    <label for="no_hp" class="block text-sm font-medium text-gray-700">No HP</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="no_hp" name="no_hp" value="{{ $anggota->no_hp }}" required>
                </div>
                <div class="mb-5">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="alamat" name="alamat" value="{{ $anggota->alamat }}" required>
                </div>
                <div class="mb-5">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="email" name="email" value="{{ $anggota->email }}" required>
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md shadow focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-300">
                        Simpan
                    </button>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <a href="{{ route('admin.anggota.index') }}" class="w-full text-center py-2 px-4 bg-gray-600 hover:bg-gray-700 text-white rounded-md shadow focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition duration-300">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
