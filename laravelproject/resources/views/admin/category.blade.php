<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type ="text/css">
      input[type="text"] {
        width: 400px;
        height: 50px;
      }

      .div_deg {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px auto;
        flex-direction: column;
        width: 600px;
      }

      .table_deg {
        text-align: center;
        margin: auto;
        border: 2px solid yellowgreen;
        margin-top: 50px;
        border-collapse: collapse;
        width: 80%;
      }

      th {
        background-color: blue;
        padding: 15px;
        font-size: 20px;
        font-weight: bold;
        color: white;
      }

      td {
        color: white;
        padding: 10px;
        border: 1px solid blueviolet;
      }

      h1 {
        color: white;
        text-align: center;
        margin-bottom: 20px;
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
          <h1 style="color: white;">Add Category</h1>
          <div class="div_deg">
            <form action="{{ url('add_category') }}" method="post">
              @csrf
              <div>
                  <input type="text" name="category">
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
                  <!-- Modified Delete Link with confirmation -->
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
