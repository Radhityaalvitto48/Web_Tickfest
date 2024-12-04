@extends('layouts.app')


@section('content')
    <!-- Hero Section -->
<header class="relative h-[510px] bg-cover bg-center text-white">w
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img
            src="Image/FotoKonser.jpg"
            alt="Background Image"
            class="w-full h-[510px] object-cover">
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-purple-800 bg-opacity-60"></div>

    <!-- Content -->
    <div class="relative z-10 flex flex-col justify-center h-full">
        <!-- Top Section: Text -->
        <div class="flex flex-row items-center justify-center px-10 space-x-10">
            <!-- Left: Title -->
            <div class="text-left">
                <h1 class="text-6xl font-bold leading-tight">TickFast.</h1>
            </div>
            <!-- Right: Description -->
            <div class="max-w-lg">
                <p class="text-lg leading-relaxed">
                    Wujudkan impianmu menikmati konser bersama artis favorit dengan mudah, cepat, dan praktis melalui TickFast—pengalaman musik terbaik menantimu!
                </p>
            </div>
        </div>

        <!-- Spacer -->
        <div class="mt-12"></div>

        <!-- Form Section -->
        <div class="flex justify-center">
            <form class="flex flex-wrap justify-between items-center bg-purple-600 text-white rounded-md shadow p-6 w-full max-w-4xl">
                <div class="flex-1 p-2">
                    <label for="search-event" class="block text-sm">Search Event</label>
                    <input type="text" id="search-event" placeholder="Event name" class="w-full border border-purple-400 bg-purple-500 text-white rounded p-2 placeholder-white focus:ring-2 focus:ring-purple-300">
                </div>
                <div class="flex-1 p-2">
                    <label for="location" class="block text-sm">Place</label>
                    <input type="text" id="location" placeholder="City" class="w-full border border-purple-400 bg-purple-500 text-white rounded p-2 placeholder-white focus:ring-2 focus:ring-purple-300">
                </div>
                <div class="flex-1 p-2">
                    <label for="date" class="block text-sm">Date</label>
                    <input type="date" id="date" class="w-full border border-purple-400 bg-purple-500 text-white rounded p-2 focus:ring-2 focus:ring-purple-300">
                </div>
                <div class="p-2">
                    <button class="bg-purple-700 text-white px-6 py-2 rounded hover:bg-purple-800">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </div>
</header>




<!-- Event Di Kotamu -->
<section class="container mx-auto my-12 px-4">
    <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Kota Popular
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <!-- Card -->
        @foreach($kotas as $kota)
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-300 hover:scale-105">
                <img src='/storage/{{ $kota->image }}' class="rounded-t-lg w-full h-40 object-cover">
                <div class="p-4">
                    <p class="text-lg font-semibold text-gray-700 text-center">{{ $kota->name }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>/


<!-- Event Terdekat -->
<section class="container mx-auto my-12 px-4">
    <h2 class="text-2xl font-bold mb-8 text-center">Event Terbaru</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($tikets as $tiket)
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <img src="/storage/{{ $tiket->image }}" alt="{{ $tiket->name }}" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-bold text-lg">{{ $tiket->name }}</h3>
                <p class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($tiket->date)->format('d F Y') }}</p>
                <p class="text-sm text-gray-600">{{ $tiket->kota->name }}</p>
                <p class="text-purple-800 font-bold mt-2">Rp {{ number_format($tiket->price, 0, ',', '.') }}</p>
                <a href="{{ route('pages.detail', $tiket->id) }}">
                    <button class="bg-purple-800 text-white w-full mt-4 py-2 rounded hover:bg-purple-700">Detail Event
                    </button>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
