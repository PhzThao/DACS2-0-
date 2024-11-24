<header class="w-full py-4 bg-white fixed top-0 left-0 right-0 z-50 shadow-md">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center">
            
            <!-- Logo Section -->
            <a href="{{ route('sd') }}" class="flex items-center mb-4 md:mb-0">
                <img src="{{ asset('images/favicon 2.png') }}" alt="HappyPet Logo" class="w-8 h-8 mr-2">
                <span class="text-[#161550] text-2xl font-normal font-['Amaranth']">HappyPet</span>
            </a>

            <!-- Navigation Links -->
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
                        <a href="{{ route('sd') }}" class="nav-link">Services</a>
                        <ul class="absolute left-0 hidden group-hover:block bg-white shadow-lg mt-2 rounded">
                            <li class="relative detail-item">
                                <a href="{{ route('sd') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Detail</a>
                                <ul class="detail-submenu">
                                    <li><a href="{{ route('hcpc') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Health care and psychological counseling</a></li>
                                    <li><a href="{{ route('bss') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Beauty and spa services</a></li>
                                    <li><a href="{{ route('pt') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Pet training</a></li>
                                    <li><a href="{{ route('as1') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Accommodation services</a></li>
                                </ul>
                            </li>
                            <li class="relative detail-item">
                                <a href="{{ route('as.index') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Appointment schedule</a>
                                <ul class="detail-submenu">
                                    <li><a href="{{ route('doctors.index') }}" class="block px-4 py-2 text-black hover:bg-gray-200">All doctor</a></li>
                                    <li><a href="{{ route('address') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Address</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('services.training') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Training</a></li>
                            <li><a href="{{ route('services.shop') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Shop</a></li>
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

            <!-- Cart and Login/Profile Section -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('cart') }}" class="w-10 h-10 md:w-14 md:h-14 bg-[#f79576] rounded-full border border-black flex items-center justify-center hover:shadow-xl transform transition duration-300 hover:scale-110">
                    <img src="{{ asset('images/shopping-cart 1.png') }}" alt="Cart" class="w-4 h-4 md:w-6 md:h-6">
                </a>
                
                @if(auth()->check())
                    <!-- Profile Image with Dropdown Menu -->
                    <div class="relative">
                        <!-- Profile Image (Toggles Dropdown) -->
                        <a href="#" onclick="toggleDropdown(event)" class="block w-10 h-10 md:w-14 md:h-14 rounded-full overflow-hidden border border-black">
                             <!-- Hiển thị ảnh đại diện của người dùng -->
                             <img src="{{ auth()->user()->avatar }}" alt="Profile" class="w-10 h-10 md:w-14 md:h-14 rounded-full object-cover">

                        </a>
                        <!-- Dropdown Menu -->
                        <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                            <a href="{{ route('user.profile',['id'=>auth()->user()->id]) }}" class="block px-4 py-2 text-black hover:bg-gray-100">View Profile</a>
                            <form action="{{ route('logout') }}" method="POST" class="flex items-center px-4 py-2 text-black hover:bg-gray-100">
                                @csrf
                                <button type="submit" class="w-full text-left flex items-center space-x-2">
                                    <span>Log Out</span>
                                    <!-- Exit Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                        <polyline points="10 17 15 12 10 7"></polyline>
                                        <line x1="15" y1="12" x2="3" y2="12"></line>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Display login button when not logged in -->
                    <a href="{{ route('login') }}" class="px-4 py-2 md:px-6 md:py-2 bg-[#f79576] rounded-full border border-black text-black text-sm md:text-base lg:text-xl font-normal font-['Otomanopee One'] hover:bg-[#f77957] transition duration-300">Log in</a>
                @endif
            </div>
        </div>
    </div>
</header>

<!-- JavaScript to Toggle Dropdown Visibility -->
<script>
    function toggleDropdown(event) {
        event.preventDefault();
        const dropdown = document.getElementById('profileDropdown');
        dropdown.classList.toggle('hidden');
    }

    // Close dropdown if clicked outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('profileDropdown');
        const profileImage = document.querySelector('[onclick="toggleDropdown(event)"]');
        if (!profileImage.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });
</script>
