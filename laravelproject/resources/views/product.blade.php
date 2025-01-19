<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com"></script>

    
    <style>
    /* Container for the buttons */
    .action-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 15px;
    }

    /* Button Styling */
    .btn {
        padding: 10px 20px;
        font-size: 16px;
        text-decoration: none;
        border-radius: 8px;
        display: inline-block;
        transition: background-color 0.3s, transform 0.3s ease;
    }

    /* Details button (red) */
    .btn-danger {
        background-color: #007bff;
        color: white;
        flex: 1;
        text-align: center;
    }

    .btn-danger:hover {
        background-color: #d50000;
        transform: scale(1.05);
    }

    /* Add to Cart button (blue) */
    .btn-primary {
        background-color: #007bff;
        color: white;
        flex: 1;
        text-align: center;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    /* Make the buttons more attractive */
    .btn:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    
</style>
</head>
<body class="bg-gradient-to-br from-pink-50 to-pink-100 text-gray-800">
@if(session('message'))
    <div class="bg-blue-500 text-white text-center py-2 rounded-lg mt-4">
        {{ session('message') }}
    </div>
@endif

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
            <img src="products/{{$product->image}}" alt="{{ $product->title }}" class="w-full h-64 object-cover">
            <div class="p-4">
                <h4 class="text-lg font-semibold">{{ $product->title }}</h4>
                <p class="mt-2 text-pink-500 font-bold">${{ $product->price }}</p>
                <div style="padding:15px">
        <a class="btn btn-danger" href="{{ url('product_details', $product->id) }}">
            Details
        </a>
        <a class="btn btn-primary" href="{{url('add_cart',$product->id)}}">Add to Cart</a> 
    </div>
        </div>
        
        </div>
        @endforeach
    </div>

</body>
</html>
