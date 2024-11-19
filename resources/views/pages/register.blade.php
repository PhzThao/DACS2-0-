<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Register Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center relative overflow-hidden">
    <img src="{{ asset('images/Chưa có tên (474 x 316 px) 1.png') }}" alt="Cute pets background" class="absolute inset-0 w-full h-full object-cover">
    
    <div class="relative z-10 w-full max-w-md px-4">
        <!-- Register Form Card -->
        @if ($errors->any())
    <script type="text/javascript">
        alert("Có lỗi xảy ra trong quá trình đăng ký. Vui lòng kiểm tra lại các trường: \n\n{{ implode('\n', $errors->all()) }}");
    </script>
@endif
        <div class="bg-black/30 backdrop-blur-sm p-6 rounded-3xl shadow-xl">
            <form method="POST" action="{{ route('register') }}" class="space-y-3">
                @csrf
                <h2 class="text-3xl font-semibold text-white text-center mb-4">Register</h2>
                
                <!-- Username Field -->
                <div class="space-y-1">
                    <label for="name" class="block text-sm font-medium text-gray-200">
                        Name
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        required
                        class="w-full px-3 py-2 rounded-lg bg-white/10 border border-gray-300/50 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500"
                        placeholder="Enter your name"
                    >
                </div>

                <!-- Email Field -->
                <div class="space-y-1">
                    <label for="email" class="block text-sm font-medium text-gray-200">
                        Email
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required
                        class="w-full px-3 py-2 rounded-lg bg-white/10 border border-gray-300/50 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500"
                        placeholder="Enter your email"
                    >
                </div>

                <!-- Password Field -->
                <div class="space-y-1">
                    <label for="password" class="block text-sm font-medium text-gray-200">
                        Password
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required
                        class="w-full px-3 py-2 rounded-lg bg-white/10 border border-gray-300/50 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500"
                        placeholder="Enter your password"
                    >
                </div>

                <!-- Confirm Password Field -->
                <div class="space-y-1">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-200">
                        Confirm Password
                    </label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        required
                        class="w-full px-3 py-2 rounded-lg bg-white/10 border border-gray-300/50 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500"
                        placeholder="Confirm password"
                    >
                </div>

                <!-- Register Button -->
                <button 
                    type="submit" 
                    class="w-full py-2 px-4 bg-teal-400 hover:bg-teal-500 text-white font-medium rounded-lg transition duration-200 mt-4"
                >
                    REGISTER
                </button>

                <!-- Login Link -->
                <div class="text-center text-gray-200 text-sm mt-2">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-teal-400 hover:text-teal-300">Login Here</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
