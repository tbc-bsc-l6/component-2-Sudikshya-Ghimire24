<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white p-6">
            <h2 class="text-xl font-bold mb-6">Admin Dashboard</h2>
            <ul>
                <li><a href="{{ route('admin.dashboard') }}" class="block py-2">Dashboard</a></li>
                <li><a href="#" class="block py-2">Users</a></li>
                <li><a href="#" class="block py-2">Settings</a></li>
                <!-- Add more links here as needed -->
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            @yield('content')
        </div>
    </div>
</body>
</html>
