@extends('layouts.admin')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4 max-w-md w-full">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Edit Penulis</h2>
            <form action="{{ route('admin.penulis.update', $penulis->kd_penulis) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="nama_penulis" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="nama_penulis" id="nama_penulis" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $penulis->nama_penulis }}" required>
                </div>
                <div class="mb-5">
                    <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $penulis->tempat_lahir }}" required>
                </div>
                <div class="mb-5">
                    <label for="tgl_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $penulis->tgl_lahir }}" required>
                </div>
                <div class="mb-5">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $penulis->email }}" required>
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md shadow focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-300">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
