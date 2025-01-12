<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center text-blue-500">Welcome to Laravel with Tailwind</h1>
        <p class="text-center mt-2 text-gray-700">Authentication is ready to use!</p>
        
        <!-- Navigation to Admin Dashboard -->
        <div class="text-center mt-6">
            <a href="{{ route('admin.dashboard') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition-all">
                Go to Admin Dashboard
            </a>
        </div>
    </div>
</body>
</html>
