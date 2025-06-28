<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Mahasiswa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-gray-100 font-sans">
    <main class="min-h-screen">
        @yield('content')
    </main>
</body>
</html>
