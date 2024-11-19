<section class="py-8 md:py-16 bg-white font-instrument">
    <div class="container mx-auto px-4">
        <h2 class="text-center text-3xl text-[#d41717] mb-5 font-sans">
            OUR SERVICES
        </h2>
        <h3
            class="text-center text-5xl font-bold text-black mb-12 font-otomanopee">
            Our one-stop solution<br>
            for premium pet care
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-8 pt-5">
            @foreach($services as $service)
                    <div class="aspect-square">
                        <div class="w-full h-full {{ $service['bg'] }} rounded-full flex flex-col items-center justify-center p-8 transition-transform duration-300 hover:scale-105">
                            <img 
                                src="{{ asset($service['icon']) }}"
                                alt="{{ $service['title'] }}" 
                                class="w-18 h-18 mb-6 transition-transform duration-300 hover:scale-110"
                            >
                            <h3 class="text-xl font-otomanopee-one text-[#161550]">
                                {{ $service['title'] }}
                            </h3>
                        </div>
                    </div>
                @endforeach
        </div>
        <div class="text-center mt-8 md:mt-12">
            <a href="{{ route('services') }}"
                class="inline-block px-6 py-3 md:px-8 md:py-3 bg-[#f79576] rounded-full text-black text-lg md:text-xl font-normal font-['Otomanopee One'] hover:bg-[#f7a78e] transition duration-300">
                More Services
            </a>
        </div>
    </div>
</section>
