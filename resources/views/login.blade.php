<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login</title>
</head>

<body class="bg-gray-500">
    <div class="flex items-center justify-center h-screen bg-gray-100">
        <div class="flex justify-center items-stretch bg-white rounded-lg shadow-md overflow-hidden">

            <div class="relative w-80 h-full min-h-[500px] overflow-hidden rounded-lg hidden md:block">
                <img src="images/LVImage.png" alt="LVImage" class="absolute inset-0 w-full h-full object-cover z-0">
                <div class="absolute inset-0 bg-black/50 z-10"></div>
                <div class="absolute inset-0 z-20 flex items-center justify-center">
                    <img src="images/LVlogo.png" alt="Lvcm Logo" class="w-32 h-auto">
                </div>
            </div>

            <div class="w-full max-w-md p-12">
                <h2 class="text-2xl font-bold mb-6 text-center">Login to Your Account</h2>
                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" required class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex items-center gap-8">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-900">Remember Me</label>
                        </div>
                        <div class="text-sm">
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Forgot your password?</a>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
                    </div>
                </form>
                <p class="mt-6 text-center text-sm text-gray-600">Don't have an account? <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Sign Up</a></p>
            </div>

        </div>
    </div>
</body>

</html>