<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold">Riwayat Peminjaman</h2>
            <a href="{{ route('admin.borrowings.exportPdf') }}" class="btn btn-primary">
    Export PDF
</a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto">
            <table class="w-full bg-white rounded shadow">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="p-3">User</th>
                        <th class="p-3">Buku</th>
                        <th class="p-3">Tanggal Reservasi</th>
                        <th class="p-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($borrowings as $b)
                        <tr class="border-b">
                            <td class="p-3">{{ $b->user->name }}</td>
                            <td class="p-3">{{ $b->book->title }}</td>
                            <td class="p-3">{{ \Carbon\Carbon::parse($b->reserved_at)->format('d M Y') }}</td>
                            <td class="p-3 capitalize">{{ $b->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{ $borrowings->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
