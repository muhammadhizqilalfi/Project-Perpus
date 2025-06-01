<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labirin Kata</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-grey-400 to-white min-h-screen flex flex-col items-center justify-center text-gray-800">

    <div class="text-center px-4">
        <!-- Logo -->
        <img src="{{ asset('images/Logo.jpg') }}" alt="Logo Labirin Kata" class="mx-auto w-32 h-32 mb-6 rounded-full shadow-lg">

        <!-- Judul -->
        <h1 class="text-4xl font-bold mb-2">Selamat Datang di <span class="text-yellow-600">Labirin Kata</span></h1>
        <p class="text-lg text-gray-600 mb-8">Temukan buku dan cerita yang membawamu menjelajahi makna.</p>

        <!-- Tombol Aksi -->
        <div class="space-x-4">
            <a href="{{ route('login') }}"
               class="inline-block px-6 py-2 bg-yellow-600 text-white font-semibold rounded hover:bg-yellow-700 transition">
               Login
            </a>
            <a href="{{ route('register') }}"
               class="inline-block px-6 py-2 bg-gray-200 text-gray-700 font-semibold rounded hover:bg-gray-300 transition">
               Register
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="absolute bottom-4 text-sm text-gray-400">
        &copy; {{ date('Y') }} Labirin Kata. Semua hak dilindungi.
    </footer>
</body>
</html>
