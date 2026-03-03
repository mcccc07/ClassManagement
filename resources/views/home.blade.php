<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>LVCM</title>
</head>

<body class="bg-white text-black dark:bg-blue-900 dark:text-white">
    <header>
        <div class="bg-white dark:bg-blue-900 shadow-md">
            <div class="grid grid-cols-2 items-center">
                <img src="images/LVlogo.png" alt="Lvcm Logo" class="w-18 h-auto ml-5 mt-1">
                <div class="mt-1 mr-12">
                    <nav class="flex gap-8 justify-end items-center space-x-4 mr-5">
                        <a href="#" class="text-gray-700 hover:text-blue-800 font-bold dark:text-white dark:hover:text-blue-300">Home</a>
                        <a href="#" class="text-gray-700 hover:text-blue-800 font-bold dark:text-white dark:hover:text-blue-300">About</a>
                        <a href="#" class="text-gray-700 hover:text-blue-800 font-bold dark:text-white dark:hover:text-blue-300">Contact</a>
                        <a href="#" class="text-gray-700 hover:text-blue-800 font-bold dark:text-white dark:hover:text-blue-300">Courses</a>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 w-28 rounded-lg">
                            <a href="{{ route('login') }}">Login</a>
                        </button>
                        <div class="flex items-center gap-4">
                            <svg class="h-4 w-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>

                            <label class="relative inline-flex cursor-pointer items-center">
                                <input type="checkbox" class="peer sr-only theme-controller" />

                                <div class="h-6 w-10 rounded-full bg-gray-300 peer-checked:bg-blue-500 transition-colors"></div>

                                <div class="absolute left-1 top-1 h-4 w-4 rounded-full bg-white transition-transform peer-checked:translate-x-4"></div>
                            </label>

                            <svg class="h-4 w-6 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <main class="relative bg-[url('/public/images/LVImage.png')] h-screen bg-cover bg-center">
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 flex justify-center h-full ">
            <div class="mt-28 text-center">
                <div class="justify-center align-center">
                    <img src="images/LVlogo.png" alt="LVCM Logo" class="w-24 h-auto mb-4 mx-auto">
                </div>
                <h1 class="text-7xl font-bold mb-4 text-white">Welcome to LVCM</h1>
                <div class="mx-auto w-2/4">
                    <p class="text-lg text-gray-300 mb-8">LVCM is a web-based platform for managing and delivering educational content. This allows students and educators to access and share learning materials efficiently.</p>
                </div>
                <button>
                    <a href="#about" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg text-xl">Learn More</a>
                </button>
            </div>
        </div>

        <section id="about">
            <div>
                <p>About</p>

            </div>
        </section>
    </main>
    <script>
        const toggle = document.querySelector('.theme-controller');
        const htmlElement = document.documentElement; // This is the <html> tag

        toggle.addEventListener('change', function() {
            if (this.checked) {
                // Switch to dark theme
                htmlElement.setAttribute('data-theme', 'dark');
            } else {
                // Switch to light theme
                htmlElement.setAttribute('data-theme', 'light');
            }
        });
    </script>
</body>

</html>