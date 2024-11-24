@extends('layouts.app')

@section('title', 'HappyPet - Dịch vụ chăm sóc thú cưng')

@section('content')

<div class="flex flex-col md:flex-row items-center gap-8 bg-primary-light rounded-lg p-8 mb-12 mt-16">
    <div class="md:w-2/3">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 mb-6 font-['Otomanopee One']">
        All Doctor
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

<div class="mt-12">
  <!-- Search Bar -->
  <div class="flex items-center mb-6">
    <input type="text" placeholder="Search Doctor or Service" class="w-full py-3 px-4 rounded-full border border-gray-300 shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
    <button class="ml-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M16.65 10a6.65 6.65 0 1 1-13.3 0 6.65 6.65 0 0 1 13.3 0z"/>
      </svg>
    </button>
  </div>

  <!-- Doctor Cards -->
  <div class="space-y-4">
    @foreach ($doctors as $doctor)
    <a href="{{ route('doctor.profile', ['id' => $doctor->id_doctor]) }}">
      <div class="max-w-lg mx-auto flex items-center justify-between bg-white rounded-lg shadow-xl p-4 transition-transform transform hover:scale-105 hover:shadow-2xl mb-6">
          <img src="{{ asset($doctor->doctor_avartar) }}" alt="Doctor's profile picture" class="w-20 h-20 rounded-lg mr-4 transition-transform duration-300 ease-in-out hover:scale-125"> 
          <div class="flex-grow">
            <h3 class="text-lg font-semibold text-gray-800">{{ $doctor->name_doctor }}</h3>
            <p class="text-sm text-gray-500">{{ $doctor->doctor_title }}</p>
            <p class="text-sm text-gray-500"><span class="mr-1">🕒</span>{{ date('h:i A', strtotime($doctor->start_time)) }} - {{ date('h:i A', strtotime($doctor->end_time)) }}</p>
            <p class="text-sm text-gray-500"><span class="mr-1">💲</span>${{ $doctor->doctor_booking_price }}</p>
          </div>
          <div class="flex items-center">
            <span class="text-gray-800 font-semibold">{{ $doctor->rating ?? 0 }}</span>
            <span class="text-yellow-500 text-lg ml-1">⭐</span>
          </div>
          <button class="ml-4 bg-gray-800 text-white rounded-full p-2 focus:outline-none transform transition-transform hover:scale-110">
            ➔
          </button>
      </div>
    </a>
    @endforeach
  </div>

  <!-- See More Button -->
  <div class="mt-6 text-center">
    <button class="bg-blue-200 text-blue-800 font-semibold py-3 px-8 mb-8 rounded-full hover:bg-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-400 transform transition-transform hover:scale-105 shadow-xl hover:shadow-2xl">
      See more
    </button>
  </div>
</div>

@endsection
