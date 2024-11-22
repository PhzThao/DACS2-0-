@extends('layouts.app')

@section('title', 'Pet Care Services')

@section('content')
<div class="bg-white">
    <!-- Header Section -->
    <div class="text-center py-16">
        <h1 class="text-4xl md:text-5xl font-bold uppercase tracking-widest">
            {{ __('Where Your Pet Is Our Priority') }}
        </h1>
        <p class="mt-4 text-gray-500">{{ __('Scroll to discover') }}</p>
        <div class="flex justify-center mt-8">
            <!-- Image with hover effect to enlarge -->
            <img src="{{ asset('images/pet-image.jpg') }}" alt="Cute pet" class="rounded-full w-48 h-48 object-cover border-4 border-orange-300 transition-transform transform hover:scale-110 hover:rotate-3 duration-300 ease-in-out">
        </div>
        <p class="mt-6 mx-auto max-w-lg text-gray-500">
            {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue eros, pellentesque nec tempor eu, sollicitudin eu dolor.') }}
        </p>
    </div>

    <!-- Middle Section -->
    <div class="flex flex-col lg:flex-row items-center justify-center gap-12 px-6 py-16">
        <!-- Text Content -->
        <div class="lg:w-1/2">
            <h2 class="text-3xl font-bold mb-4">
                {{ __('We Treat Your Pet As A Family Member') }}
            </h2>
            <p class="text-gray-500 mb-6">
                {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue eros, pellentesque nec tempor eu, sollicitudin eu dolor.') }}
            </p>
            <a href="#" class="px-6 py-3 bg-orange-500 text-white rounded-lg shadow-lg hover:bg-orange-600 transform hover:scale-105 transition-transform duration-300">
                {{ __('Discover') }}
            </a>
        </div>
        <!-- Image -->
        <div class="lg:w-1/2">
            <img src="{{ asset('images/istockphoto-639024502-612x612 1.png') }}" alt="{{ __('Pet grooming') }}" class="rounded-lg shadow-lg transition-transform transform hover:scale-110 hover:rotate-3 duration-300 ease-in-out">
        </div>
    </div>

    <!-- Services Section -->
    <div class="bg-gray-100 py-16">
        <div class="max-w-6xl mx-auto text-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Service Items -->
                @foreach ([ 
                    ['name' => 'Pawdcure', 'icon' => 'medical.png'],
                    ['name' => 'Spa Baths', 'icon' => 'brush.png'],
                    ['name' => 'Haircut of Choice', 'icon' => 'dog-walking.png'],
                    ['name' => 'More Services', 'icon' => 'cat-house.png'] 
                ] as $service)
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/' . $service['icon']) }}" alt="{{ $service['name'] }}" class="w-32 h-32 mb-4 transition-transform transform hover:scale-110 hover:rotate-3 duration-300 ease-in-out">
                    <h3 class="font-bold text-xl">{{ $service['name'] }}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Main Content Section -->
<div class="mt-16 max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    <!-- Text Content -->
    <div>
        <h2 class="text-3xl font-bold mb-4">
            {{ __('Qualified Personal Care For All Breeds') }}
        </h2>
        <p class="text-gray-500 mb-6">
            {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue eros, pellentesque nec tempor eu, sollicitudin eu dolor.') }}
        </p>
        <a href="#" class="inline-block px-8 py-3 bg-purple-600 text-white rounded-lg shadow-lg hover:bg-purple-700 transition">
            {{ __('Book') }}
        </a>
    </div>
    <!-- Featured Image -->
    <div>
        <img src="{{ asset('images/female-is-grooming-trimming-pomeranian-spitz-salon.png') }}" alt="{{ __('Dog Grooming') }}" class="rounded-2xl shadow-lg transition-transform transform hover:scale-110 hover:rotate-3 duration-300 ease-in-out">
    </div>
</div>

<!-- Additional Section -->
<div class="mt-16 max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    <!-- Image -->
    <div>
        <img src="{{ asset('images/istockphoto-1429886366-612x612 1.png') }}" alt="{{ __('Cat Care') }}" class="rounded-2xl shadow-lg transition-transform transform hover:scale-110 hover:rotate-3 duration-300 ease-in-out">
    </div>
    <!-- Grooming Features -->
    <div>
        <h3 class="text-xl font-bold mb-4">{{ __('All Full Grooms Include') }}</h3>
        <ul class="list-disc list-inside text-gray-500">
            @foreach ([ 
                'A Warm Massage Jet Wash', 
                'Fluff Dry', 
                'Nails Trimmed', 
                'Paw Pads Shaved', 
                'Ear Cleaning', 
                'Haircut of Choice' 
            ] as $feature)
            <li>{{ $feature }}</li>
            @endforeach
        </ul>
    </div>
</div>

<div class="bg-white py-16">
    <!-- Quote Section -->
    <div class="text-center max-w-3xl mx-auto px-6">
        <img src="{{ asset('images/Group 63.svg') }}" alt="Quote Icon" class="w-32 h-32 mx-auto mb-4 transition-transform transform hover:scale-110 hover:rotate-3 duration-300 ease-in-out">
        <p class="text-gray-500 italic mb-4">
            "{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue eros, pellentesque nec tempor eu, sollicitudin eu dolor. Cras commodo venenatis diam, nec venenatis massa auctor at.') }}"
        </p>
        <p class="font-bold text-lg">{{ __('Quisque Mattis') }}</p>
    </div>

    <!-- Working Hours & Contact -->
    <div class="mt-16 max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 px-6 items-center">
        <div>
            <img src="{{ asset('images/istockphoto-1181199995-612x612 1.png') }}" alt="{{ __('Dog Walking') }}" class="rounded-2xl shadow-lg transition-transform transform hover:scale-110 hover:rotate-3 duration-300 ease-in-out">
        </div>
        <div>
            <h2 class="text-3xl font-bold mb-4">{{ __('Where Your Pet Is The Star!') }}</h2>
            <div class="mb-4">
                <p class="text-gray-700 font-medium">{{ __('Working Hours') }}</p>
                <p class="text-gray-500">{{ __('Monday - Friday: 9:00 - 23:00') }}</p>
                <p class="text-gray-500">{{ __('Saturday: 10:00 - 21:00') }}</p>
            </div>
            <div class="mb-4">
                <p class="text-gray-700 font-medium">{{ __('Get In Touch') }}</p>
                <p class="text-gray-500">+012-345-6789</p>
                <p class="text-gray-500">Pawfection@contact.com</p>
            </div>
            <p class="text-gray-500">9899 Lorem ipsum street, Pellentesque, CA, USA</p>
        </div>
    </div>
</div>
@endsection
