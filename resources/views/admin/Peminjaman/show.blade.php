@extends('layouts.admin')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4 max-w-4xl w-full">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Detail Peminjaman</h2>

            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">ID Peminjaman</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $peminjaman->id_peminjaman }}</dd>
                    </div>
                    <div class="bg-white px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">Anggota</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $peminjaman->anggota->nama }}</dd>
                    </div>
                    <div class="bg-gray-50 px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">Buku</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $peminjaman->buku->judul }}</dd>
                    </div>
                    <div class="bg-white px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">Tanggal Pinjam</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $peminjaman->tgl_peminjaman }}</dd>
                    </div>
                    <div class="bg-gray-50 px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">Tanggal Kembali</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $peminjaman->tgl_pengembalian }}</dd>
                    </div>
                    <div class="bg-white px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500">Status</dt>
                        <dd class="mt-1 text-sm text-gray-900 col-span-2">{{ $peminjaman->status }}</dd>
                    </div>
                </dl>
            </div>

            <div class="mt-6">
                <a href="{{ route('admin.peminjaman.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Kembali ke Daftar Peminjaman
                </a>
            </div>
        </div>
    </div>
    @endsection