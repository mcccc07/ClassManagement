<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard | LVCC</title>
    <script>
        const theme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', theme);
        if (theme === 'dark') document.documentElement.classList.add('dark');
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white dark:bg-blue-900 min-h-screen">

    <nav class="bg-blue-800 text-white shadow-lg p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold tracking-wide">LVCC STUDENT PORTAL</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-blue-600 hover:bg-red-500 px-4 py-2 rounded transition-colors text-sm font-semibold">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <div class="container mx-auto py-10 px-4">
        <div class="max-w-4xl mx-auto">

            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Welcome back, {{ $student->name }}!</h2>
                <p class="text-gray-600 dark:text-blue-200">Here is your academic overview.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="md:col-span-1 bg-white dark:bg-blue-800 p-6 rounded-xl shadow-md border-t-4 border-blue-500">
                    <div class="flex flex-col items-center">
                        <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <span class="text-3xl font-bold text-blue-600">{{ substr($student->name, 0, 1) }}</span>
                        </div>
                        <h3 class="text-xl font-bold dark:text-white text-center">{{ $student->name }}</h3>
                        <p class="text-sm text-gray-500 dark:text-blue-300 mb-4">{{ $student->email }}</p>

                        <div class="w-full border-t dark:border-blue-700 pt-4 mt-2">
                            <div class="flex justify-between text-sm py-1">
                                <span class="text-gray-500 dark:text-blue-300">Course:</span>
                                <span class="font-bold dark:text-white">{{ $student->course }}</span>
                            </div>
                            <div class="flex justify-between text-sm py-1">
                                <span class="text-gray-500 dark:text-blue-300">Year Level:</span>
                                <span class="font-bold dark:text-white">{{ $student->yearlvl }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2 space-y-6">
                    <div class="bg-white dark:bg-blue-800 p-6 rounded-xl shadow-md">
                        <h3 class="text-lg font-bold mb-4 dark:text-white">Recent Announcements</h3>
                        <div class="space-y-4">
                            <div class="p-4 bg-yellow-50 dark:bg-blue-700 rounded-lg border-l-4 border-yellow-400">
                                <p class="text-sm font-bold text-yellow-800 dark:text-yellow-200">Midterm Exams</p>
                                <p class="text-xs text-yellow-700 dark:text-blue-100">Schedule starts on March 15, 2026. Please settle your accounts.</p>
                            </div>
                            <div class="p-4 bg-green-50 dark:bg-blue-700 rounded-lg border-l-4 border-green-400">
                                <p class="text-sm font-bold text-green-800 dark:text-green-200">Library Hours</p>
                                <p class="text-xs text-green-700 dark:text-blue-100">The library is now open until 8:00 PM for all {{ $student->course }} students.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>