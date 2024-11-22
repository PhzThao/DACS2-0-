@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Header Section -->
    <div class="relative bg-blue-800 h-[350px] lg:h-[450px]">
        <div class="container mx-auto px-4 lg:px-8 relative z-10 h-full flex flex-col lg:flex-row items-center justify-between">
            <div class="text-center lg:text-left">
                <h1 class="text-white text-4xl lg:text-5xl font-bold">Dr. Sweta Gupta</h1>
                <p class="text-blue-200 text-lg lg:text-xl mt-2">Medical Director</p>
                <button class="mt-4 bg-yellow-500 text-white font-semibold py-2 px-6 rounded-full shadow-md hover:bg-yellow-400 transition">
                    Book now
                </button>
            </div>
            <img src="path-to-doctor-image.jpg" alt="Doctor's Image" class="w-32 h-32 lg:w-40 lg:h-40 rounded-full border-4 border-white shadow-lg mt-6 lg:mt-0">
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 lg:px-8 mt-12 space-y-12">
        <!-- Experience & Skills -->
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Experience Section -->
            <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition border-l-4 border-blue-800">
                <h2 class="text-blue-800 text-2xl font-semibold">25+ years of experience</h2>
                <ul class="mt-4 text-gray-600 space-y-2">
                    <li>Certified in Advanced Veterinary Clinical Medicine</li>
                    <li>DVM (Delhi Veterinary College)</li>
                    <li>MVSc (Animal Reproduction, Delhi)</li>
                    <li>Fellowship in Advanced Animal Reproduction and Veterinary Medicine (London, UK)</li>
                    <li>Specialist in Reproductive Health and Animal Care</li>
                </ul>
            </div>

            <!-- Skills Section -->
            <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition border-l-4 border-blue-800">
                <h2 class="text-blue-800 text-2xl font-semibold">Expert Skills</h2>
                <ul class="mt-4 text-gray-600 space-y-2">
                    <li>IVF</li>
                    <li>IUI</li>
                    <li>Blastocyst Culture</li>
                    <li>Cryopreservation Techniques</li>
                    <li>Laparoscopy</li>
                </ul>
            </div>
        </div>

        <!-- Doctor's Info -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-blue-800 text-2xl font-semibold">Doctor's Info</h2>
            <p class="mt-4 text-gray-600 leading-relaxed">
                Dr. Sweta Gupta, with over 25 years of experience, is a leading fertility specialist and the Medical Director at Crysta IVF in Noida/Delhi. Her dedication to advanced reproductive medicine has helped numerous patients achieve their dreams of parenthood. She specializes in various fertility treatments, including IVF, IUI, and egg freezing, and she has trained in advanced reproductive techniques internationally.
            </p>
        </div>

        <!-- Services Section -->
        <div class="bg-indigo-600 text-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-center text-2xl font-bold">Services</h3>
            <ul class="mt-4 space-y-2">
                <li>Regular health check-ups</li>
                <li>Reproductive consultations</li>
                <li>Ultrasound diagnostics</li>
                <li>Fertility assessments</li>
            </ul>
        </div>

        <!-- Customer Reviews Section -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-blue-800 text-2xl font-semibold text-center">What our customers say</h2>
            <p class="text-center text-gray-500 mt-2">
                Problems trying to resolve the conflict between the two major realms of Classical physics: Newtonian mechanics.
            </p>
            <div class="grid lg:grid-cols-3 gap-6 mt-8">
                @foreach(range(1, 3) as $review)
                    <div class="bg-gray-200 p-4 rounded-lg shadow hover:shadow-md transition">
                        <p class="text-sm text-gray-600 leading-relaxed">
                            "Slate helps you see how many more days you need to work to reach your financial goal."
                        </p>
                        <div class="flex items-center mt-4">
                            <img src="https://via.placeholder.com/50" alt="User Avatar" class="w-10 h-10 rounded-full border-2 border-blue-600">
                            <div class="ml-3 text-sm text-gray-700">User Name</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
