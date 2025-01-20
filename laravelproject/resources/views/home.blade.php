<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Bliss - Home</title>
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

    /* Details button */
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

    /* Add to Cart button */
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

    /* Make the buttons attractive*/
    .btn:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

</style>
</head>
<body class="bg-white text-gray-800">
@if(session('message'))
    <div class="bg-blue-500 text-white text-center py-2 rounded-lg mt-4">
        {{ session('message') }}
    </div>
@endif
@include('navbar')

<!-- Hero Section -->
<!-- Hero Section -->
<section class="bg-pink-50">
    <div class="container mx-auto flex flex-col items-center text-center p-8 md:flex-row md:text-left md:space-x-8">
        <div class="md:w-1/2">
            <h2 class="text-4xl font-bold text-pink-500">Enhance Your Natural Beauty</h2>
            <p class="mt-4 text-gray-700">Discover a curated selection of high-quality beauty products crafted to make you feel confident and radiant.</p>
            <a href="{{ route('product') }}" class="mt-6 inline-block bg-pink-500 text-white px-6 py-3 rounded">Shop Collection</a>
        </div>
        <div class="mt-8 md:mt-0 md:w-1/2">
            <img src="{{ asset('images/image.jpg') }}" alt="Beauty Products" class="rounded-lg shadow-lg h-80">
        </div>
    </div>
</section>


<div class="container mx-auto text-center">
    <h1 class="text-4xl font-bold text-pink-500">Our Collection</h1>
    <p class="mt-4 text-gray-700">Discover our range of curated beauty products.</p>

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

</div>

@include('footer')

</body>
</html>
