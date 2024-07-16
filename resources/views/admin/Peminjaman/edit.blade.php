@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4 max-w-md w-full mx-auto">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Edit Peminjaman</h2>

            @if(session('error'))
                <div class="mb-4 text-red-600">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('admin.peminjaman.update', $peminjaman->id_peminjaman) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="no_buku" class="block text-sm font-medium text-gray-700">Buku</label>
                    <select name="no_buku" id="no_buku" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        <option value="" disabled>Pilih Buku</option>
                        @foreach($bukuList as $buku)
                            <option value="{{ $buku->no_buku }}" {{ $buku->no_buku == $peminjaman->no_buku ? 'selected' : '' }}>{{ $buku->judul }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="id_anggota" class="block text-sm font-medium text-gray-700">Anggota</label>
                    <select name="id_anggota" id="id_anggota" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        <option value="" disabled>Pilih Anggota</option>
                        @foreach($anggotaList as $anggota)
                            <option value="{{ $anggota->id_anggota }}" {{ $anggota->id_anggota == $peminjaman->id_anggota ? 'selected' : '' }}>{{ $anggota->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="tgl_peminjaman" class="block text-sm font-medium text-gray-700">Tanggal Peminjaman</label>
                    <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $peminjaman->tgl_peminjaman }}" required>
                </div>
                <div class="mb-5">
                    <label for="tgl_pengembalian" class="block text-sm font-medium text-gray-700">Tanggal Pengembalian</label>
                    <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $peminjaman->tgl_pengembalian }}">
                </div>
                <div class="mb-5">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        <option value="belum" {{ $peminjaman->status == 'belum' ? 'selected' : '' }}>Belum</option>
                        <option value="kembali" {{ $peminjaman->status == 'kembali' ? 'selected' : '' }}>Kembali</option>
                    </select>
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md shadow focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-300">
                        Perbarui
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
