<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TickFast')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans">
<!-- Header -->
@include('includes.header')

<!-- Main Content -->
<main class="min-h-screen">
    @yield('content')
</main>

<!-- Footer -->
@include('includes.footer')
</body>

</html>
