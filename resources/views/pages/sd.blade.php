@extends('layouts.app')

@section('title', 'HappyPet - Dịch vụ chăm sóc thú cưng')

@section('content')
    <div class="flex flex-col md:flex-row items-center gap-8 bg-primary-light rounded-lg p-8 mb-12 mt-16">
        <!-- Left Side: Service Detail Text, set width to 2/3 -->
        <div class="md:w-2/3">
            <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6 font-otomanopee">Service Detail</h1>
        </div>

        <!-- Right Side: Large Image, set width to 1/3 -->
        <div class="md:w-1/3 flex justify-center">
            <img src="{{ asset('images/inner-hero-banner 1.png') }}" alt="Service Detail Image" class="w-full h-auto rounded-lg object-cover transition-transform duration-300 ease-in-out hover:scale-105">
        </div>  
    </div>

    <section id="services" class="mb-16">
        <h2 class="text-center text-3xl font-bold text-gray-800 mb-2 font-otomanopee">OUR SERVICES</h2>
        <h3 class="text-center text-xl text-gray-600 mb-12 font-instrument">Our one-stop solution for premium pet care</h3>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 place-items-center">
            @foreach([
                ['title' => 'Health Care', 'image' => 'service-icon-1 1.png', 'bg' => 'bg-green-200'],
                ['title' => 'Beauty & Spa', 'image' => 'service-icon-3 1.png', 'bg' => 'bg-pink-200'],
                ['title' => 'Pet Training', 'image' => 'service-icon-2 1.png', 'bg' => 'bg-blue-200'],
                ['title' => 'Accommodation', 'image' => 'service-icon-6 1.png', 'bg' => 'bg-purple-200']
            ] as $service)
                <div class="flex flex-col items-center justify-center {{ $service['bg'] }} rounded-full w-72 h-72 shadow-lg text-center p-6 transition-transform duration-300 ease-in-out transform hover:scale-110 hover:shadow-2xl">
                    <img src="{{ asset('images/' . $service['image']) }}" alt="{{ $service['title'] }}" class="w-24 h-24 mb-2 transition-transform duration-300 ease-in-out hover:scale-125">
                    <h4 class="text-lg font-bold text-gray-800 font-otomanopee">{{ $service['title'] }}</h4>
                </div>
            @endforeach
        </div>
        
    </section>
@endsection
