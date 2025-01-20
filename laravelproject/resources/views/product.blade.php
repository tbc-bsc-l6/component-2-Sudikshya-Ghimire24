<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
    /* Button Styling */
    .btn {
        padding: 10px 20px;
        font-size: 16px;
        text-decoration: none;
        border-radius: 8px;
        display: inline-block;
        transition: background-color 0.3s, transform 0.3s ease;
    }

    /* Details button  */
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

    /* Add to Cart button  */
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

    /* Make the buttons attractive */
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
        <form action="{{url('search_product')}}" method="get" class="w-full flex items-center space-x-4">
            @csrf
            <input type="search" name="search" class="w-1/2 p-3 rounded-lg border border-gray-300 text-base focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="Search products...">

            <input type="submit" class="btn btn-secondary bg-pink-500 text-white px-5 py-3 rounded-lg hover:bg-pink-600" value="Search">
        </form>
    </div>
</section>


<!-- Product Grid -->
<div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @foreach($items as $item)
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="products/{{$item->image}}" alt="{{ $item->title }}" class="w-full h-64 object-cover">
        <div class="p-4">
            <h4 class="text-lg font-semibold">{{ $item->title }}</h4>
            <p class="mt-2 text-pink-500 font-bold">${{ $item->price }}</p>
            <div style="padding:15px">
                <a class="btn btn-danger" href="{{ url('product_details', $item->id) }}">
                    Details
                </a>
                <a class="btn btn-primary" href="{{ url('add_cart', $item->id) }}">Add to Cart</a> 
            </div>
        </div>
    </div>
    @endforeach
</div>

</body>
</html>
