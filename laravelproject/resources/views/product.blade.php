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

    <!-- Product Page -->
    <section class="py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-pink-500">Our Collection</h1>
            <p class="mt-4 text-gray-700">Discover our range of curated beauty products.</p>

            <!-- Product Grid -->
            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <!-- Product 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="images/p1.jpg" alt="Glow Serum" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold">Glow Serum</h4>
                        <p class="mt-2 text-pink-500 font-bold">$29.99</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Add to Cart
                        </button>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Buy Now
                        </button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="images/p2.jpg" alt="Hydrating Mist" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold">Hydrating Mist</h4>
                        <p class="mt-2 text-pink-500 font-bold">$19.99</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Add to Cart
                        </button>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Buy Now
                        </button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="images/p3.jpg" alt="Nourishing Oil" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold">Nourishing Oil</h4>
                        <p class="mt-2 text-pink-500 font-bold">$24.99</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Add to Cart
                        </button>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Buy Now
                        </button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="images/p4.jpg" alt="Moisturizing Cream" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold">Moisturizing Cream</h4>
                        <p class="mt-2 text-pink-500 font-bold">$34.99</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Add to Cart
                        </button>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Buy Now
                        </button>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="images/p5.jpg" alt="Lip Gloss" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold">Lip Gloss</h4>
                        <p class="mt-2 text-pink-500 font-bold">$14.99</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Add to Cart
                        </button>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Buy Now
                        </button>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="images/p6.jpg" alt="Eyeshadow Palette" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold">Eyeshadow Palette</h4>
                        <p class="mt-2 text-pink-500 font-bold">$39.99</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Add to Cart
                        </button>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Buy Now
                        </button>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="images/p7.jpg" alt="Face Mask" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold">Face Mask</h4>
                        <p class="mt-2 text-pink-500 font-bold">$12.99</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Add to Cart
                        </button>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Buy Now
                        </button>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="images/p8.jpg" alt="Blush Stick" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold">Blush Stick</h4>
                        <p class="mt-2 text-pink-500 font-bold">$18.99</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Add to Cart
                        </button>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Buy Now
                        </button>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="images/p9.jpg" alt="Highlighter" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold">Highlighter</h4>
                        <p class="mt-2 text-pink-500 font-bold">$22.99</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Add to Cart
                        </button>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
