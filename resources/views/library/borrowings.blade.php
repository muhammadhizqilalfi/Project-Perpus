@extends('layouts.library')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Riwayat Peminjaman</h1>

    @if($borrowings->count())
        <table class="min-w-full bg-white border rounded">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Judul Buku</th>
                    <th class="border px-4 py-2">Tanggal Pinjam</th>
                    <th class="border px-4 py-2">Tanggal Kembali</th>
                    <th class="border px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($borrowings as $b)
                <tr>
                    <td class="border px-4 py-2">{{ $b->book->title }}</td>
                    <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($b->borrowed_at)->format('d M Y') }}</td>
                    <td class="border px-4 py-2">{{ $b->returned_at ? \Carbon\Carbon::parse($b->returned_at)->format('d M Y') : '-' }}</td>
                    <td class="border px-4 py-2 capitalize">{{ $b->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada riwayat peminjaman.</p>
    @endif
</div>
@endsection
