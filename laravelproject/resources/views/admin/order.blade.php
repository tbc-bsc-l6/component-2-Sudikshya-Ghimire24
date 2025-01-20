<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <style>
      /* General Table Styling */
      table {
          width: 100%;
          border-collapse: collapse;
          margin: 20px 0;
          font-size: 16px;
          font-family: Arial, sans-serif;
          text-align: left;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
          border-radius: 10px;
          overflow: hidden;
      }

      /* Table Header */
      table th {
          background-color: #4CAF50;
          color: white;
          font-weight: bold;
          padding: 12px 15px;
          text-transform: uppercase;
          letter-spacing: 0.03em;
      }

      /* Table Rows */
      table td {
          padding: 12px 15px;
          border-bottom: 1px solid #ddd;
          vertical-align: middle;
      }

      /* Alternating Row Colors */
      table tr:nth-child(even) {
          background-color: #f9f9f9;
      }

      table tr:nth-child(odd) {
          background-color: #ffffff;
      }

      /* Hover Effect */
      table tr:hover {
          background-color: #f1f1f1;
      }

      /* Responsive Design */
      @media screen and (max-width: 768px) {
          table {
              font-size: 14px;
          }

          table th, table td {
              padding: 8px 10px;
          }
      }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')

    <!-- Sidebar Navigation end -->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <table>
            <thead>
              <tr>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status</th>
                <th>Change Status</th>

              </tr>
            </thead>
            <tbody>

            @foreach($data as $data)
              <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->rec_address}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->product->title}}</td>
                <td>{{$data->product->price}}</td>
                <td><img width="150" src="products/{{$data->product->image}}"></td>
                <td>{{$data->status}}</td>
              <td>
                <a class ="btn btn-primary" href="{{url('on_the_way',$data->id)}}">On the way</a>
                <a class ="btn btn-success" href="{{url('delivered',$data->id)}}">Delivered</a>

              </td>
              @endforeach
             
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- JavaScript files -->
    @include('admin.js')
  </body>
</html>
