@extends('layouts.app')

@section('title', 'HappyPet - Dịch vụ chăm sóc thú cưng')

@section('content')

<div>
  <!-- Hero Section -->
  <div class="flex flex-col md:flex-row items-center gap-8 bg-primary-light rounded-lg p-8 mb-12 mt-16">
    <div class="md:w-2/3">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 mb-6 font-['Otomanopee One']">
        Beauty and spa services
      </h1>
    </div>
    <div class="md:w-1/3 flex justify-center">
      <img
        src="{{ asset('images/inner-hero-banner 1.png') }}"
        alt="Service Detail Image"
        class="w-full h-auto rounded-lg object-cover transition-transform duration-300 ease-in-out hover:scale-105"
      />
    </div>
  </div>

  <!-- What we bring Section -->
  <div class="bg-[#e6e2ff] rounded-lg p-8 mb-12">
    <div class="flex flex-col md:flex-row gap-8">
      <!-- Left Column: Description -->
      <div class="flex flex-col md:w-1/2">
        <!-- Icon and Description -->
        <div class="flex flex-col mb-6 ml-16">
          <div class="flex items-center gap-2 mb-4">
            <img
              src="{{ asset('images/fandco-logo-icon@2x 1.png') }}"
              alt="Small Icon"
              class="w-12 h-12"
            />
            <h2 class="text-black text-3xl md:text-4xl font-bold font-['Otomanopee One']">
              What we bring?
            </h2>
          </div>
          <p class="text-black text-base md:text-lg font-normal font-['Instrument Sans'] max-w-md mt-6">
            We offer a range of beauty and spa services to keep your pets looking and feeling their best. From professional grooming and hair trimming to relaxing spa treatments, we ensure your pets receive top-notch care and pampering.
          </p>
        </div>
        <!-- Large Square Image -->
        <div class="w-64 h-64 ml-16">
          <img
            src="{{ asset('images/Thiết kế chưa có tên 3.png') }}"
            alt="Pet Image"
            class="w-full h-full rounded-lg object-cover"
          />
        </div>
      </div>

      <!-- Right Column: Service List -->
      <div class="md:w-1/2">
        <div class="space-y-4">
          @foreach ([ 
            ['title' => "Bathing and grooming", 'price' => "$13"],
            ['title' => "Professional hair trimming", 'price' => "$25"],
            ['title' => "Nail and paw care", 'price' => "$20"],
            ['title' => "Ear and eye cleaning", 'price' => "$40"],
            ['title' => "Spa and massage", 'price' => "$10"],   
          ] as $service)
          <div class="bg-white rounded-lg p-4 flex items-center justify-between shadow-md w-full">
            <label class="flex items-center gap-3 cursor-pointer">
              <input
                type="checkbox"
                class="form-checkbox text-[#ee1212] w-6 h-6"
              />
              <span class="text-black text-base md:text-lg font-normal font-['Instrument Sans']">
                {{ $service['title'] }}
              </span>
            </label>
            <span class="text-[#ee1212] text-lg md:text-xl font-bold font-['Instrument Sans']">
              {{ $service['price'] }}
            </span>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Book Now Button -->
    <div class="mt-12 flex justify-center">
      <a
        href="#"
        class="inline-block bg-[#481aaa] text-white text-xl md:text-2xl font-bold font-['Otomanopee One'] px-8 md:px-12 py-4 rounded-full shadow-lg transition-transform transform hover:scale-105"
      >
        Book now
      </a>
    </div>
  </div>
</div>

@endsection
