<header class="w-full py-4 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <a href="{{ route('home') }}" class="flex items-center mb-4 md:mb-0">
                <img src="{{ mix('images/favicon 2.png') }}" alt="HappyPet Logo" class="w-8 h-8 mr-2">
                <span class="text-[#161550] text-2xl font-normal font-['Amaranth']">HappyPet</span>
            </a>
            <nav class="mb-4 md:mb-0 relative">
                <ul class="flex flex-wrap justify-center md:justify-start space-x-2 md:space-x-6">
                    <li class="relative group">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="relative group">
                        <a href="{{ route('about') }}" class="nav-link">About</a>
                        <ul class="absolute left-0 hidden group-hover:block bg-white shadow-lg mt-2 rounded">
                            <li><a href="{{ route('about.team') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Our Team</a></li>
                            <li><a href="{{ route('about.story') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Our Story</a></li>
                            <li><a href="{{ route('about.care') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Pet Care</a></li>
                        </ul>
                    </li>
                    <li class="relative group">
                        <a href="{{ route('services') }}" class="nav-link">Services</a>
                        <ul class="absolute left-0 hidden group-hover:block bg-white shadow-lg mt-2 rounded">
                            <li><a href="{{ route('services.grooming') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Grooming</a></li>
                            <li><a href="{{ route('services.boarding') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Boarding</a></li>
                            <li><a href="{{ route('services.training') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Training</a></li>
                        </ul>
                    </li>
                    <li class="relative group">
                        <a href="{{ route('pet-moments') }}" class="nav-link">Pet Moments</a>
                        <ul class="absolute left-0 hidden group-hover:block bg-white shadow-lg mt-2 rounded">
                            <li><a href="{{ route('pet-moments.photos') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Photos</a></li>
                            <li><a href="{{ route('pet-moments.stories') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Stories</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                </ul>
            </nav>
            
            <div class="flex items-center space-x-4">
                <a href="{{ route('cart') }}" class="w-10 h-10 md:w-14 md:h-14 bg-[#f79576] rounded-full border border-black flex items-center justify-center hover:shadow-xl transform transition duration-300 hover:scale-110">
                    <img src="{{ mix('images/shopping-cart 1.png') }}" alt="Cart" class="w-4 h-4 md:w-6 md:h-6">
                </a>
                <a href="{{ route('login') }}" class="px-4 py-2 md:px-6 md:py-2 bg-[#f79576] rounded-full border border-black text-black text-sm md:text-base lg:text-xl font-normal font-['Otomanopee One'] hover:bg-[#f77957] transition duration-300">Log in</a>
            </div>
        </div>
    </div>
</header>