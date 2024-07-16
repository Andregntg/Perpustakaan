@extends('layouts.admin')

@section('content')    <div class="container mx-auto mt-8 px-4">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Detail Sanksi</h2>
        <div class="bg-white shadow-lg overflow-hidden rounded-lg">
            <div class="px-6 py-4 bg-gray-200 border-b border-gray-200">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Informasi Sanksi</h3>
                <p class="mt-1 text-sm text-gray-600">Detail lengkap dari sanksi perpustakaan.</p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">ID Sanksi</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $sanksi->id_sanksi }}</dd>
                    </div>
                    <div class="bg-white px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">ID Anggota</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $sanksi->id_anggota }}</dd>
                    </div>
                    <div class="bg-gray-50 px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">ID Peminjaman</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $sanksi->id_peminjaman }}</dd>
                    </div>
                    <div class="bg-white px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">Jumlah Denda</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $sanksi->jumlah_denda }}</dd>
                    </div>
                    <div class="bg-gray-50 px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">Status</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $sanksi->status }}</dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="mt-6">
            <a href="{{ route('admin.sanksi.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Kembali ke Daftar Sanksi
            </a>
        </div>
    </div>
    @endsection
