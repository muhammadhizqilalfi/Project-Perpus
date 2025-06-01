<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Katalog Buku -->
                <a href="{{ route('library.index') }}"
                   class="block bg-white shadow-md rounded-lg p-6 hover:bg-blue-50 transition">
                    <h3 class="text-lg font-semibold text-blue-700 mb-2">Katalog Buku</h3>
                    <p class="text-gray-600">Jelajahi koleksi buku yang tersedia untuk dipinjam.</p>
                </a>

                <!-- Riwayat Peminjaman -->
                <a href="{{ route('library.borrowings') }}"
                   class="block bg-white shadow-md rounded-lg p-6 hover:bg-blue-50 transition">
                    <h3 class="text-lg font-semibold text-blue-700 mb-2">Riwayat Peminjaman</h3>
                    <p class="text-gray-600">Lihat buku-buku yang telah kamu pinjam sebelumnya.</p>
                </a>

                <!-- Reservasi Buku -->
                <a href="{{ route('library.reservations') }}"
                   class="block bg-white shadow-md rounded-lg p-6 hover:bg-blue-50 transition">
                    <h3 class="text-lg font-semibold text-blue-700 mb-2">Reservasi Buku</h3>
                    <p class="text-gray-600">Kelola buku yang telah kamu reservasi.</p>
                </a>

                <!-- Daftar Denda -->
                <a href="{{ route('library.fines') }}"
                   class="block bg-white shadow-md rounded-lg p-6 hover:bg-blue-50 transition">
                    <h3 class="text-lg font-semibold text-blue-700 mb-2">Daftar Denda</h3>
                    <p class="text-gray-600">Cek informasi denda dari keterlambatan pengembalian.</p>
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
