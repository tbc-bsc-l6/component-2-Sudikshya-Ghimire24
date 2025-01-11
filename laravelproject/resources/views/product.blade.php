<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-50 to-pink-100 text-gray-800">
@include('navbar')



<!-- Product Search and Filters -->
<section class="py-8">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Search Bar -->
        <div class="flex items-center w-1/3 bg-white rounded-lg shadow-md">
            <input type="text" class="w-full p-2 rounded-l-lg focus:outline-none" placeholder="Search products...">
            <button class="bg-pink-500 text-white py-2 px-4 rounded-r-lg hover:bg-pink-600">
                Search
            </button>
        </div>
        <!-- Search by Price -->
<div class="relative">
<button onclick="togglePriceSortOptions()" class="px-4 py-2 border rounded-md w-64 text-gray-500 flex items-center justify-between bg-white">
    <span>Search by Price</span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
</button>


    <!-- Price Sort Options -->
    <div id="priceSortOptions" class="absolute right-0 mt-2 w-40 bg-white border rounded-md shadow-md hidden">
        <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="sortByPrice('low-high')">Low to High</button>
        <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="sortByPrice('high-low')">High to Low</button>
    </div>
</div>

<!-- Categories -->
<div class="relative mt-4">
<button onclick="togglePriceSortOptions()" class="px-4 py-2 border rounded-md w-64 text-gray-500 flex items-center justify-between bg-white">
    <span>Categories</span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
</button>

    <!-- Category Options -->
    <div id="categoryOptions" class="absolute right-0 mt-2 w-40 bg-white border rounded-md shadow-md hidden">
        <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectCategory('makeup')">Makeup</button>
        <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectCategory('skincare')">Skincare</button>
        <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectCategory('beauty')">Beauty Products</button>
    </div>
</div>

<script>
    // Toggle the visibility of the price sort options
    function togglePriceSortOptions() {
        const options = document.getElementById('priceSortOptions');
        options.classList.toggle('hidden');
    }

    // Sort products by price
    function sortByPrice(order) {
        console.log('Sorting by price:', order);
        // Close the dropdown after selecting a sort option
        document.getElementById('priceSortOptions').classList.add('hidden');
    }

    // Toggle the visibility of the category options
    function toggleCategoryOptions() {
        const options = document.getElementById('categoryOptions');
        options.classList.toggle('hidden');
    }

    // Handle category selection
    function selectCategory(category) {
        console.log('Selected category:', category);
        // Close the dropdown after selecting a category
        document.getElementById('categoryOptions').classList.add('hidden');
    }
</script>


   </div>
    </div>
</section>

<!-- Search by Category Options (Hidden by default) -->
    <div id="categoryOptions" class="absolute left-0 mt-2 w-48 bg-white border border-gray-300 rounded-lg shadow-lg hidden">
        <input type="text" id="categorySearch" class="w-full py-2 px-4 text-gray-700 border-b border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="Search categories..." oninput="filterCategories()">
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-pink-100">Skin Care</a>
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-pink-100">Hair Care</a>
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-pink-100">Makeup</a>
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-pink-100">Fragrances</a>
    </div>
</div>


<!-- Product Page -->
<section class="py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold text-pink-500">Our Collection</h1>
        <p class="mt-4 text-gray-700">Discover our range of curated beauty products.</p>

        <!-- Product Grid -->
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <!-- Single Product -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product" class="w-full">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Glow Serum</h4>
                    <p class="mt-2 text-pink-500 font-bold">$29.99</p>
                    <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>
                </div>
            </div>

            <!-- Repeat 11 More Products -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product" class="w-full">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Hydrating Mist</h4>
                    <p class="mt-2 text-pink-500 font-bold">$19.99</p>
                    <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product" class="w-full">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Nourishing Oil</h4>
                    <p class="mt-2 text-pink-500 font-bold">$24.99</p>
                    <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product" class="w-full">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Moisturizing Cream</h4>
                    <p class="mt-2 text-pink-500 font-bold">$34.99</p>
                    <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product" class="w-full">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Lip Gloss</h4>
                    <p class="mt-2 text-pink-500 font-bold">$14.99</p>
                    <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product" class="w-full">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Eyeshadow Palette</h4>
                    <p class="mt-2 text-pink-500 font-bold">$39.99</p>
                    <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product" class="w-full">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Face Mask</h4>
                    <p class="mt-2 text-pink-500 font-bold">$12.99</p>
                    <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product" class="w-full">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Blush Stick</h4>
                    <p class="mt-2 text-pink-500 font-bold">$18.99</p>
                    <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product" class="w-full">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Highlighter</h4>
                    <p class="mt-2 text-pink-500 font-bold">$22.99</p>
                    <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product" class="w-full">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Eyeliner Pen</h4>
                    <p class="mt-2 text-pink-500 font-bold">$11.99</p>
                    <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product" class="w-full">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Lipstick Set</h4>
                    <p class="mt-2 text-pink-500 font-bold">$49.99</p>
                    <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product" class="w-full">
                <div class="p-4">
                    <h4 class="text-lg font-semibold">Makeup Remover</h4>
                    <p class="mt-2 text-pink-500 font-bold">$9.99</p>
                    <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer')
</body>
</html>
