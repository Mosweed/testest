<!DOCTYPE html>
<html lang="nl" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-gray-200 min-h-screen flex">

    @include('layouts.admin_slidebar')

    <div class="flex-1 p-6">

        @if(session('success'))
        <div class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 p-3 rounded mb-4">
            {{ session('success') }}
        </div>


        @endif

        @if ($errors->any())
        <x-form.error />
        @endif
        {{ $slot }}
    </div>

</body>
</html>
