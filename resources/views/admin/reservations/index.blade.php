<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Manajemen Reservasi</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto">
        <div class="bg-white overflow-x-auto p-6 rounded shadow">
            <table class="min-w-full table-auto border border-gray-200">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-4 py-2 border">Judul Buku</th>
                        <th class="px-4 py-2 border">User</th>
                        <th class="px-4 py-2 border">Tanggal Reservasi</th>
                        <th class="px-4 py-2 border">Status</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    @foreach($reservations as $reservation)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border">{{ $reservation->book->title }}</td>
                        <td class="px-4 py-2 border">{{ $reservation->user->name }}</td>
                        <td class="px-4 py-2 border">
                            {{ \Carbon\Carbon::parse($reservation->reserved_at)->format('d M Y') }}
                        </td>
                        <td class="px-4 py-2 border capitalize">{{ $reservation->status }}</td>
                        <td class="px-4 py-2 border">
                            @if($reservation->status === 'pending')
                                <form action="{{ route('admin.reservations.approve', $reservation->id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded">
                                        Setujui
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

            <div class="mt-4">
                {{ $reservations->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
