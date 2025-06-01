<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Manajemen Buku -->
                <a href="{{ route('admin.books.index') }}"
                   class="block bg-white shadow-md rounded-lg p-6 hover:bg-yellow-50 transition">
                    <h3 class="text-lg font-semibold text-yellow-700 mb-2">Manajemen Buku</h3>
                    <p class="text-gray-600">Lihat, tambah, edit, atau hapus data buku di katalog.</p>
                </a>

                <!-- Riwayat Peminjaman -->
                <a href="{{ route('admin.borrowings.index') }}"
                   class="block bg-white shadow-md rounded-lg p-6 hover:bg-yellow-50 transition">
                    <h3 class="text-lg font-semibold text-yellow-700 mb-2">Riwayat Peminjaman</h3>
                    <p class="text-gray-600">Pantau aktivitas peminjaman buku oleh pengguna.</p>
                </a>

                <!-- Daftar Denda -->
                <a href="{{ route('admin.fines.index') }}"
                   class="block bg-white shadow-md rounded-lg p-6 hover:bg-yellow-50 transition">
                    <h3 class="text-lg font-semibold text-yellow-700 mb-2">Daftar Denda</h3>
                    <p class="text-gray-600">Kelola data denda keterlambatan pengembalian.</p>
                </a>

                <!-- Reservasi Buku -->
                <a href="{{ route('admin.reservations.index') }}"
                   class="block bg-white shadow-md rounded-lg p-6 hover:bg-yellow-50 transition">
                    <h3 class="text-lg font-semibold text-yellow-700 mb-2">Reservasi Buku</h3>
                    <p class="text-gray-600">Kelola permintaan reservasi buku dari pengguna.</p>
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
