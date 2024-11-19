<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center relative overflow-hidden">
    <img src="{{ asset('images/Chưa có tên (474 x 316 px) 1.png') }}" alt="Cute pets background" class="absolute inset-0 w-full h-full object-cover">
    
    <div class="relative z-10 w-full max-w-md px-4">
        <!-- Login Form Card -->
        <div class="bg-black/30 backdrop-blur-sm p-8 rounded-3xl shadow-xl">
            @if (session('success'))
    <script type="text/javascript">
        alert("{{ session('success') }}");

        // Đợi 1 giây (1000ms) trước khi chuyển hướng
        setTimeout(function() {
            window.location.href = "{{ route('login') }}";
        }, 1000);  // Chuyển hướng sau 1 giây
    1</script>
    @endif
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                <h2 class="text-5xl font-semibold text-white text-center mb-8">Login</h2>
                
                <!-- Username Field -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-200">
                        Email
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required
                        class="w-full px-4 py-3 rounded-lg bg-white/10 border border-gray-300/50 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500"
                        placeholder="Enter your email"
                    >
                </div>

                <!-- Password Field -->
                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-gray-200">
                        Password
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required
                        class="w-full px-4 py-3 rounded-lg bg-white/10 border border-gray-300/50 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500"
                        placeholder="Enter your password"
                    >
                </div>

                <!-- Forgot Password Link -->
                <div class="text-right">
                    <a href="{{ route('password.request') }}" class="text-sm text-gray-200 hover:text-teal-400">
                        Forgot Password?
                    </a>
                </div>

                <!-- Login Button -->
                <button 
                    type="submit" 
                    class="w-full py-3 px-4 bg-teal-400 hover:bg-teal-500 text-white font-medium rounded-lg transition duration-200"
                >
                    LOGIN
                </button>

                <!-- Register Link -->
                <div class="text-center text-gray-200 text-sm">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="text-teal-400 hover:text-teal-300">Register Here</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
