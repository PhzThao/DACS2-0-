<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'HappyPet')</title>
    <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&family=Amaranth&family=Instrument+Sans&display=swap" rel="stylesheet">
    @stack('styles')
    <style>
        /* Additional styles for navigation links */
        .nav-link {
            position: relative;
            padding: 8px 16px;
            transition: color 0.3s ease, border-color 0.3s ease, background-color 0.3s ease;
            border: 2px solid transparent;
            border-radius: 4px;
            color: black;
            font-size: 1.125rem;
        }
    
        .nav-link:hover {
            color: white;
            background-color: #f79576;
            border-color: #f79576;
        }

        /* Styles for the Detail submenu */
        .detail-submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: 0;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            border-radius: 4px;
        }

        .detail-item:hover .detail-submenu {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="w-full py-4 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <a href="{{ route('sd') }}" class="flex items-center mb-4 md:mb-0">
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
                                <li class="relative detail-item">
                                    <a href="{{ route('sd') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Detail</a>
                                    <ul class="detail-submenu">
                                        <li><a href="{{ route('hcpc') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Health care 
                                            and psychological counseling</a></li>
                                        <li><a href="{{ route('bss') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Beauty and spa services</a></li>
                                        <li><a href="{{ route('pt') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Pet training</a></li>
                                        <li><a href="{{ route('as1') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Accommodation services</a></li>
                                    </ul>
                                </li>
                                <li class="relative detail-item">
                                    <a href="{{ route('as') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Appointment schedule</a>
                                    <ul class="detail-submenu">
                                        <li><a href="{{ route('doctor') }}" class="block px-4 py-2 text-black hover:bg-gray-200">All doctor</a></li>
                                        <li><a href="{{ route('address') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Address</a></li>
                                    </ul>
                                </li>
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
    
    <main class="container mx-auto px-6 py-8">
        @yield('content')
    </main>

    <footer class="bg-[#988f8f] py-16">
        <div class="container mx-auto flex justify-between" style="margin-left: 20px;">
            <div class="w-1/3">
                <div class="flex items-center mb-4">
                    <img src="{{ mix('images/favicon 2.png') }}" alt="HappyPet Logo" class="w-10 h-[44.19px]">
                    <span class="ml-2 text-[#171650] text-[38.66px] font-normal font-['Amaranth']">HappyPet</span>
                </div>
                <p class="text-black text-lg font-normal font-['Instrument Sans']">HappyPet offers exceptional pet care services including grooming, boarding, and our dedicated team.</p>
                <div class="flex space-x-4 mt-8">
                    <a href="#" class="transform transition-transform duration-300 hover:scale-110">
                        <div class="w-[47px] h-[47px] bg-[#988f8f] rounded-full border-2 border-black flex items-center justify-center hover:shadow-xl">
                            <img src="{{ mix('images/facebook.png') }}" alt="Facebook" class="w-5 h-5">
                        </div>
                    </a>
                    <a href="#" class="transform transition-transform duration-300 hover:scale-110">
                        <div class="w-[47px] h-[47px] bg-[#988f8f] rounded-full border-2 border-black flex items-center justify-center hover:shadow-xl">
                            <img src="{{ mix('images/twitter.png') }}" alt="Twitter" class="w-5 h-5">
                        </div>
                    </a>
                    <a href="#" class="transform transition-transform duration-300 hover:scale-110">
                        <div class="w-[47px] h-[47px] bg-[#988f8f] rounded-full border-2 border-black flex items-center justify-center hover:shadow-xl">
                            <img src="{{ mix('images/instagram.png') }}" alt="Instagram" class="w-5 h-5">
                        </div>
                    </a>
                    <a href="#" class="transform transition-transform duration-300 hover:scale-110">
                        <div class="w-[47px] h-[47px] bg-[#988f8f] rounded-full border-2 border-black flex items-center justify-center hover:shadow-xl">
                            <img src="{{ mix('images/youtube-symbol 1.png') }}" alt="YouTube" class="w-[17px] h-[17px]">
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-1/3">
                <h3 class="text-center text-black text-2xl font-normal font-['Otomanopee One'] mb-8">Contact Info</h3>
                <div class="flex items-center mb-4">
                    <img src="{{ mix('images/pin.png') }}" alt="Location" class="w-5 h-5 mr-4">
                    <p class="text-black text-lg font-normal font-['Instrument Sans']">470 Đ. Tran Dai Nghia, Hoa Hai, Ngu Hanh Son, Da Nang 550000, Vietnam</p>
                </div>
                <div class="flex items-center mb-4">
                    <img src="{{ mix('images/phone-call.png') }}" alt="Phone" class="w-5 h-5 mr-4">
                    <p class="text-black text-lg font-normal font-['Instrument Sans']">9999 999 999</p>
                </div>
                <div class="flex items-center">
                    <img src="{{ mix('images/email.png') }}" alt="Email" class="w-5 h-5 mr-4">
                    <p class="text-black text-lg font-normal font-['Instrument Sans']">thaonp.23ite@vku.udn.vn</p>
                </div>
            </div>
            <div class="w-1/3">
                <img src="{{ mix('images/dog-vector 1.png') }}" alt="Footer Image" class="w-[281px] h-[311px]">
            </div>
        </div>
    </footer>
</body>
</html>