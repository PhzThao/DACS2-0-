<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HappyPet - Charles Deo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/favicon 2.png') }}" alt="HappyPet Logo" class="h-8">
                <span class="text-indigo-900 font-semibold text-xl">HappyPet</span>
            </div>
            <div class="flex items-center space-x-4 relative">
            @if(auth()->check())
    <!-- Profile Image with Dropdown Menu -->
    <div class="flex items-center space-x-3 relative">
        <!-- Profile Image (Toggles Dropdown) -->
        <a href="#" onclick="toggleDropdown(event)" class="block w-10 h-10 md:w-14 md:h-14 rounded-full overflow-hidden border border-black">
            <!-- Hiển thị ảnh đại diện của người dùng -->
            <img src="{{ auth()->user()->avatar}}" alt="Profile" class="w-10 h-10 md:w-14 md:h-14 rounded-full object-cover">
        </a>

        <!-- 3 Dots Button -->
        <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center cursor-pointer" onclick="toggleDropdown(event)">
            <span class="text-gray-600">•••</span>
        </div>

        <!-- Dropdown Menu -->
        <div class="absolute right-0 w-48 bg-white border border-gray-300 rounded-lg shadow-lg mt-2 hidden" id="dropdown-menu">
            <a href="/" class="block px-4 py-2 text-black hover:bg-gray-100">Back to Home</a>
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
@endif

    </header>

    <!-- Main Content -->
    <main class="pt-16">
        <!-- Cover Photo -->
        <div class="relative h-64 bg-gradient-to-r from-purple-400 to-pink-400">
            <img src="{{ asset('images/unsplash_0aMMMUjiiEQ.png') }}" alt="Cover" class="w-full h-full object-cover">
            <button class="absolute top-4 right-4 bg-white rounded-lg px-4 py-2 text-sm font-medium">
                Edit Cover Photo
            </button>
        </div>

        <!-- Profile Section -->
        <div class="max-w-7xl mx-auto px-4">
            <div class="relative -mt-16 mb-4 flex items-end justify-start">
                @if(auth()->check())
                <!-- Profile Image with Dropdown Menu -->
                <div class="flex items-end">
                    <div class="relative">
                        <img src="{{ auth()->user()->avatar }}" alt="Charles Deo" 
                             class="w-40 h-40 rounded-full border-4 border-white shadow-lg cursor-pointer"
                             id="profileImage"
                             onclick="toggleImage()">
                    </div>
                </div>
                @endif
        
                <!-- Adjusted margin-top and margin-left to move text and button closer to the image -->
                <div class="ml-4 mt-6 mb-6">
                    <h1 class="text-2xl font-bold text-gray-900">Charles Deo</h1>
                    <p class="text-gray-500">UI/UX Designer</p>
                </div>
        
                <!-- Button aligned to the right -->
                <div class="ml-auto mb-6">
                    <button class="px-6 py-2 rounded-lg border border-purple-500 text-purple-500 hover:bg-purple-50">
                        Edit Profile
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Enlarged Image Popup -->
        <div id="enlargedImage" class="fixed inset-0 bg-gray-800 bg-opacity-70 flex justify-center items-center hidden">
            <div class="relative">
                <img src="{{ auth()->user()->avatar }}" alt="Charles Deo" class="w-96 h-96 rounded-full border-4 border-white shadow-lg">
                <button onclick="toggleImage()" class="absolute top-0 right-0 p-2 bg-white rounded-full text-black">
                    Close
                </button>
            </div>
        </div>
        
        <script>
            function toggleImage() {
                const enlargedImage = document.getElementById('enlargedImage');
                enlargedImage.classList.toggle('hidden');
            }
        </script>
        
        
        
        
    </main>

    <script>
        function toggleDropdown(event) {
            event.preventDefault();
            const dropdown = document.getElementById('dropdown-menu');
            dropdown.classList.toggle('hidden');
        }
    
        // Close dropdown if clicked outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('dropdown-menu');
            const dropdownButton = document.querySelector('.w-8.h-8');
            
            // Check if the click is outside the dropdown button and dropdown itself
            if (!dropdownButton.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>



            <!-- Three Column Layout -->
            <div class="grid grid-cols-12 gap-6">
                <!-- Left Sidebar -->
                <div class="col-span-3">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold text-purple-500 mb-4">About</h2>
                        <div class="space-y-4">
                            <!-- Gender -->
                            <div class="flex items-center space-x-2 text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>{{ $user->gender }}</span>
                            </div>
                            <!-- Date of Birth -->
                            <div class="flex items-center space-x-2 text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>{{ \Carbon\Carbon::parse($user->dateofbirth)->format('F j, Y') }}</span> <!-- Định dạng ngày tháng -->
                            </div>
                            <!-- Address -->
                            <div class="flex items-center space-x-2 text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>{{ $user->address }}</span>
                            </div>
                            <!-- Email -->
                            <div class="flex items-center space-x-2 text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span>{{ $user->email }}</span>
                            </div>
                            <!-- Phone -->
                            <div class="flex items-center space-x-2 text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span>{{ $user->phone }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- Main Content -->
<div class="col-span-6">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Tabs -->
        <div class="flex border-b">
            <button class="px-6 py-3 text-gray-500 hover:text-gray-700 transition duration-300">Followers</button>
            <button class="px-6 py-3 text-gray-500 hover:text-gray-700 transition duration-300">Following</button>
            <button class="px-6 py-3 text-purple-500 border-b-2 border-purple-500 transition duration-300">Posts</button>
        </div>

        <!-- Posts -->
        <div class="p-4 space-y-4">
            <!-- Post 1 -->
            <div class="border rounded-lg p-4 bg-gray-50 shadow-md transition duration-300 hover:bg-gray-100">
                @if(auth()->check())
                <!-- Profile Image with Dropdown Menu -->
                <div class="flex items-center space-x-3 mb-4">
                    <img src="{{ asset(auth()->user()->avatar) }}" alt="User Avatar" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <h3 class="font-semibold text-gray-800">{{ auth()->user()->name }}</h3>
                        <p class="text-sm text-gray-500">2 hours ago</p>
                    </div>
                </div>
                @endif

                <!-- Post Image -->
                <img src="{{ asset('images/64653628ae88f37d5e8ab903363cec77 1.png') }}" alt="Post Image" class="w-full rounded-lg mb-4">

                <!-- Post Actions -->
                <div class="flex items-center space-x-6 text-gray-500">
                    <button class="flex items-center space-x-2 hover:text-purple-600 transition duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        <span>1,488 Likes</span>
                    </button>
                    <button class="flex items-center space-x-2 hover:text-blue-600 transition duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <span>3,000 Comments</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

                

                <!-- Right Sidebar -->
                <div class="col-span-3">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold mb-4">Your pet</h2>
                        <div class="space-y-4">
                            <?php
                            $pets = [
                                ['name' => 'Miu', 'type' => 'Cat'],
                                ['name' => 'Keny', 'type' => 'Dog'],
                                ['name' => 'July', 'type' => 'Dog'],
                                ['name' => 'Miu', 'type' => 'Cat'],
                                ['name' => 'Keny', 'type' => 'Dog'],
                                ['name' => 'July', 'type' => 'Dog'],
                            ];

                            foreach ($pets as $pet): ?>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img src="{{ asset('images/Ellipse 58.png') }}" alt="<?php echo $pet['name']; ?>" 
                                         class="w-10 h-10 rounded-full">
                                    <div>
                                        <h3 class="font-medium"><?php echo $pet['name']; ?></h3>
                                        <p class="text-sm text-gray-500"><?php echo $pet['type']; ?></p>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="p-2 text-gray-400 hover:text-gray-600">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                    </button>
                                    <button class="p-2 text-gray-400 hover:text-gray-600">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>