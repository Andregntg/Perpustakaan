@extends('layouts.user')

@section('content')
    <div class="container mx-auto mt-5">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">User Dashboard di sini</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Buku Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-6">
                    <h5 class="text-xl font-bold mb-2">Buku</h5>
                    <p class="text-gray-700 mb-4">Akses daftar buku yang tersedia di perpustakaan.</p>
                    <a href="{{ route('user.buku.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">Lihat Semua</a>
                </div>
            </div>
            <h2>afuefubfbefbefbe</h2>
            <!-- Penulis Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-6">
                    <h5 class="text-xl font-bold mb-2">Penulis</h5>
                    <p class="text-gray-700 mb-4">Temukan informasi tentang penulis buku.</p>
                    <a href="{{ route('user.penulis.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">Lihat Semua</a>
                </div>
            </div>

            <!-- Rak Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-6">
                    <h5 class="text-xl font-bold mb-2">Rak</h5>
                    <p class="text-gray-700 mb-4">Lihat penempatan buku di rak-rak perpustakaan.</p>
                    <a href="{{ route('user.rak.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">Lihat Semua</a>
                </div>
            </div>
        </div>

        <!-- Additional content -->
        <div class="mt-10">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Aktivitas Terbaru</h2>
            <ul class="space-y-4">
                <li class="bg-white shadow-md rounded-lg p-4">
                    <div class="flex items-center space-x-4">
                        <img class="h-12 w-12 rounded-full" src="https://via.placeholder.com/50" alt="User image">
                        <div>
                            <h6 class="text-lg font-semibold">User Name</h6>
                            <span class="text-sm text-gray-600">5 menit yang lalu</span>
                            <p class="text-gray-700 mt-1">Meminjam buku "Judul Buku".</p>
                        </div>
                    </div>
                </li>
                <!-- Tambahkan aktivitas lainnya di sini -->
            </ul>
        </div>
    </div>
@endsection
