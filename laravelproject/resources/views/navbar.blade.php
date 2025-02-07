<!-- Navbar -->
<header class="bg-white shadow-md">
    <div class="container mx-auto flex items-center justify-between p-4">
        <!-- Logo and Brand Name -->
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/logo.png') }}" alt="Beauty Bliss Logo" class="h-10">
            <h1 class="text-2xl font-bold text-pink-500">Beauty Bliss</h1>
        </div>

        <!-- Navigation Links -->
        <nav>
            <ul class="flex space-x-6">
                <!-- Home link -->
                <li><a href="{{ url('/') }}" class="hover:text-pink-500">Home</a></li>
                <!-- Products link -->
                <li><a href="{{ route('product') }}" class="text-gray-700">Products</a></li>
                <!-- About Us link -->
                <li><a href="{{ route('aboutus.index') }}" class="text-gray-700">About Us</a></li>
                <a href="{{ route('contact') }}" class="text-gray-700">Contact Us</a>
                

                @if (Auth::check())
                <!-- <a href="#" class="text-gray-600 hover:text-blue-500 font-medium">View Cart</a>
                <a href="#" class="text-gray-600 hover:text-blue-500 font-medium">View Order</a> -->
                <li><a href="{{ route('account.logout')}}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-indigo-700">Logout</a></li>
                @else
                <li><a href="{{ route('login') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-indigo-700">Login</a></li>
                <li><a href="{{ route('register') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-indigo-700">Register</a></li>
                @endif
            </ul>
        </nav>

        <div class="relative flex items-center">
    <a href="{{ url('myorders') }}"class="px-4 py-2 bg-pink-500 text-white rounded hover:bg-indigo-700">
        
        
       My Orders
    </a>
</div>

       
      <!-- Cart -->
      <div class="relative flex items-center">
    <a href="{{ url('mycart') }}">
        <img src="images/truck.svg" alt="Cart" class="w-12 h-12 rounded-full cursor-pointer">
        <div class="absolute top-0 right-0 bg-red-500"></div>

        <p class="mt-2 text-center">Cart</p>
    </a>
</div>

        </div>
</header>