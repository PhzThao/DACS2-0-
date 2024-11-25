@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Header Section -->
    <div class="relative bg-blue-800 h-[350px] lg:h-[450px]">
        <div class="container mx-auto px-4 lg:px-8 relative z-10 h-full flex flex-col lg:flex-row items-center justify-between">
            <div class="text-center lg:text-left">
                <h1 class="text-white text-4xl lg:text-5xl font-bold">{{ $doctor->name_doctor }}</h1>
                <p class="text-blue-200 text-lg lg:text-xl mt-2 mb-5">{{ $doctor->doctor_title }}</p>
                <a href="{{ route('as.index', ['id_doctor' => $doctor->id_doctor])}}" class="mt-4 bg-yellow-500 text-white font-semibold py-2 px-6 rounded-full shadow-md hover:bg-yellow-400 transition">
                    Book now
                </a>
            </div>
            <img src="{{ asset($doctor->doctor_avartar) }}" alt="Doctor's Image" class="w-32 h-32 lg:w-40 lg:h-40 rounded-full border-4 border-white shadow-lg mt-6 lg:mt-0">
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 lg:px-8 mt-12 space-y-12">
        <!-- Experience & Skills -->
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Experience Section -->
            <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition border-l-4 border-blue-800">
                <h2 class="text-blue-800 text-2xl font-semibold">Experience</h2>
                <p class="mt-4 text-gray-600 leading-relaxed">{{ $doctor->doctor_experience }}</p>
            </div>

            <!-- Skills Section -->
            <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition border-l-4 border-blue-800">
                <h2 class="text-blue-800 text-2xl font-semibold">Expert Skills</h2>
                <ul class="mt-4 text-gray-600 space-y-2">
                    <!-- Assuming doctor_skills is stored as a comma-separated string -->
                    @foreach(explode(',', $doctor->doctor_skills) as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Doctor's Info -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-blue-800 text-2xl font-semibold">Doctor's Info</h2>
            <p class="mt-4 text-gray-600 leading-relaxed">
                {{ $doctor->doctor_info }}
            </p>
        </div>

        <!-- Services Section -->
        <div class="bg-indigo-600 text-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-center text-2xl font-bold">Services</h3>
            <ul class="mt-4 space-y-2">
                @foreach($doctor->services as $service)
                    <li>{{ $service->service_name }}</li> <!-- Assuming the service has 'service_name' field -->
                @endforeach
            </ul>
        </div>

        <!-- Customer Reviews Section -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-blue-800 text-2xl font-semibold text-center">What our customers say</h2>
            <p class="text-center text-gray-500 mt-2">
                Customer feedback from patients about Dr. {{ $doctor->name_doctor }}
            </p>
            <div class="grid lg:grid-cols-3 gap-6 mt-8">
                @foreach($doctor->reviews as $review)
                    <div class="bg-gray-200 p-4 rounded-lg shadow hover:shadow-md transition">
                        <p class="text-sm text-gray-600 leading-relaxed">
                            "{{ $review->content_feedback }}"
                        </p>
                        <div class="flex items-center mt-4">
                            <img src="https://via.placeholder.com/50" alt="User Avatar" class="w-10 h-10 rounded-full border-2 border-blue-600">
                            <div class="ml-3 text-sm text-gray-700">{{ $review->user->name ?? 'Anonymous' }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
