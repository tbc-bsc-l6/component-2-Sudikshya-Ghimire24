<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
 /* Ensure no margin or padding on html and body */
 body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: white;
            overflow-x: hidden; /* Prevent horizontal overflow */
        }

        /* Ensure .page-content takes up all available space */
        .page-content {
            position: relative;
            min-height: calc(100vh - 70px); /* Adjust based on the height of the header */
            padding: 0;
            margin: 0;
            overflow: hidden;
        }

        /* Header without extra space */
        .page-header {
            padding: 20px 15px;
            background: #2d3035;
            color: #8a8d93;
            margin-bottom: 0; /* Ensure no bottom margin to avoid extra space */
        }

        /* Adjust form container to avoid extra spacing */
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
        }

        /* Input styling */
        input[type='text'] {
            width: 375px;
            height: 60px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Button styling */
        .btn-primary {
            margin-left: 15px;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }

        /* Footer at the bottom */
        footer {
            background-color: #2d3035;
            color: white;
            text-align: center;
            padding: 125px;
            position: absolute;
            bottom: 0;
            width: 100%; /* Full width at the bottom */
        }
    
    </style>
</head>

    @include('admin.header')
    @include('admin.sidebar')
    
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1 style="color: white;">Update Category</h1>
                <div class="div_deg">
                    <form action="{{ url('update_category', $data->id) }}" method="post">
                        @csrf
                        <label for="category" style="color: white; font-size: 18px; margin-right: 15px;">
                            Category Name:
                        </label>
                        <input type="text" name="category" id="category" value="{{ $data->category_name }}" required>
                        <input class="btn btn-primary" type="submit" value="Update Category">
                    </form>
                    @include('footer')
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
