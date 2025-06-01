<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Tambah Buku</h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto">
        <form action="{{ route('admin.books.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block">Judul</label>
                <input type="text" name="title" class="w-full border p-2 rounded" required>
            </div>
            <div>
                <label class="block">Penulis</label>
                <input type="text" name="author" class="w-full border p-2 rounded" required>
            </div>
            <div>
                <label class="block">Deskripsi</label>
                <textarea name="description" class="w-full border p-2 rounded"></textarea>
            </div>
            <div>
                <label class="block">Stok Tersedia</label>
                <input type="number" name="available_copies" class="w-full border p-2 rounded" required>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
        </form>
    </div>
</x-app-layout>
