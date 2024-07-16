@extends('layouts.admin')

@section('content')

    <div class="container mx-auto mt-8 px-4">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Detail Buku</h2>
        <div class="bg-white shadow-lg overflow-hidden rounded-lg">
            <div class="px-6 py-4 bg-gray-200 border-b border-gray-200">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Informasi Buku</h3>
                <p class="mt-1 text-sm text-gray-600">Detail lengkap dari buku perpustakaan.</p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">No Buku</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $buku->no_buku }}</dd>
                    </div>
                    <div class="bg-white px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">Judul</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $buku->judul }}</dd>
                    </div>
                    <div class="bg-gray-50 px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">Edisi</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $buku->edisi }}</dd>
                    </div>
                    <div class="bg-white px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">No Rak</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $buku->no_rak }}</dd>
                    </div>
                    <div class="bg-gray-50 px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">Tahun</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $buku->tahun }}</dd>
                    </div>
                    <div class="bg-white px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">Penerbit</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $buku->penerbit }}</dd>
                    </div>
                    <div class="bg-gray-50 px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">Kode Penulis</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $buku->kd_penulis }}</dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="mt-6">
            <a href="{{ route('admin.buku.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Kembali ke Daftar Buku
            </a>
        </div>
    </div>
    @endsection