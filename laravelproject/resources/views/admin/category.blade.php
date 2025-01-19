<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
      /* Input Field Styles */
      input[type="text"] {
        width: 400px;
        height: 50px;
        border: 2px solid #4CAF50;
        border-radius: 8px;
        padding: 10px;
        font-size: 16px;
        transition: border-color 0.3s ease, background-color 0.3s ease;
        background-color: #f9f9f9;
      }

      input[type="text"]:focus {
        border-color: #45a049;
        outline: none;
        background-color: #fff;
      }

      /* Container Style */
      .div_deg {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px auto;
        flex-direction: column;
        width: 600px;
        background: linear-gradient(45deg, #ff6f61, #6a1b9a);
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      }

      /* Table Style */
      .table_deg {
        text-align: center;
        margin: auto;
        border: 2px solid #FF6347;
        margin-top: 50px;
        border-radius: 8px;
        border-collapse: collapse;
        width: 80%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        background-color: #ffffff;
      }

      th {
        background-color: #1e88e5;
        padding: 15px;
        font-size: 20px;
        font-weight: bold;
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      td {
        color: #333;
        padding: 12px;
        border: 1px solid #FF6347;
        transition: background-color 0.3s ease, color 0.3s ease;
      }

      td:hover {
        background-color: #FF6347;
        color: white;
      }

      /* Heading Style */
      h1 {
        color: white;
        text-align: center;
        margin-bottom: 20px;
        font-family: 'Arial', sans-serif;
        font-size: 32px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .div_deg {
          width: 90%;
        }

        .table_deg {
          width: 100%;
        }

        input[type="text"] {
          width: 100%;
        }
      }

      /* Button Styles */
      .btn {
        padding: 10px 20px;
        border-radius: 30px;
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
        transition: all 0.3s ease;
      }

      .btn-primary {
        background-color: #1e88e5;
        color: white;
        border: none;
      }

      .btn-primary:hover {
        background-color: #0d6efd;
      }

      .btn-success {
        background-color: #4CAF50;
        color: white;
        border: none;
      }

      .btn-success:hover {
        background-color: #45a049;
      }

      .btn-danger {
        background-color: #FF6347;
        color: white;
        border: none;
      }

      .btn-danger:hover {
        background-color: #f44336;
      }

    </style>
  </head>
  <body>
  @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
  @endif

    @include('admin.header')
    @include('admin.sidebar')

    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h1>Add Category</h1>
          <div class="div_deg">
            <form action="{{ url('add_category') }}" method="post">
              @csrf
              <div>
                  <input type="text" name="category" placeholder="Enter category name">
                  <input class="btn btn-primary" type="submit" value="Add Category">
              </div>
            </form>
          </div>

          <div>
            <table class="table_deg">
              <tr> 
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>

              @foreach($data as $Category)
              <tr>
                <td>{{$Category->category_name}}</td>
                <td>
                  <a class="btn btn-success" href="{{url('edit_category', $Category->id)}}">Edit</a>
                </td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete_category', $Category->id)}}" onclick="return confirmDelete();">
                    Delete
                  </a>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript to handle the confirmation -->
    <script type="text/javascript">
      function confirmDelete() {
        return confirm("Are you sure you want to delete this category?");
      }
    </script>

    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>
