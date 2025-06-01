@extends('layouts.library')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Reservasi Buku</h1>

    @if($reservations->count())
        <table class="min-w-full bg-white border rounded">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Judul Buku</th>
                    <th class="border px-4 py-2">Tanggal Reservasi</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $r)
                <tr>
                    <td class="border px-4 py-2">{{ $r->book->title }}</td>
                    <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($r->reserved_at)->format('d M Y') }}</td>
                    <td class="border px-4 py-2 capitalize">{{ $r->status }}</td>
                    <td class="border px-4 py-2">
                        @if($r->status == 'pending')
                        <form method="POST" action="{{ route('library.cancel', $r->id) }}">
                            @csrf
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" type="submit">
                                Batal
                            </button>
                        </form>
                        @else
                        <span class="text-gray-400">-</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Belum ada reservasi.</p>
    @endif
</div>
@endsection