<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard | La Verdad</title>
  <script>
    const theme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', theme);
    if (theme === 'dark') document.documentElement.classList.add('dark');
  </script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex">

  <aside class="w-64 min-h-screen bg-blue-900 text-white p-6">
    <h2 class="text-2xl font-bold mb-8">LVCC Admin</h2>
    <nav class="space-y-4">
      <a href="#" class="block py-2.5 px-4 rounded bg-blue-800">Dashboard</a>
      <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700 transition">Students</a>
      <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700 transition">Courses</a>
      <form action="{{ route('logout') }}" method="POST" class="pt-10">
        @csrf
        <button type="submit" class="text-red-300 hover:text-red-100 text-sm">Logout</button>
      </form>
    </nav>
  </aside>

  <main class="flex-1 p-10">
    <header class="flex justify-between items-center mb-8">
      <h1 class="text-3xl font-semibold text-gray-800">System Overview</h1>
      <div class="text-gray-600">Welcome, {{ Auth::guard('admin')->user()->name }}</div>
    </header>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
      <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
        <div class="text-gray-500 text-sm">Total Students</div>
        <div class="text-3xl font-bold text-gray-800">{{ $studentCount }}</div>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-green-500">
        <div class="text-gray-500 text-sm">Active Courses</div>
        <div class="text-3xl font-bold text-gray-800">3</div>
      </div>
    </div>

    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
      <div class="p-6 border-b">
        <h3 class="font-bold text-gray-700">Recently Enrolled Students</h3>
      </div>
      <table class="w-full text-left border-collapse">
        <thead>
          <tr class="bg-gray-50 text-gray-600 text-sm">
            <th class="p-4 border-b">Name</th>
            <th class="p-4 border-b">Email</th>
            <th class="p-4 border-b">Course</th>
            <th class="p-4 border-b">Year Level</th>
          </tr>
        </thead>
        <tbody>
          @foreach($students as $student)
          <tr class="hover:bg-gray-50 text-gray-700">
            <td class="p-4 border-b">{{ $student->name }}</td>
            <td class="p-4 border-b text-sm">{{ $student->email }}</td>
            <td class="p-4 border-b text-sm font-semibold">{{ $student->course }}</td>
            <td class="p-4 border-b text-sm">{{ $student->yearlvl }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>

</body>

</html>