<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .table_deg {
            border: 2px solid white;
        }

        th {
            background-color: skyblue;
            color: rebeccapurple;
            font-size: 22px;
            font-weight: bold;
            padding: 15px;
        }

        td {
            border: 1px solid skyblue;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="div_deg">
                    <table class="table_deg">
                        <tr>
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($showproduct as $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <img height="120" width="130" src="products/{{ $product->image }}">
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{ url('delete_product', $product->id) }}" onclick="return confirmDelete();">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="div_img">
                    {{ $showproduct->links() }}
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function confirmDelete() {
            return confirm("Are you sure you want to delete this product?");
        }
    </script>

    @include('admin.js')
</body>
</html>
