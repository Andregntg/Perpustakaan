@extends('layouts.admin')
@vite('public/js/costum.js')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Daftar Peminjaman</h1>
        <div class="flex justify-between mb-6">
            <div></div>
            <a href="{{ route('admin.peminjaman.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">Tambah Peminjaman</a>
        </div>
        @if (session('success'))
            <div class="bg-green-500 text-white font-bold py-2 px-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="bg-white shadow-md rounded-lg ">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">ID Peminjaman</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Nama Anggota</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Judul Buku</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Tanggal Pinjam</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Tanggal Kembali</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-100 divide-y divide-gray-200">
                    @foreach($peminjamanList as $peminjaman)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $peminjaman->id_peminjaman }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $peminjaman->anggota->nama }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $peminjaman->buku->judul }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $peminjaman->tgl_peminjaman }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $peminjaman->tgl_pengembalian }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $peminjaman->status }}</td>
                            <td class="px-6 py-4 flex space-x-2 relative">
                                <button onclick="toggleDropdown(event, 'dropdown-{{ $peminjaman->id_peminjaman }}')" class="text-gray-700 hover:text-gray-900 focus:outline-none dropdown-toggle py-3 px-3">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div id="dropdown-{{ $peminjaman->id_peminjaman }}" class="hidden dropdown-menu absolute right-0 top-10 mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                                    <a href="{{ route('admin.peminjaman.show', $peminjaman->id_peminjaman) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lihat</a>
                                    <a href="{{ route('admin.peminjaman.edit', $peminjaman->id_peminjaman) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                    <form action="{{ route('admin.peminjaman.destroy', $peminjaman->id_peminjaman) }}" method="POST" class="block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-6">
            {{ $peminjamanList->links() }}
        </div>
    </div>
@endsection
