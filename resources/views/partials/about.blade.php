<section class="py-8 md:py-16 bg-[#ffd9d9] font-instrument">
    <div class="container mx-auto px-4">
        <h2 class="text-[#d41717] text-xl md:text-2xl font-normal font-['Instrument Sans'] mb-2 md:mb-4 text-center">ABOUT US</h2>
        <h3 class="text-black text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-normal font-otomanopee mb-8 text-center">Our Journey to HappyPet<br>A Passion for Pets</h3>
        <div class="flex flex-col md:flex-row items-center md:items-start">
            <div class="w-full md:w-1/2 md:pr-8 mb-8 md:mb-0">
                <p class="text-black text-base md:text-lg lg:text-xl font-normal font-['Instrument Sans'] mb-6 md:mb-8">Welcome to PetPath! Our mission is to provide top-notch care and services for your beloved pets. From grooming to boarding, we ensure every pet feels loved, safe, and happy. Trust us with your furry family members.</p>
                <div class="grid grid-cols-2 gap-4 md:gap-6 mb-8">
                    @foreach($stats as $stat)
                        <div class="text-center bg-white rounded-lg p-4 shadow-md">
                            <p class="text-2xl md:text-3xl font-bold text-[#d41717]">{{ $stat['value'] }}</p>
                            <p class="text-black text-sm md:text-base">{{ $stat['label'] }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="text-center md:text-left">
                    <a href="{{ route('about') }}" class="inline-block px-6 py-3 md:px-8 md:py-3 bg-[#f79576] rounded-full text-black text-lg md:text-xl font-normal font-['Otomanopee One'] hover:bg-[#f7a78e] transition duration-300">View More</a>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/about-image.jpg') }}" alt="About HappyPet" class="rounded-lg shadow-lg w-full h-auto">
            </div>
        </div>
    </div>
</section>