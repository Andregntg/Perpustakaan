@extends('layouts.user')


@section('content')
    <div class="container mx-auto mt-8 px-4">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Daftar Penulis</h1>
        @if (session('success'))
            <div class="bg-green-500 text-white font-bold py-2 px-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Kode Penulis</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Tempat Lahir</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Tanggal Lahir</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">Email</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-100 divide-y divide-gray-200">
                    @foreach ($penulisList as $penulis)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $penulis->kd_penulis }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $penulis->nama_penulis }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $penulis->tempat_lahir }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $penulis->tgl_lahir }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $penulis->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-6">
            {{ $penulisList->links() }}
        </div>
    </div>
@endsection
