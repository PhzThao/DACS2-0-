<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Link to Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans">

    <!-- Sidebar -->
    <div class="flex h-screen">
        <!-- Sidebar Section -->
        <div class="w-64 bg-blue-800 text-white p-4">
            <div class="flex justify-between items-center mb-8">
                <span class="text-lg font-semibold">Hello Admin!</span>
                <form action="{{ route('logout') }}" method="POST" class="inline-block">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 focus:outline-none">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>

            <div class="bg-white p-4 mb-8 rounded-lg shadow-lg">
                <div class="flex items-center">
                    <img src="{{ asset('images/favicon 2.png') }}" alt="HappyPet Logo" class="w-10 h-10 mr-3">
                    <span class="text-[#161550] text-3xl font-bold font-['Otomanopee One']">HappyPet</span>
                </div>
            </div>
            <ul>
                <li class="mb-4">
                    <a href="{{ route('accounts') }}" class="block px-4 py-2 hover:bg-blue-700 rounded flex items-center">
                        <i class="fas fa-users mr-2"></i> Accounts
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('products') }}" class="block px-4 py-2 hover:bg-blue-700 rounded flex items-center">
                        <i class="fas fa-cogs mr-2"></i> Products
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('orders') }}" class="block px-4 py-2 hover:bg-blue-700 rounded flex items-center">
                        <i class="fas fa-box mr-2"></i> Orders
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('comments') }}" class="block px-4 py-2 hover:bg-blue-700 rounded flex items-center">
                        <i class="fas fa-comment-dots mr-2"></i> Comments
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('statistics') }}" class="block px-4 py-2 hover:bg-blue-700 rounded flex items-center">
                        <i class="fas fa-chart-line mr-2"></i> Statistics
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            @yield('content') <!-- Nội dung trang sẽ được chèn ở đây -->
        </div>
    </div>

</body>

</html>
