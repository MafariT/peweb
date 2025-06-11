<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Razaka Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen">
    <!-- Main Content Full Width -->
    <main class="p-8 max-w-7xl mx-auto">
        @yield('content')
    </main>
</body>

</html>