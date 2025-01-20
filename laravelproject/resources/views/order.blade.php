<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Bliss - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Global Styles */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #e6007a;
        }

        /* Navbar */
        header {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 24px;
        }

        header h1 {
            font-size: 1.75rem;
            color: #e6007a;
        }

        header ul {
            display: flex;
            gap: 16px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        header li a {
            color: #666;
            padding: 8px 12px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        header li a:hover {
            background-color: #f3f3f3;
            color: #333;
        }

        /* Layout */
        .main-container {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            padding: 16px;
        }

        /* Form Section */
        .form-container {
            flex: 1;
            max-width: 25%;
            background-color: #fff;
            padding: 16px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            display: block;
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }

        .form-container input[type="text"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            margin-bottom: 16px;
        }

        .form-container input[type="submit"] {
            display: inline-block;
            background-color: #e6007a;
            color: #fff;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #c50069;
        }

        /* Table Section */
        .table-container {
            flex: 3;
            max-width: 70%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table thead {
            background-color: #0077b6;
            color: #fff;
        }

        table th,
        table td {
            text-align: left;
            padding: 12px;
            font-size: 1rem;
        }

        table tr {
            border-bottom: 1px solid #eee;
            transition: background-color 0.3s ease;
        }

        table tr:hover {
            background-color: #f9f9f9;
        }

        table img {
            border-radius: 8px;
            max-width: 60px;
            height: auto;
        }

        /* Total Price Section */
        .total-price {
            margin-top: 16px;
            text-align: right;
            font-size: 1.2rem;
            font-weight: bold;
            color: #e6007a;
        }

        /* Cart Icon (No Count) */
        .cart-icon {
            display: flex;
            align-items: center;
            position: relative;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
            }

            .form-container,
            .table-container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<header>
    <div class="container mx-auto">
        <div class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Beauty Bliss Logo" class="h-10">
            <h1 class="ml-4">Beauty Bliss</h1>
        </div>
        <nav>
            <ul class="flex gap-6">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('product') }}">Products</a></li>
                <li><a href="{{ route('aboutus.index') }}">About Us</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>

                <!-- Cart -->
                <div class="cart-icon">
                    <a href="{{ url('mycart') }}">
                        <img src="images/truck.svg" alt="Cart" class="w-12 h-12 rounded-full cursor-pointer">
                        <!-- No Cart Count -->
                    </a>
                    <p class="mt-2 text-center">Cart</p>
                </div>

                @if (Auth::check())
                    <li><a href="{{ route('account.logout') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Logout</a></li>
                @else
                    <li><a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Login</a></li>
                    <li><a href="{{ route('register') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Register</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>

<!-- Table Section -->
<div class="table-container mx-auto mt-8 max-w-screen-lg">
    <table class="w-full shadow-md rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th class="py-3 px-6 bg-blue-500 text-white">Product</th>
                <th class="py-3 px-6 bg-blue-500 text-white">Price</th>
                <th class="py-3 px-6 bg-blue-500 text-white">Delivery Status</th>
                <th class="py-3 px-6 bg-blue-500 text-white">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $order)
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-4 px-6">{{$order->product->title}}</td>
                    <td class="py-4 px-6">${{$order->product->price}}</td>
                    <td class="py-4 px-6">{{$order->status}}</td>
                    <td class="py-4 px-6">
                        <img src="products/{{$order->product->image}}" alt="Product Image" class="rounded-lg w-24 h-24 object-cover">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('footer')

</body>
</html>
