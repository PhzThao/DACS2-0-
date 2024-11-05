<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center relative overflow-hidden">
    <img src="{{ mix('images/Chưa có tên (474 x 316 px) 1.png') }}" alt="Cute pets background" class="absolute inset-0 w-full h-full object-cover">
    
    <div class="relative z-10 w-full max-w-md px-4">
        <!-- Login Form Card -->
        <div class="bg-black/30 backdrop-blur-sm p-8 rounded-3xl shadow-xl">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="space-y-6">
                <h2 class="text-5xl font-semibold text-white text-center mb-8">Login</h2>
                
                <!-- Username Field -->
                <div class="space-y-2">
                    <label for="username" class="block text-sm font-medium text-gray-200">
                        Username
                    </label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        required
                        class="w-full px-4 py-3 rounded-lg bg-white/10 border border-gray-300/50 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500"
                        placeholder="Enter your username"
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
                    <a href="#" class="text-sm text-gray-200 hover:text-teal-400">
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

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        
        // Add your authentication logic here
        // For example:
        if ($username && $password) {
            // Verify credentials
            // Redirect on success
            // Show error on failure
        }
    }
    ?>
</body>
</html>