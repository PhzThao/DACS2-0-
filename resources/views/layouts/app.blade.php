<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'HappyPet') }}</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Instrument+Sans:wght@400;700&family=Otomanopee+One&family=Shadows+Into+Light+Two&family=Inria+Serif&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiase container mx-auto px-6 ">
    <header class="w-full py-4 bg-white relative z-20">
        @include('partials.header')
    </header>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="relative z-10">
        @include('partials.footer')
    </footer>
</body>

</html>