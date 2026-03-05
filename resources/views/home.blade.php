<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        const theme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', theme);
    </script>

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
                        <a href="#about" class="text-gray-700 hover:text-blue-800 font-bold dark:text-white dark:hover:text-blue-300">About</a>
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

    <main class="relative bg-[url('/public/images/LVImage.png')] min-h-screen bg-cover bg-center overflow-hidden">
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 flex justify-center items-center min-h-screen pb-8">
            <div class="text-center">
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

        <section id="about" class="relative z-10 bg-white dark:bg-blue-900 px-10 py-6">
            <div class="flex justify-center">
                <p class="text-5xl font-bold text-blue-500 dark:text-white mt-4 mb-8">About</p>
            </div>
            <div class="grid grid-cols-3 gap-4 mr-4 ml-4 mt-4">
                <section class="bg-blue-700 dark:bg-blue-600 rounded-lg text-center">
                    <h2 class="text-2xl font-bold text-white mt-4 mb-2">Our Mission</h2>
                    <p class="text-md text-white px-2 py-8 m-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quos hic ipsum quod quia. Adipisci exercitationem accusamus dolor animi optio non accusantium magni, ex omnis deleniti. Perferendis consequuntur tempore voluptatem?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam aliquid ullam praesentium sit fuga, ab distinctio fugiat doloremque, quidem cum voluptates sequi aliquam facere tempora molestias ipsum beatae aut vitae!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse voluptas, fugit eligendi quaerat eos natus? Repellendus odio eius ratione hic molestias quia consequuntur voluptatem soluta praesentium? Quae, cum ipsa? Cum!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque omnis nisi saepe aliquid. Quisquam tempora quos a optio deserunt nemo exercitationem, alias odit delectus veritatis accusamus ut, blanditiis ipsa? Tenetur?
                    </p>
                </section>
                <section class="bg-blue-700 dark:bg-blue-600 rounded-lg text-center">
                    <h2 class="text-2xl font-bold text-white mt-4 mb-2">Our Vision</h2>
                    <p class="text-md text-white px-4 py-8 m-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quos hic ipsum quod quia. Adipisci exercitationem accusamus dolor animi optio non accusantium magni, ex omnis deleniti. Perferendis consequuntur tempore voluptatem?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam aliquid ullam praesentium sit fuga, ab distinctio fugiat doloremque, quidem cum voluptates sequi aliquam facere tempora molestias ipsum beatae aut vitae!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse voluptas, fugit eligendi quaerat eos natus? Repellendus odio eius ratione hic molestias quia consequuntur voluptatem soluta praesentium? Quae, cum ipsa? Cum!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque omnis nisi saepe aliquid. Quisquam tempora quos a optio deserunt nemo exercitationem, alias odit delectus veritatis accusamus ut, blanditiis ipsa? Tenetur?</p>
                </section>
                <section class="bg-blue-700 dark:bg-blue-600 rounded-lg text-center">
                    <h2 class="text-2xl font-bold text-white mt-4 mb-2">Our Values</h2>
                    <p class="text-md text-white px-4 py-8 m-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quos hic ipsum quod quia. Adipisci exercitationem accusamus dolor animi optio non accusantium magni, ex omnis deleniti. Perferendis consequuntur tempore voluptatem?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam aliquid ullam praesentium sit fuga, ab distinctio fugiat doloremque, quidem cum voluptates sequi aliquam facere tempora molestias ipsum beatae aut vitae!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse voluptas, fugit eligendi quaerat eos natus? Repellendus odio eius ratione hic molestias quia consequuntur voluptatem soluta praesentium? Quae, cum ipsa? Cum!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque omnis nisi saepe aliquid. Quisquam tempora quos a optio deserunt nemo exercitationem, alias odit delectus veritatis accusamus ut, blanditiis ipsa? Tenetur?</p>
                </section>
            </div>
        </section>
    </main>
</body>

</html>