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
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('product') }}">Products</a></li>
                    <li><a href="{{ route('aboutus.index') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
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

    <!-- Main Content -->
    <div class="main-container container mx-auto">
        <!-- Form Section -->
        <div class="form-container">
        <form action="{{ url('confirm_order') }}" method="POST">
    @csrf

                <div>
                    <label>Receiver Name</label>
                    <input type="text" name="name" value="{{Auth::user()->name}}">
                </div>
                <div>
    <label>Receiver Address</label>
    <textarea name="address">{{ Auth::user()->address }}</textarea>
</div>

                <div>
                    <label>Receiver Phone</label>
                    <input type="text" value="{{Auth::user()->name}}" name="phone">
                </div>
                <div>
                    <input type="submit" value="Place Order">
                </div>
            </form>
        </div>

        <!-- Product Table Section -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalPrice = 0;
                    @endphp
                    @foreach($cart as $cartitem)
                    <tr>
                        <td>{{ $cartitem->product->title }}</td>
                        <td>${{ $cartitem->product->price }}</td>
                        <td><img src="/products/{{ $cartitem->product->image }}" alt="Product Image"></td>
                    </tr>
                    <td><a class="btn btn-danger" href="">Delete</td>
                    @php
                        $totalPrice += $cartitem->product->price;
                    @endphp

                    
                    @endforeach
                </tbody>
            </table>

            <!-- Total Price Section -->
            <div class="total-price">
                Total Price: ${{ number_format($totalPrice, 2) }}
            </div>
        </div>
    </div>

    @include('footer')
</body>
</html>
