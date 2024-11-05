<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Register Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center relative overflow-hidden">
    <img src="{{ mix('images/Chưa có tên (474 x 316 px) 1.png') }}" alt="Cute pets background" class="absolute inset-0 w-full h-full object-cover">
    
    <div class="relative z-10 w-full max-w-md px-4">
        <!-- Register Form Card -->
        <div class="bg-black/30 backdrop-blur-sm p-6 rounded-3xl shadow-xl">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="space-y-3">
                <h2 class="text-3xl font-semibold text-white text-center mb-4">Register</h2>
                
                <!-- Username Field -->
                <div class="space-y-1">
                    <label for="username" class="block text-sm font-medium text-gray-200">
                        Username
                    </label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        required
                        class="w-full px-3 py-2 rounded-lg bg-white/10 border border-gray-300/50 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500"
                        placeholder="Enter your username"
                    >
                </div>

                <!-- Email/Phone Field -->
                <div class="space-y-1">
                    <label for="email_phone" class="block text-sm font-medium text-gray-200">
                        Email/Phone
                    </label>
                    <input 
                        type="text" 
                        id="email_phone" 
                        name="email_phone" 
                        required
                        class="w-full px-3 py-2 rounded-lg bg-white/10 border border-gray-300/50 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500"
                        placeholder="Enter your email/phone"
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
                    <label for="confirm_password" class="block text-sm font-medium text-gray-200">
                        Confirm password
                    </label>
                    <input 
                        type="password" 
                        id="confirm_password" 
                        name="confirm_password" 
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

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'] ?? '';
        $email_phone = $_POST['email_phone'] ?? '';
        $password = $_POST['password'] ?? '';
        $confirm_password = $_POST['confirm_password'] ?? '';
        
        // Add your registration logic here
        // For example:
        if ($username && $email_phone && $password && $confirm_password) {
            if ($password === $confirm_password) {
                // Process registration
                // Hash password
                // Save to database
                // Redirect to login
            } else {
                // Show password mismatch error
            }
        }
    }
    ?>
</body>
</html>