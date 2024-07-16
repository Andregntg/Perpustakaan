@extends('layouts.admin')

@section('content')
    <div class="container mx-auto mt-8 px-4">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Admin Dashboard</h1>

        <!-- Welcome Card -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
            <div class="px-6 py-4 bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
                <h2 class="text-2xl font-bold">Welcome, {{ Auth::user()->name }}!</h2>
                <p class="text-lg">{{ __("You're logged in as an admin!") }}</p>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Total Buku</h3>
                        <p class="text-2xl font-bold text-gray-900">1234</p>
                    </div>
                    <div class="bg-blue-500 text-white p-2 rounded-full">
                        <i class="fas fa-book"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Total Penulis</h3>
                        <p class="text-2xl font-bold text-gray-900">567</p>
                    </div>
                    <div class="bg-green-500 text-white p-2 rounded-full">
                        <i class="fas fa-pen"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Total Anggota</h3>
                        <p class="text-2xl font-bold text-gray-900">890</p>
                    </div>
                    <div class="bg-yellow-500 text-white p-2 rounded-full">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Total Peminjaman</h3>
                        <p class="text-2xl font-bold text-gray-900">345</p>
                    </div>
                    <div class="bg-red-500 text-white p-2 rounded-full">
                        <i class="fas fa-book-reader"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activities Table -->
        <div class="bg-white shadow-md rounded-lg mt-8 overflow-hidden">
            <div class="px-6 py-4 bg-gray-100 border-b border-gray-200">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Recent Activities</h3>
            </div>
            <table class="min-w-full bg-white">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Activity</th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 border-b border-gray-200"></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">Added new book "Laravel for Beginners"</td>
                        <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap">2024-07-12</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
                        </td>
                    </tr>
                    <!-- More rows... -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
