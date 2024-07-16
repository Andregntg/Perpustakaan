@extends('layouts.admin')
@vite('public/js/costum.js')

@section('content')
<div class="container mx-auto px-4 py-8 relative">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Daftar Buku</h1>
    <div class="flex justify-between mb-6">
        <div></div>
        @if (auth()->user()->usertype === 'admin')
        <a href="{{ route('admin.buku.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">Tambah Buku</a>
        @endif
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">No Buku</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Edisi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">No Rak</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Tahun</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Penerbit</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Kode Penulis</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-gray-100 divide-y divide-gray-200 relative">
                @foreach ($bukuList as $buku)
                <tr class="relative">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $buku->no_buku }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $buku->judul }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $buku->edisi }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $buku->no_rak }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $buku->tahun }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $buku->penerbit }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $buku->kd_penulis }}</td>
                    <td class="px-6 py-4 flex space-x-2 relative">
                        <button onclick="toggleDropdown(event, 'dropdown-{{ $buku->no_buku }}')" class="text-gray-700 hover:text-gray-900 focus:outline-none dropdown-toggle py-3 px-3">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <div id="dropdown-{{ $buku->no_buku }}" class="hidden dropdown-menu absolute right-0 top-10 mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                            <a href="{{ route('admin.buku.show', $buku->no_buku) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lihat</a>
                            @if (auth()->user()->usertype === 'admin')
                            <a href="{{ route('admin.buku.edit', $buku->no_buku) }}" class="block px-4 
                            py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                            <form action="{{ route('admin.buku.destroy', $buku->no_buku) }}" method="POST" class="block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hapus</button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-6">
        {{ $bukuList->links() }}
    </div>
</div>
@endsection