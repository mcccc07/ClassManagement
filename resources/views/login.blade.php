<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        const theme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', theme);
        if (theme === 'dark') document.documentElement.classList.add('dark');
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login</title>
</head>

<body class="bg-gray-100 dark:bg-blue-900 dark:text-white">
    <div class="flex items-center justify-center h-screen">

        <a href="{{ route('home') }}" class="absolute top-6 left-6 flex items-center gap-2 text-gray-500 dark:text-gray-300 hover:text-blue-600 transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 12H7M7 12l4-4M7 12l4 4" />
            </svg>
            <span class="text-md font-medium">Back to Home</span>
        </a>

        <div class="flex justify-center items-stretch bg-white dark:bg-blue-800 rounded-lg shadow-xl overflow-hidden">

            <div class="relative w-80 h-full min-h-125 overflow-hidden rounded-lg hidden md:block">
                <img src="{{ asset('images/LVImage.png') }}" alt="LVImage" class="absolute inset-0 w-full h-full object-cover z-0">
                <div class="absolute inset-0 bg-black/50 z-10"></div>
                <div class="absolute inset-0 z-20 flex items-center justify-center">
                    <img src="{{ asset('images/LVlogo.png') }}" alt="Lvcm Logo" class="w-32 h-auto">
                </div>
            </div>

            <div class="w-full max-w-md p-12">
                <h2 class="text-2xl font-bold mb-6 text-center dark:text-white">Login to Your Account</h2>

                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 dark:bg-red-900 dark:border-red-700 dark:text-red-200">
                    @foreach ($errors->all() as $error)
                    <p class="text-sm">{{ $error }}</p>
                    @endforeach
                </div>
                @endif

                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email Address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="yourname@student.laverdad.edu.ph"
                            required
                            class="w-full px-4 py-2 mt-1 border border-blue-600 rounded-md dark:bg-gray-700 dark:text-white dark:border-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Password must contain 8-20 characters"
                            required
                            class="w-full px-4 py-2 mt-1 border border-blue-600 rounded-md dark:bg-gray-700 dark:text-white dark:border-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-900 dark:text-gray-300">Remember Me</label>
                        </div>
                        <div class="text-sm">
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">Forgot your password?</a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="w-full font-bold bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-600 dark:hover:bg-blue-400">Login</button>
                    </div>
                </form>

                <p class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400">Don't have an account? <a href="#" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">Sign Up</a></p>
            </div>

        </div>
    </div>
</body>

</html>