<section class="bg-[#e5e1ff] py-8 md:py-16 font-instrument"> 
    <div class="container mx-auto px-4">
        <h2 class="text-center text-5xl font-bold text-black mb-12 font-otomanopee">
            The importance of<br>
            taking care of pets
        </h2>
        
        <div class="pt-5">
            @foreach($importancePoints as $index => $point)
                <div class="flex flex-col md:flex-row items-center">
                    @if($index % 2 == 1)
                        {{-- Số lẻ: Hình bên phải, nội dung bên trái --}}
                        <div class="flex items-center gap-4 w-full md:w-1/2 text-right pr-10 pl-10">
                            <div class="text-[#6b5ca8] text-5xl md:text-9xl font-normal font-shadows-into-light-two shrink-0">
                                #{{ $index + 1 }}
                            </div>
                            <div class="flex-1">
                                <h3 class="text-[#6b5ca8] font-semibold font-sans text-4xl md:text-2xl mb-2">
                                    {{ $point['title'] }}
                                </h3>
                                <p class="text-black text-base md:text-lg font-sans">
                                    {{ $point['description'] }}
                                </p>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 order-first md:order-none">
                            <div class="aspect-[4/3] overflow-hidden">
                                <img 
                                    src="{{ asset($point['image']) }}" 
                                    alt="{{ $point['title'] }}" 
                                    class="w-full h-full object-cover"
                                >
                            </div>
                        </div>
                    @else
                        {{-- Số chẵn: Hình bên trái, nội dung bên phải --}}
                        <div class="w-full md:w-1/2 order-first">
                            <div class="aspect-[4/3] overflow-hidden">
                                <img 
                                    src="{{ asset($point['image']) }}" 
                                    alt="{{ $point['title'] }}" 
                                    class="w-full h-full object-cover"
                                >
                            </div>
                        </div>
                        <div class="flex items-center gap-4 w-full md:w-1/2 text-left pr-10 pl-10">
                            <div class="text-[#6b5ca8] text-5xl md:text-9xl font-normal font-shadows-into-light-two shrink-0">
                                #{{ $index + 1 }}
                            </div>
                            <div class="flex-1">
                                <h3 class="text-[#6b5ca8] font-semibold font-sans text-xl md:text-2xl mb-2">
                                    {{ $point['title'] }}
                                </h3>
                                <p class="text-black text-base md:text-lg font-sans">
                                    {{ $point['description'] }}
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
