@extends('layouts.admin')

@section('content')

    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4 max-w-md w-full">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Tambah Buku Baru</h2>

            <form action="{{ route('admin.buku.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="no_buku" class="block text-sm font-medium text-gray-700">No Buku</label>
                    <input type="text" name="no_buku" id="no_buku" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-5">
                    <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" name="judul" id="judul" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-5">
                    <label for="edisi" class="block text-sm font-medium text-gray-700">Edisi</label>
                    <input type="text" name="edisi" id="edisi" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-5">
                    <label for="no_rak" class="block text-sm font-medium text-gray-700">No Rak</label>
                    <select name="no_rak" id="no_rak" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        <option value="" disabled selected>Pilih Rak</option>
                        @foreach($rakList as $rak)
                            <option value="{{ $rak->kd_rak }}">{{ $rak->kd_rak }}</option> <!-- Menggunakan kd_rak -->
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun</label>
                    <input type="number" name="tahun" id="tahun" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" min="1000" max="{{ date('Y') }}" required>
                </div>
                <div class="mb-5">
                    <label for="penerbit" class="block text-sm font-medium text-gray-700">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbit" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-5">
                    <label for="kd_penulis" class="block text-sm font-medium text-gray-700">Kode Penulis</label>
                    <select name="kd_penulis" id="kd_penulis" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        <option value="" disabled selected>Pilih Penulis</option>
                        @foreach($penulisList as $penulis)
                            <option value="{{ $penulis->kd_penulis }}">{{ $penulis->nama_penulis }}</option> <!-- Menggunakan nama_penulis -->
                        @endforeach
                    </select>
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md shadow focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-300">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endsection