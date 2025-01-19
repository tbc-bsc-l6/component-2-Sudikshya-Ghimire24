<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Bliss - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Product Detail Section Styles */
        .product-detail-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 16px;
        }

        .product-detail-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .product-image-container {
            flex: 1;
            max-width: 50%;
            padding: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-image {
            max-height: 300px;
            width: auto;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .product-image-container:hover .product-image {
            transform: scale(1.05);
        }

        .product-info {
            flex: 1;
            max-width: 45%;
            padding: 16px;
            background-color: #f7f7f7;
            border-radius: 8px;
        }

        .product-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            transition: color 0.3s ease;
        }

        .product-title:hover {
            color: #e6007a;
        }

        .product-price {
            font-size: 1.2rem;
            color: #e6007a;
            font-weight: bold;
            margin-top: 8px;
        }

        .product-category, .product-quantity {
            font-size: 1rem;
            color: #666;
            margin-top: 4px;
        }

        .product-description {
            margin-top: 12px;
            font-size: 1rem;
            color: #333;
            line-height: 1.6;
            height: 80px;
            overflow: hidden;
            text-overflow: ellipsis;
            transition: height 0.3s ease;
        }

        .product-description:hover {
            height: auto;
            text-overflow: unset;
        }

        /* Details Box Styles */
        .detail-box {
            background-color: #f1f1f1;
            padding: 16px;
            border-radius: 8px;
            margin-top: 16px;
        }

        .detail-box p {
            color: #333;
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .product-detail-container {
                flex-direction: column;
                align-items: center;
                padding: 8px;
            }

            .product-image-container,
            .product-info {
                max-width: 100%;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
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
                <li><a href="{{ route('contact') }}" class="text-gray-700">Contact Us</a></li>

                @if (Auth::check())
                <li><a href="{{ route('account.logout')}}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-indigo-700">Logout</a></li>
                @else
                <li><a href="{{ route('login') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-indigo-700">Login</a></li>
                <li><a href="{{ route('register') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-indigo-700">Register</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>

<!-- Product details start -->
<div class="mt-12">
    <div class="product-detail-container">
        <!-- Image Container -->
        <div class="product-image-container">
            <img src="/products/{{$data->image}}" alt="{{ $data->title }}" class="product-image">
        </div>
        
        <!-- Product Info -->
        <div class="product-info">
            <h4 class="product-title">{{ $data->title }}</h4>
            <p class="product-price">${{ $data->price }}</p>
            <h6 class="product-category">Category : {{$data->category}}</h6>
            <h6 class="product-quantity">Available quantity: <span>${{$data->quantity}}</span></h6>

            <div class="detail-box">
                <p>{{ $data->description }}</p>
            </div>
        </div>
    </div>
</div>
<!-- Product details end -->

<!-- Footer -->
@include('footer')

</body>
</html>
