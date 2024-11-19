<!-- resources/views/service-detail.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Original Header Code (Unchanged) -->
    <header class="w-full py-4 bg-white relative z-20">
        @include('partials.header')
    </header>
    <!-- Hero Section with Wave -->
    <section class="relative bg-[#FFE4DC] overflow-hidden min-h-[500px]">
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-between pt-12 pb-32">
                <div class="md:w-1/2">
                    <h1 class="text-[#161550] text-6xl font-bold font-otomanopee-one leading-tight">
                        Service detail
                    </h1>
                </div>
                <div class="md:w-1/2 relative">
                    <img src="{{ asset('images/inner-hero-banner 1.png') }}" alt="Dogs" class="w-full h-auto relative z-10">
                    <div class="absolute bottom-0 left-0 w-full h-16 bg-[#E5B89E] opacity-40 blur-lg transform -rotate-6"></div>
                </div>
            </div>
        </div>
        <!-- Decorative Paw Print -->
        <div class="absolute top-20 right-10">
            <img src="{{ asset('images/pows 1.png') }}" alt="">
        </div>
        <!-- Wave shape -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden">
            <svg width="1950" height="650" viewBox="0 0 1437 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 479C385 508.5 1209.7 454.1 1436.5 0.5 L1437 487 L0 487 Z" fill="white"/>
            </svg>
        </div>
        
    </section>

    <!-- Services Section -->
    <section class="bg-white pt-20 pb-32">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-center text-3xl text-[#d41717] mb-5 font-sans">
                OUR SERVICES
            </h2>
            <p class="text-center text-5xl font-bold text-black mb-12 font-otomanopee-one">
                Our one-stop solution <br> 
                for premium pet care
            </p>

            <div class="grid grid-cols-2 lg:grid-cols-2 gap-10 place-items-center">
                @php
                $services = [
                    ['title' => 'Health Care', 'image' => 'service-icon-1 1.png', 'bg'=> 'bg-[#c2f4c7]'],
                    ['title' => 'Beauty & Spa', 'image' => 'service-icon-3 1.png', 'bg' => 'bg-[#FFD6E9]'],
                    ['title' => 'Pet Training', 'image' => 'service-icon-2 1.png', 'bg' => 'bg-[#D6EBFF]'],
                    ['title' => 'Accommodation', 'image' => 'service-icon-6 1.png', 'bg' => 'bg-[#E9D6FF]']
                ];
                @endphp

                @foreach($services as $service)
                    <div class="aspect-square">
                        <div class="flex flex-col items-center justify-center {{ $service['bg'] }} rounded-full w-72 h-72 shadow-lg text-center p-6 transition-transform duration-300 ease-in-out transform hover:scale-110 hover:shadow-2xl">
                            <img 
                                src="{{ asset('images/' . $service['image']) }}" 
                                alt="{{ $service['title'] }}" 
                                class="w-24 h-24 mb-6 transition-transform duration-300 hover:scale-110"
                            >
                            <h3 class="text-xl font-otomanopee-one text-[#161550]">
                                {{ $service['title'] }}
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection