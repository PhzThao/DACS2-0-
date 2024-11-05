<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach($statistics as $stat)
            <div class="flex flex-col items-center text-center">
                <div class="w-16 h-16 md:w-20 md:h-20 mb-4 relative">
                    <img 
                        src="{{ asset('images/' . $stat['icon']) }}" 
                        alt="{{ $stat['title'] }}"
                        class="w-full h-full object-contain"
                    >
                </div>
                <h3 class="text-black text-sm md:text-base font-medium mb-1">
                    {{ $stat['title'] }}
                </h3>
                <p class="text-black text-sm md:text-base">
                    {{ $stat['description'] }}
                </p>
            </div>
            @endforeach
        </div>
        
        <div class="flex justify-center mt-8">
            <a 
                href="{{ route('about') }}" 
                class="inline-flex items-center justify-center px-6 py-2 bg-pink-200 rounded-full text-black text-sm md:text-base font-medium hover:bg-pink-300 transition-colors duration-200"
            >
                View More
            </a>
        </div>
    </div>
</section>