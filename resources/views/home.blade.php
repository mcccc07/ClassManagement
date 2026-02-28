<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>LVCM</title>
</head>

<body class="h-full overflow-hidden">
    <header>
        <div class="grid grid-cols-2 items-center">
            <img src="images/LVlogo.png" alt="Lvcm Logo" class="w-18 h-auto ml-5 mt-1">
            <div class="mt-1 mr-12">
                <nav class="flex gap-8 justify-end items-center space-x-4 mr-5">
                    <a href="#" class="text-gray-700 hover:text-blue-800 font-bold">Home</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800 font-bold">About</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800 font-bold">Contact</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800 font-bold">Courses</a>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 w-28 rounded-lg">Login</button>
                </nav>
            </div>
        </div>
    </header>
    <main class="relative bg-[url('/public/images/LVImage.png')] h-screen bg-cover bg-center">
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 flex items-center justify-center h-full">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4 text-white">Welcome to LVCM</h1>
                <p class="text-lg text-gray-300 mb-8">Your gateway to quality education and career development.</p>
                <button>
                    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Get Started</a>
                </button>
            </div>
        </div>
    </main>
</body>

</html>