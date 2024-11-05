@extends('layouts.app')

@section('title', 'HappyPet - Dịch vụ chăm sóc thú cưng')

@section('content')

<div>
  <!-- Hero Section -->
  <div class="flex flex-col md:flex-row items-center gap-8 bg-primary-light rounded-lg p-8 mb-12">
    <div class="md:w-2/3">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 mb-6 font-['Otomanopee One']">
        Pet training
      </h1>
    </div>
    <div class="md:w-1/3 flex justify-center">
      <img
        src="{{ mix('images/inner-hero-banner 1.png') }}"
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
              src="{{ mix('images/fandco-logo-icon@2x 1.png') }}"
              alt="Small Icon"
              class="w-12 h-12"
            />
            <h2 class="text-black text-3xl md:text-4xl font-bold font-['Otomanopee One']">
              What we bring?
            </h2>
          </div>
          <p class="text-black text-base md:text-lg font-normal font-['Instrument Sans'] max-w-md mt-6">
            Our expert trainers offer tailored programs to teach your pets essential skills and good behavior. From basic obedience to advanced training, we ensure a positive learning experience for your pets.
          </p>
        </div>
        <!-- Large Square Image -->
        <div class="w-64 h-64 ml-16">
          <img
            src="{{ mix('images/Thiết kế chưa có tên (2) 1.png') }}"
            alt="Pet Image"
            class="w-full h-full rounded-lg object-cover"
          />
        </div>
      </div>

      <!-- Right Column: Service List -->
      <div class="md:w-1/2">
        <div class="space-y-4">
          @foreach ([ 
            ['title' => "Basic training", 'price' => "$13"],
            ['title' => "Advanced training", 'price' => "$25"],
            ['title' => "Behavioral problem training", 'price' => "$20"],
            ['title' => "Health care training", 'price' => "$40"],
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
