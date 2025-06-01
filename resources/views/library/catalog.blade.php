@extends('layouts.library')

@section('content')
<div class="px-6 py-8">
    <div class="bg-white rounded-xl shadow p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Katalog Buku</h1>
            <a href="{{ route('dashboard') }}"
               class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-4 py-2 rounded-lg transition">
                ← Kembali ke Dashboard
            </a>
        </div>

        <form action="{{ route('library.search') }}" method="GET" class="mb-6 flex flex-col md:flex-row md:items-center gap-3">
            <input type="text" name="q" placeholder="Cari buku..." value="{{ $query ?? '' }}"
                   class="border border-gray-300 rounded-lg px-4 py-2 w-full md:w-1/3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit" class="font-bold bg-yellow-600 hover:bg-yellow-800 text-white px-4 py-2 rounded-lg transition">
                Cari
            </button>
        </form>

        @if($books->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($books as $book)
                    <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 shadow-sm">
                        <h2 class="text-lg font-bold text-gray-800">{{ $book->title }}</h2>
                        <p class="text-sm text-gray-500 mb-2">Penulis: {{ $book->author }}</p>
                        <p class="text-sm text-gray-700 mb-4">{{ Str::limit($book->description, 100) }}</p>
                        <p class="text-sm text-gray-700 mb-4">Tersedia: {{ $book->available_copies }}</p>

                        <form action="{{ route('library.reserve', $book) }}" method="POST">
                            @csrf
                            <button type="submit"
                                    class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition
                                           @if($book->available_copies < 1) opacity-50 cursor-not-allowed @endif"
                                    @if($book->available_copies < 1) disabled @endif>
                                Reservasi
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $books->links() }}
            </div>
        @else
            <p class="text-gray-500">Tidak ada buku ditemukan.</p>
        @endif
    </div>
</div>
@endsection
