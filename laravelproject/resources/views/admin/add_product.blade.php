<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    @include('admin.css')
    <style>
        body {
            background-color: #2c3e50;
            color: white;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #34495e;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #ecf0f1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        select,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="text"]:focus,
        textarea:focus,
        select:focus,
        input[type="file"]:focus {
            outline: none;
            border: 2px solid #1abc9c;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        .btn {
            display: inline-block;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #1abc9c;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #16a085;
        }

        .alert {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            color: #fff;
            font-size: 14px;
        }

        .alert-success {
            background-color: #27ae60;
        }

        .alert-danger {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="container">
        <h1>Add Product</h1>

        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('upload_product') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="title">Product Title</label>
            <input type="text" name="title" id="title" placeholder="Enter product title" required>

            <label for="description">Description</label>
            <textarea name="description" id="description" placeholder="Enter product description" required></textarea>

            <label for="price">Product Price</label>
            <input type="text" name="price" id="price" placeholder="Enter product price" required>

            <label for="quantity">Product Quantity</label>
            <input type="number" name="quantity" id="quantity" placeholder="Enter product quantity" required>

            <label for="category">Product Category</label>
            <select name="category" id="category" required>
                <option value="">Select an Option</option>
                @foreach ($category as $item)
                    <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>
                @endforeach
            </select>

            <label for="image">Product Image</label>
            <input type="file" name="image" id="image" required>

            <button type="submit" class="btn">Add Product</button>
        </form>
    </div>

    @include('admin.js')
</body>
</html>
