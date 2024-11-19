<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ config('app.description', 'A Laravel Application') }}">
    <meta name="author" content="Your Name or Company">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/shop.js'], 'defer')

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    @stack('styles')
</head>
<body class="font-sans antialiased">
    <header class="w-full py-4 bg-white relative z-20">
        @include('partials.header')
    </header>
    <div class="min-h-screen bg-gray-100">
        <main>
            {{ $slot }}
        </main>
    </div>
    <footer class="relative z-10">
        @include('partials.footer')
    </footer>

    @stack('scripts')
</body>
</html>