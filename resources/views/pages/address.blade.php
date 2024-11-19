@extends('layouts.app')

@section('title', 'HappyPet - Dịch vụ chăm sóc thú cưng')

@section('content')
<div class="max-w-4xl mx-auto p-4 mt-16">
    <!-- Pet Images Header -->
    <div class="relative h-48 mb-[-5rem]">
        <img
            src="{{ asset('images/Thiết kế chưa có tên 5.png') }}" 
            alt="Various pets"
            class="w-full h-full object-cover transform hover:scale-105 transition-transform"
        />
    </div>

    <!-- Form Container -->
    <form class="bg-purple-100 rounded-3xl p-8 shadow-lg">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Left Column -->
            <div class="space-y-6">
                <input
                    type="text"
                    placeholder="First name"
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-500 mt-8"
                />
                <input
                    type="email"
                    placeholder="Email"
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-500"
                />
                
                <div class="space-y-2">
                    <p class="text-gray-700">Preferred way to reach you?</p>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="form-checkbox text-purple-600 rounded" />
                            <span>Email</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="form-checkbox text-purple-600 rounded" />
                            <span>Phone call</span>
                        </label>
                    </div>
                </div>

                <!-- Map Preview -->
                <div class="w-full h-48 bg-blue-100 rounded-lg overflow-hidden">
                    <img
                        src="{{ asset('images/image 1.png') }}"
                        alt="Map preview"
                        class="w-full h-full object-cover"
                    />
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                <input
                    type="text"
                    placeholder="Last name"
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-500 mt-8"
                />
                <input
                    type="tel"
                    placeholder="Phone"
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-500"
                />
                <input
                    type="text"
                    placeholder="Country, Province/City, District, Ward/Commune"
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-500"
                />
                <input
                    type="text"
                    placeholder="Detailed address"
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-500"
                />
                
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox text-purple-600 rounded" />
                    <span>Set as default address</span>
                </label>

                <!-- reCAPTCHA placeholder -->
                <div class="flex items-center space-x-2 border rounded-lg p-4 bg-white">
                    <input type="checkbox" class="form-checkbox text-purple-600 rounded" />
                    <span>I'm not a robot test</span>
                    <div class="ml-auto">
                        <img
                            src="{{ asset('images/arrow 1.png') }}"
                            alt="reCAPTCHA"
                            class="w-10 h-10"
                        />
                    </div>
                </div>

                <button
                    type="submit"
                    class="w-32 px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors ml-auto block"
                >
                    Submit
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
