<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-4xl font-semibold">Shop by pet</h2>
        <div class="flex gap-4">
            <button class="p-2.5 bg-black rounded-full text-white hover:bg-gray-800 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button class="p-2.5 bg-black rounded-full text-white hover:bg-gray-800 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        @foreach(['Cat', 'Hamster', 'Dog', 'Parrot', 'Rabbit', 'Turtle'] as $pet)
        <div class="flex flex-col items-center gap-4 group cursor-pointer">
            <div class="relative w-full aspect-square bg-[#ffdcc9] rounded-full overflow-hidden transition-transform group-hover:scale-105">
                <img src="{{ asset('images/pets/' . strtolower($pet) . '.png') }}" 
                     alt="{{ $pet }}"
                     class="w-full h-full object-cover">
            </div>
            <span class="text-xl font-semibold">{{ $pet }}</span>
        </div>
        @endforeach
    </div>
</section>