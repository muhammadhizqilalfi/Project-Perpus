<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    @vite('resources/css/app.css') {{-- Pastikan Tailwind dikompilasi --}}
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    {{-- Navbar --}}
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-xl font-bold text-yellow-600">Perpustakaan</div>
            <div class="space-x-6 text-sm font-medium text-gray-700">
                <a href="{{ route('library.index') }}" class="hover:text-yellow-800 transition">Katalog</a>
                <a href="{{ route('library.borrowings') }}" class="hover:text-yellow-800 transition">Peminjaman</a>
                <a href="{{ route('library.fines') }}" class="hover:text-yellow-800 transition">Denda</a>
                <a href="{{ route('library.reservations') }}" class="hover:text-yellow-800 transition">Reservasi</a>
            </div>
        </div>
    </nav>

    {{-- Flash Messages & Content --}}
    <main class="max-w-7xl mx-auto px-6 py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-4 shadow-sm">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-100 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-4 shadow-sm">
                {{ session('error') }}
            </div>
        @endif

        {{-- Dynamic Page Content --}}
        <div class="bg-white rounded-xl shadow p-6">
            @yield('content')
        </div>
    </main>
</body>
</html>
