<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Bliss - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">
@include('navbar')

    <!-- Hero Section -->
    <section class="bg-pink-50">
        <div class="container mx-auto flex flex-col items-center text-center p-8 md:flex-row md:text-left md:space-x-8">
            <div class="md:w-1/2">
                <h2 class="text-4xl font-bold text-pink-500">Enhance Your Natural Beauty</h2>
                <p class="mt-4 text-gray-700">Discover a curated selection of high-quality beauty products crafted to make you feel confident and radiant.</p>
                <a href="#products" class="mt-6 inline-block bg-pink-500 text-white px-6 py-3 rounded hover:bg-pink-600">Shop Collection</a>
            </div>
            <div class="mt-8 md:mt-0 md:w-1/2">
                <img src="{{ asset('images/image.jpg') }}" alt="Beauty Products" class="rounded-lg shadow-lg h-80">
            </div>
        </div>
    </section>

<!-- Featured Products -->
<section id="products" class="py-16">
    <div class="container mx-auto text-center">
        <h3 class="text-3xl font-bold text-pink-500">Our Bestsellers</h3>
        <p class="mt-4 text-gray-700">Hand-picked products that our customers love.</p>

        <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Product Card 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/p1.jpg') }}" alt="Product 1" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Product Name 1</h4>
                    <p class="mt-2 text-gray-600">$29.99</p>
                    <div class="mt-4 flex justify-between">
                        <a href="#" class="block bg-pink-500 text-white text-center py-2 px-4 rounded hover:bg-pink-600">Add to Cart</a>
                        <a href="#" class="block bg-purple-500 text-white text-center py-2 px-4 rounded hover:bg-purple-600">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/p2.jpg') }}" alt="Product 2" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Product Name 2</h4>
                    <p class="mt-2 text-gray-600">$39.99</p>
                    <div class="mt-4 flex justify-between">
                        <a href="#" class="block bg-pink-500 text-white text-center py-2 px-4 rounded hover:bg-pink-600">Add to Cart</a>
                        <a href="#" class="block bg-purple-500 text-white text-center py-2 px-4 rounded hover:bg-purple-600">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/p3.jpg') }}" alt="Product 3" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Product Name 3</h4>
                    <p class="mt-2 text-gray-600">$19.99</p>
                    <div class="mt-4 flex justify-between">
                        <a href="#" class="block bg-pink-500 text-white text-center py-2 px-4 rounded hover:bg-pink-600">Add to Cart</a>
                        <a href="#" class="block bg-purple-500 text-white text-center py-2 px-4 rounded hover:bg-purple-600">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/p4.jpg') }}" alt="Product 4" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Product Name 4</h4>
                    <p class="mt-2 text-gray-600">$49.99</p>
                    <div class="mt-4 flex justify-between">
                        <a href="#" class="block bg-pink-500 text-white text-center py-2 px-4 rounded hover:bg-pink-600">Add to Cart</a>
                        <a href="#" class="block bg-purple-500 text-white text-center py-2 px-4 rounded hover:bg-purple-600">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/p5.jpg') }}" alt="Product 5" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Product Name 5</h4>
                    <p class="mt-2 text-gray-600">$24.99</p>
                    <div class="mt-4 flex justify-between">
                        <a href="#" class="block bg-pink-500 text-white text-center py-2 px-4 rounded hover:bg-pink-600">Add to Cart</a>
                        <a href="#" class="block bg-purple-500 text-white text-center py-2 px-4 rounded hover:bg-purple-600">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/p6.jpg') }}" alt="Product 6" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Product Name 6</h4>
                    <p class="mt-2 text-gray-600">$34.99</p>
                    <div class="mt-4 flex justify-between">
                        <a href="#" class="block bg-pink-500 text-white text-center py-2 px-4 rounded hover:bg-pink-600">Add to Cart</a>
                        <a href="#" class="block bg-purple-500 text-white text-center py-2 px-4 rounded hover:bg-purple-600">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/p7.jpg') }}" alt="Product 7" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Product Name 7</h4>
                    <p class="mt-2 text-gray-600">$44.99</p>
                    <div class="mt-4 flex justify-between">
                        <a href="#" class="block bg-pink-500 text-white text-center py-2 px-4 rounded hover:bg-pink-600">Add to Cart</a>
                        <a href="#" class="block bg-purple-500 text-white text-center py-2 px-4 rounded hover:bg-purple-600">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/p8.jpg') }}" alt="Product 8" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Product Name 8</h4>
                    <p class="mt-2 text-gray-600">$54.99</p>
                    <div class="mt-4 flex justify-between">
                        <a href="#" class="block bg-pink-500 text-white text-center py-2 px-4 rounded hover:bg-pink-600">Add to Cart</a>
                        <a href="#" class="block bg-purple-500 text-white text-center py-2 px-4 rounded hover:bg-purple-600">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')

</body>
</html>
