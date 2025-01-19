<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-50 to-pink-100 text-gray-800">
    <!-- Include Navbar -->
    @include('navbar')

    <!-- Product Search, Filters, and Sorting -->
    <section class="py-8">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Search Bar -->
            <div class="flex items-center w-1/3 bg-white rounded-lg shadow-md">
                <input type="text" class="w-full p-2 rounded-l-lg focus:outline-none" placeholder="Search products...">
                <button class="bg-pink-500 text-white py-2 px-4 rounded-r-lg hover:bg-pink-600">
                    Search
                </button>
            </div>

            <!-- Sort, Categories, and Cart -->
            <div class="flex items-center space-x-4">
                <!-- Sort by Price -->
                <div class="relative w-48">
                    <select class="block w-full p-3 text-lg bg-white border rounded-lg shadow-md focus:outline-none">
                        <option disabled selected>Sort by Price</option>
                        <option value="high-to-low">High to Low</option>
                        <option value="low-to-high">Low to High</option>
                    </select>
                </div>

                <!-- Categories -->
                <div class="relative w-48">
                    <select class="block w-full p-3 text-lg bg-white border rounded-lg shadow-md focus:outline-none">
                        <option disabled selected>Categories</option>
                        <option value="haircare">Haircare</option>
                        <option value="makeup">Makeup</option>
                        <option value="skincare">Skincare</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    

            <!-- Product Grid -->
            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach($products as $product)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="products/{{$product->image}}" alt="Glow Serum" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold">{{ $product->title }}</h4>
                        <p class="mt-2 text-pink-500 font-bold">${{ $product->price }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</body>
</html>
