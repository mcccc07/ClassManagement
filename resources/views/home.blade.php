<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>LVCM</title>
</head>

<body>
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
</body>

</html>