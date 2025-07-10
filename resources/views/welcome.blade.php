<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- If you're using Laravel Vite -->
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="min-h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Our Website!</h1>
            <p class="text-lg mb-6">We are glad to have you here. Please explore our site.</p>

            @auth
                <p class="mb-4">Welcome back, {{ auth()->user()->name }}!</p>
                <a href="{{ route('dashboard') }}" class="px-6 py-2 bg-blue-500 text-white rounded-lg">Go to Dashboard</a>
            @else
                <div class="mt-6">
                    <a href="{{ route('login') }}" class="px-6 py-2 bg-blue-500 text-white rounded-lg">Login</a>
                    <a href="{{ route('register') }}" class="px-6 py-2 bg-green-500 text-white rounded-lg ml-4">Register</a>
                </div>
            @endauth
        </div>
    </div>

</body>
</html>
