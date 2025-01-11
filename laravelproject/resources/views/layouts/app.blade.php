<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Build your next project with Laravel and Tailwind CSS.">
    <title>Home Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 dark:bg-gray-900">

    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="/" class="text-xl font-bold text-indigo-600 dark:text-indigo-400">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 inline-block">
                        MyApp
                    </a>
                </div>
                <div class="flex items-center space-x-8 ml-auto">
                    <a href="/" class="text-gray-800 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400">Home</a>
                    <a href="#about" class="text-gray-800 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400">About</a>
                    <a href="#" class="text-gray-800 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400">Contact</a>
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-600">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-gray-200 dark:bg-gray-700">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center py-20">
            <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white">Welcome to MyApp</h1>
            <p class="mt-4 text-gray-600 dark:text-gray-300">Build your next project with Laravel and Tailwind CSS.</p>
            <a href="{{ route('register') }}" class="mt-6 inline-block px-6 py-3 bg-indigo-600 text-white text-lg font-semibold rounded hover:bg-indigo-700">
                Get Started
            </a>
        </div>
    </header>

    <!-- About Us Section -->
    <section id="about" class="py-12 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div class="w-full md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white">About Us</h2>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">We are passionate about creating high-quality projects with Laravel and Tailwind CSS. Our mission is to empower developers and teams to build fast, scalable, and beautiful applications.</p>
                </div>
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('images/image1.png') }}" alt="About Us Image" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Main Products Section -->
    <section class="py-12 bg-gray-100 dark:bg-gray-700">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white text-center">Our Main Products</h2>
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Product Images -->
                @for ($i = 1; $i <= 8; $i++)
                    <div class="text-center">
                        <img src="{{ asset("images/product$i.png") }}" alt="Product Image" class="w-full h-48 object-cover rounded-lg">
                        <p class="mt-2 text-gray-600 dark:text-gray-400">Product {{ $i }}</p>
                    </div>
                @endfor
            </div>
            <div class="text-center mt-8">
                <a href="#" class="px-6 py-3 bg-indigo-600 text-white text-lg font-semibold rounded hover:bg-indigo-700">More Products</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm text-gray-400">© 2025 MyApp. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
