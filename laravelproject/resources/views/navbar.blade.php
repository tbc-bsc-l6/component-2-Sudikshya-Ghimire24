    <!-- Navbar -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex items-center justify-between p-4">
            <h1 class="text-2xl font-bold text-pink-500">Beauty Bliss</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="hover:text-pink-500">Home</a></li>
                    <li><a href="#products" class="hover:text-pink-500">Products</a></li>
                    <li><a href="{{url('aboutus')}}" class="hover:text-pink-500">About</a></li>
                    <li><a href="#contact" class="hover:text-pink-500">Contact</a></li>
                    <li><a href="{{ route('login') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-indigo-700">Login</a></li>
                    <li><a href="{{ route('register') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-indigo-700">Register</a></li>
                </ul>
            </nav>
            <a href="#" class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600">Shop Now</a>
        </div>
    </header>