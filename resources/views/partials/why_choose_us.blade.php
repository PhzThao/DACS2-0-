<section class="py-12 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-center text-3xl text-[#d41717] mb-5 font-sans">WHY CHOOSE
            US</h2>
        <h3 class="text-center text-5xl font-bold text-black mb-12 font-otomanopee-one">Your
            Pets Will Be<br />Extremely Happy With Us</h3>

        <div class="relative pt-5">
            <!-- Central image -->
            <div class="absolute inset-0 flex items-center justify-center z-10">
                <div class="flex items-center justify-center w-1/3">
                    <img src="{{ asset('images/why-choose-us-banner 1.png') }}" alt="Happy pets" class="object-cover">
                </div>
            </div>

            <!-- Reasons grid -->
            <div class="grid grid-cols-2 gap-8 md:gap-16 relative z-20">

                @foreach ($reasons as $index => $reason)
                    <div
                      
                    
                    
                    
                    
                    class=" box-img   items-center text-center {{ $index % 2 == 0 ? 'justify-start' : 'justify-end' }} h-64 ">
                        <div class="w-48 h-48 bg-white rounded-full flex items-center justify-center mb-4">
                            <div
                                class="w-40 h-40 md:w-24 md:h-24 bg-white rounded-full border border-black flex items-center justify-center mb-4">
                                <img src="{{ asset('images/' . $reason['icon']) }}" alt="{{ $reason['title'] }}"
                                    class="w-8 h-8 md:w-12 md:h-12">
                            </div>
                        </div>
                        <h4 class="text-black text-lg md:text-xl font-bold font-['Inria Serif'] mb-2">
                            {{ $reason['title'] }}</h4>
                        <p class="text-black text-sm md:text-base font-normal font-['Instrument Sans'] max-w-xs">
                            {{ $reason['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
