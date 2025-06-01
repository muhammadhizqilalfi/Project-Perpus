<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Manajemen Buku</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto">
            <a href="{{ route('admin.books.create') }}"
               class="mb-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Buku</a>

            @if(session('success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
            @endif

            <table class="w-full bg-white shadow rounded">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="p-3">Judul</th>
                        <th class="p-3">Penulis</th>
                        <th class="p-3">Stok</th>
                        <th class="p-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-3">{{ $book->title }}</td>
                            <td class="p-3">{{ $book->author }}</td>
                            <td class="p-3">{{ $book->available_copies }}</td>
                            <td class="p-3">
                                <a href="{{ route('admin.books.edit', $book) }}"
                                   class="text-blue-600 hover:underline mr-2">Edit</a>
                                <form action="{{ route('admin.books.destroy', $book) }}"
                                      method="POST" class="inline"
                                      onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
