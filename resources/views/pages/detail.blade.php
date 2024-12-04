<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TickFast')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans flex flex-col min-h-screen">
<!-- Header -->
<nav class="bg-purple-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/LandingPage" class="text-2xl font-bold flex items-center">
            <img src="{{ asset('image/logo.png') }}" alt="Logo" class="h-8 mr-2">
        </a>
        <div class="hidden md:flex space-x-6 items-center">
            <a href="/LandingPage" class="hover:underline">Home</a>
            <a href="/id" class="hover:underline">ID</a>
        </div>
    </div>
</nav>

<!-- Main Content -->
<section class="container mx-auto my-8 px-4">
    <div class="bg-white rounded-lg shadow p-6">
        <!-- Gambar Tiket -->
        <img src="{{ asset('storage/' . $tiket->image) }}" alt="{{ $tiket->name }}" class="w-full h-60 object-cover rounded-md">

        <!-- Detail Tiket -->
        <h2 class="text-3xl font-bold mt-4">{{ $tiket->name }}</h2>
        <p class="text-gray-600 text-sm">Tanggal:  {{ date('d F Y', strtotime($tiket->event_date)) }}</p>
        <p class="text-gray-600 text-sm">Lokasi:  {{ $tiket->kota->name }}, {{ $tiket->kota->provinsi }}</p>
        <p class="text-purple-800 font-bold text-lg mt-4">Harga: Rp {{ number_format($tiket->price, 0, ',', '.') }}</p>
        <p class="mt-4 text-gray-600">{{ strip_tags($tiket->description) }}</p>
        <button class="bg-purple-800 text-white w-full mt-6 py-3 rounded hover:bg-purple-700">Pesan Sekarang</button>
    </div>
</section>

<!-- Footer -->
<footer class="flex flex-col w-full bg-purple-800 text-white py-6 mt-auto">
    <div class="flex flex-wrap justify-around items-start px-6 md:px-16">
        <!-- About Section -->
        <div class="flex flex-col mb-6">
            <h1 class="text-lg font-semibold mb-2">Tentang</h1>
            <ul>
                <li><a href="#" class="hover:underline hover:text-gray-300">Tentang TickFast</a></li>
                <li><a href="#" class="hover:underline hover:text-gray-300">Cara Kerja</a></li>
            </ul>
        </div>
        <!-- Information Section -->
        <div class="flex flex-col mb-6">
            <h1 class="text-lg font-semibold mb-2">Informasi</h1>
            <ul>
                <li><a href="#" class="hover:underline hover:text-gray-300">Syarat & Ketentuan</a></li>
                <li><a href="#" class="hover:underline hover:text-gray-300">FAQ</a></li>
                <li><a href="#" class="hover:underline hover:text-gray-300">Konser</a></li>
            </ul>
        </div>
        <!-- Account Section -->
        <div class="flex flex-col mb-6">
            <h1 class="text-lg font-semibold mb-2">Akun</h1>
            <ul>
                <li><a href="#" class="hover:underline hover:text-gray-300">Info</a></li>
                <li><a href="/admin" class="hover:underline hover:text-gray-300">Input data</a></li>
                <li><a href="#" class="hover:underline hover:text-gray-300">Privacy Policy</a></li>
            </ul>
        </div>
    </div>

    <!-- Divider -->
    <hr class="border-t border-gray-400 mx-6 md:mx-16 my-4">

    <!-- Footer Bottom Section -->
    <div class="flex flex-col md:flex-row justify-between items-center px-6 md:px-16 text-center md:text-left space-y-4 md:space-y-0">
        <!-- Social Media -->
        <div class="flex justify-center space-x-4">
            <a href="#"><img src="{{ asset('image/twitter.png') }}" alt="Twitter" class="w-6 h-6"></a>
            <a href="#"><img src="{{ asset('image/facebook.png') }}" alt="Facebook" class="w-6 h-6"></a>
            <a href="#"><img src="{{ asset('image/instagram.png') }}" alt="Instagram" class="w-6 h-6"></a>
        </div>
        <!-- Logo -->
        <img src="{{ asset('image/logo.png') }}" alt="TickFast Logo" class="w-16">
        <!-- Copyright -->
        <p class="text-sm">© 2024 TickFast. All rights reserved.</p>
    </div>
</footer>

</body>

</html>
