@extends('layouts.library')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Daftar Denda</h1>

    @if($fines->count())
        <table class="min-w-full bg-white border rounded">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Deskripsi</th>
                    <th class="border px-4 py-2">Jumlah</th>
                    <th class="border px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fines as $fine)
                <tr>
                    <td class="border px-4 py-2">{{ $fine->description }}</td>
                    <td class="border px-4 py-2">Rp {{ number_format($fine->amount, 2, ',', '.') }}</td>
                    <td class="border px-4 py-2">{{ $fine->paid_at ? 'Lunas' : 'Belum Lunas' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada denda.</p>
    @endif
</div>
@endsection
