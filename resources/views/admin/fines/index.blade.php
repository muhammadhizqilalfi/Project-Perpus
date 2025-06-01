<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Daftar Denda</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto">
            <table class="w-full bg-white rounded shadow">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="p-3">User</th>
                        <th class="p-3">Buku</th>
                        <th class="p-3">Jumlah</th>
                        <th class="p-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fines as $fine)
                        <tr class="border-b">
                            <td class="p-3">{{ $fine->borrowing->user->name }}</td>
                            <td class="p-3">{{ $fine->borrowing->book->title }}</td>
                            <td class="p-3">Rp {{ number_format($fine->amount, 0, ',', '.') }}</td>
                            <td class="p-3">
                                <span class="px-2 py-1 rounded text-sm {{ $fine->paid ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800' }}">
                                    {{ $fine->paid ? 'Lunas' : 'Belum Lunas' }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
