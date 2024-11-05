<section class="relative bg-[#ffdcc9] overflow-hidden min-h-[500px]">
    <!-- Phần tử background -->
    <div class="w-[150vw] h-[130vh] absolute inset-0 -translate-y-1/2 -translate-x-1/4 rounded-full bg-[#ffdcc9] z-0"></div>

    <div class="container mx-auto mt-10 relative z-10">
        <div class="flex welcome-container flex-col md:flex-row items-center">
            <div class="w-full ml-10 md:w-1/2 mb-8 md:mb-0 text-center md:text-left">
                <h2 class="text-black text-lg md:text-xl font-normal font-['Instrument Sans'] mb-2 md:mb-4">
                    WELCOME TO HAPPYPET
                </h2>
                <h1 class="text-[#171650] text-3xl md:text-4xl lg:text-5xl font-normal font-['Otomanopee One'] mb-4 md:mb-6">
                    The Best Care for Your Best Friend
                </h1>
                <p class="text-black text-base md:text-lg font-normal font-['Instrument Sans'] mb-6 md:mb-8">
                    At HappyPet, we provide exceptional care and services for your pets, including grooming, boarding, and walking. Trust us to ensure your furry friends are happy.
                </p>
            </div>
            <div class="w-full md:w-1/2 relative flex justify-center md:justify-end">
                <div class="relative w-[90%] md:w-[80%] mx-auto aspect-[4/3]">
                    <img 
                        src="{{ asset('images/hero-banner 1.png') }}" 
                        alt="Happy pet with owner" 
                        class="rounded-lg w-[80%] h-auto object-cover mx-auto"
                    >
                    <img 
                        src="{{ asset('images/hero-thumb 1.png') }}" 
                        alt="Dog icon" 
                        class="absolute w-[20%] md:w-[20%] aspect-square -left-[1%] top-1/2 transform -translate-y-1/2"
                    >
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden">
        <svg width="1950" height="650" viewBox="0 0 1437 480" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 479C385 508.5 1209.7 454.1 1436.5 0.5 L1437 487 L0 487 Z" fill="white"/>
        </svg>
    </div>
</section>