@extends('layouts.admin')
@vite('public/js/costum.js')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Daftar Rak</h1>
        <div class="flex justify-between mb-6">
            <div></div>
            <a href="{{ route('admin.rak.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">Tambah Rak</a>
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
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Kode Rak</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Lokasi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-100 divide-y divide-gray-200">
                    @foreach ($rakList as $rak)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $rak->kd_rak }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $rak->lokasi }}</td>
                            <td class="px-6 py-4 flex space-x-2 relative">
                                <button onclick="toggleDropdown(event, 'dropdown-{{ $rak->kd_rak }}')" class="text-gray-700 hover:text-gray-900 focus:outline-none dropdown-toggle py-3 px-3">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div id="dropdown-{{ $rak->kd_rak }}" class="hidden dropdown-menu absolute right-10 top-2 mt-0 w-48 bg-white rounded-md shadow-lg z-50">
                                    <a href="{{ route('admin.rak.show', $rak->kd_rak) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lihat</a>
                                    <a href="{{ route('admin.rak.edit', $rak->kd_rak) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                    <form action="{{ route('admin.rak.destroy', $rak->kd_rak) }}" method="POST" class="block">
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
            {{ $rakList->links() }}
        </div>
    </div>
@endsection
