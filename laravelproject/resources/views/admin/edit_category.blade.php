<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        /* Reset margins and paddings */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            color: #333;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .page-header {
            background-color: #4e73df;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .page-header h1 {
            color: white;
            font-size: 28px;
            font-weight: 600;
        }

        .div_deg {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 30px auto;
        }

        label {
            font-size: 16px;
            font-weight: 500;
            color: #333;
            margin-bottom: 10px;
            display: inline-block;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 20px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #4e73df;
            outline: none;
            box-shadow: 0 0 8px rgba(78, 115, 223, 0.6);
        }

        .btn {
            background-color: #4e73df;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2e59d9;
        }

      
        /* Media Queries */
        @media (max-width: 768px) {
            .div_deg {
                padding: 20px;
                margin: 20px;
            }

            .page-header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Update Category</h1>
                <div class="div_deg">
                    <form action="{{ url('update_category', $data->id) }}" method="post">
                        @csrf
                        <label for="category">
                            Category Name:
                        </label>
                        <input type="text" name="category" id="category" value="{{ $data->category_name }}" required>
                        <input class="btn btn-primary" type="submit" value="Update Category">
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- JavaScript files -->
    <script src="{{ asset('/admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('/admincss/js/front.js') }}"></script>

</body>

</html>
