@extends('layouts.admin')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4 max-w-md w-full">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Tambah Sanksi Baru</h2>
            <form action="{{ route('admin.sanksi.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="id_anggota" class="block text-sm font-medium text-gray-700">Anggota</label>
                    <select name="id_anggota" id="id_anggota" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        @foreach($anggotaList as $anggota)
                            <option value="{{ $anggota->id_anggota }}">{{ $anggota->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="id_peminjaman" class="block text-sm font-medium text-gray-700">Peminjaman</label>
                    <select name="id_peminjaman" id="id_peminjaman" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        @foreach($peminjamanList as $peminjaman)
                            <option value="{{ $peminjaman->id_peminjaman }}">{{ $peminjaman->id_peminjaman }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="jumlah_denda" class="block text-sm font-medium text-gray-700">Jumlah Denda</label>
                    <input type="number" name="jumlah_denda" id="jumlah_denda" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-5">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        <option value="tunggakan">Tunggakan</option>
                        <option value="lunas">Lunas</option>
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
