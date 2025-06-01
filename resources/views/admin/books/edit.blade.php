<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Edit Buku</h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto">
        <form action="{{ route('admin.books.update', $book) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block">Judul</label>
                <input type="text" name="title" value="{{ $book->title }}" class="w-full border p-2 rounded" required>
            </div>
            <div>
                <label class="block">Penulis</label>
                <input type="text" name="author" value="{{ $book->author }}" class="w-full border p-2 rounded" required>
            </div>
            <div>
                <label class="block">Deskripsi</label>
                <textarea name="description" class="w-full border p-2 rounded">{{ $book->description }}</textarea>
            </div>
            <div>
                <label class="block">Stok Tersedia</label>
                <input type="number" name="available_copies" value="{{ $book->available_copies }}" class="w-full border p-2 rounded" required>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Perbarui</button>
        </form>
    </div>
</x-app-layout>
