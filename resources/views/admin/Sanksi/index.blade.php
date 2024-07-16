@extends('layouts.admin')
@vite('public/js/costum.js')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Daftar Sanksi</h1>
        <div class="flex justify-between mb-6">
            <div></div>
            <a href="{{ route('admin.sanksi.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">Tambah Sanksi</a>
        </div>
        @if (session('success'))
            <div class="bg-green-500 text-white font-bold py-2 px-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="bg-white shadow-md rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">ID Sanksi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">ID Anggota</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">ID Peminjaman</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Jumlah Denda</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-100 divide-y divide-gray-200">
                    @foreach ($sanksiList as $sanksi)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $sanksi->id_sanksi }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $sanksi->id_anggota }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $sanksi->id_peminjaman }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $sanksi->jumlah_denda }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $sanksi->status }}</td>
                            <td class="px-6 py-4 flex space-x-2 relative">
                                <button onclick="toggleDropdown(event, 'dropdown-{{ $sanksi->id_sanksi }}')" class="text-gray-700 hover:text-gray-900 focus:outline-none dropdown-toggle py-3 px-3">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div id="dropdown-{{ $sanksi->id_sanksi }}" class="hidden dropdown-menu absolute right-0 top-10 mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                                    <a href="{{ route('admin.sanksi.show', $sanksi->id_sanksi) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lihat</a>
                                    <a href="{{ route('admin.sanksi.edit', $sanksi->id_sanksi) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                    <form action="{{ route('admin.sanksi.destroy', $sanksi->id_sanksi) }}" method="POST" class="block">
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
            {{ $sanksiList->links() }}
        </div>
    </div>
@endsection
