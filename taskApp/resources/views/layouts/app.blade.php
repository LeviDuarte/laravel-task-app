<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Task App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class='bg-[#088F8F] font-mono'>
    <!-- Navbar Content-->
    <nav class="bg-white shadow p-4">
        <h1 class="text-xl font-bold flex items-center justify-center font-serif text-6xl text-[#097969]">My Task App</h1>
    </nav>

    <main class="p-4 bg-[#088F8F]">
         <main class="p-4 bg-[#008080]">
        @yield('content')
    </main>
</body>
</html>