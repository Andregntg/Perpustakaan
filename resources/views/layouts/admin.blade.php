<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('public/js/custom.js')
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="bg-gray-900 text-white w-64 space-y-6 py-7 px-2 hidden lg:block" id="sidebar">
            <div class="text-center text-2xl font-bold">Admin Dashboard</div>
            <nav class="mt-10">
                <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-tachometer-alt"></i> <span class="ml-2">Dashboard</span>
                </a>
                <a href="{{ route('admin.anggota.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.anggota.index') ? 'bg-gray-700' : '' }}">
                <i class="fa-solid fa-users" style="color: #ffffff;"></i> <span class="ml-2">Anggota</span>
                </a>
                <a href="{{ route('admin.buku.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.buku.index') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-book"></i> <span class="ml-2">Buku</span>
                </a>
                <a href="{{ route('admin.penulis.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.penulis.index') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-pen"></i> <span class="ml-2">Penulis</span>
                </a>
                <a href="{{ route('admin.rak.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.rak.index') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-bookmark"></i> <span class="ml-2">Rak</span>
                </a>
                <a href="{{ route('admin.peminjaman.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.peminjaman.index') ? 'bg-gray-700' : '' }}">
                <i class="fa-solid fa-handshake" style="color: #ffffff;"></i> <span class="ml-2">peminjaman</span>
                </a>
                <a href="{{ route('admin.sanksi.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.sanksi.index') ? 'bg-gray-700' : '' }}">
                <i class="fa-solid fa-file-contract" style="color: #ffffff;"></i> <span class="ml-2">Sanksi</span>
                </a>
                <a href="{{ route('admin.profile.edit') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.profile.edit') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-user"></i> <span class="ml-2">Profile</span>
                </a>
                <form method="POST" action="{{ route('logout') }}" class="mt-6">
                    @csrf
                    <button type="submit" class="w-full text-left block py-2.5 px-4 rounded transition duration-200 hover:bg-red-700 text-red-400 hover:text-red-200">
                        <i class="fas fa-sign-out-alt"></i> <span class="ml-2">Log Out</span>
                    </button>
                </form>
            </nav>
        </div>

        <!-- Mobile sidebar -->
        <div class="lg:hidden w-64 bg-gray-900 text-white" id="mobile-sidebar">
            <div class="text-center text-2xl font-bold py-4">Admin Dashboard</div>
            <nav class="mt-10">
                <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-tachometer-alt"></i> <span class="ml-2">Dashboard</span>
                </a>
                <a href="{{ route('admin.anggota.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.anggota.index') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-book"></i> <span class="ml-2">Anggota</span>
                </a>
                <a href="{{ route('admin.buku.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.buku.index') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-book"></i> <span class="ml-2">Buku</span>
                </a>
                <a href="{{ route('admin.penulis.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.penulis.index') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-pen"></i> <span class="ml-2">Penulis</span>
                </a>
                <a href="{{ route('admin.rak.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.rak.index') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-bookmark"></i> <span class="ml-2">Rak</span>
                </a>
                <a href="{{ route('admin.profile.edit') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 {{ request()->routeIs('admin.profile.edit') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-user"></i> <span class="ml-2">Profile</span>
                </a>
                <form method="POST" action="{{ route('logout') }}" class="mt-6">
                    @csrf
                    <button type="submit" class="w-full text-left block py-2.5 px-4 rounded transition duration-200 hover:bg-red-700 text-red-400 hover:text-red-200">
                        <i class="fas fa-sign-out-alt"></i> <span class="ml-2">Log Out</span>
                    </button>
                </form>
            </nav>
        </div>

        <!-- Page Content -->
        <div class="flex-1 p-6 bg-gray-100 overflow-y-auto">
            <nav class="bg-white shadow p-4 mb-4 flex justify-between items-center">
                <button id="menu-toggle" class="text-gray-500 focus:outline-none lg:hidden">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="text-gray-900">
                    {{ Auth::user()->name }}
                </div>
            </nav>
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileSidebar = document.getElementById('mobile-sidebar');
            mobileSidebar.classList.toggle('hidden');
            mobileSidebar.classList.toggle('block');
        });
    </script>
</body>
</html>
