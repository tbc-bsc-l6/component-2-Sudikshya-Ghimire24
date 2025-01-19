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
    <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-pink-500">Our Collection</h1>
            <p class="mt-4 text-gray-700">Discover our range of curated beauty products.</p>


<!-- Product Grid -->
<div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach($products as $product)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="products/{{$product->image}}" alt="Glow Serum" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold">{{ $product->title}}</h4>
                        <p class="mt-2 text-pink-500 font-bold">${{ $product->price }}</p>
                    </div>

                    <div class="p-4"> 
    <a class="mt-4 inline-block bg-pink-500 text-white px-6 py-3 rounded-full shadow-lg hover:bg-pink-600 focus:ring-2 focus:ring-pink-400 focus:ring-opacity-50" href="{{url('product_details',$product->id)}}">Details</a>
</div>

                </div>
                @endforeach
            </div>


   
</div>


                </div>
                
</section>
    


@include('footer')

</body>
</html>