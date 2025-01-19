<!DOCTYPE html>
<html>
  <head>
    <style>
    body {
    background-color: #f4f4f4; /* Light background color */
    color: #333; /* Dark text for good contrast */
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    background: #ffffff; /* White background for the container */
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Soft shadow for the container */
}

h1{
    text-align: center;
    margin-bottom: 20px;
    color: white; /* Dark text for the header */
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333; /* Dark text color for labels */
}

input[type="text"],
input[type="number"],
textarea,
select,
input[type="file"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc; /* Light border color */
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box; /* Ensures padding is included in the width */
}

input[type="text"]:focus,
input[type="number"]:focus,
textarea:focus,
select:focus,
input[type="file"]:focus {
    outline: none;
    border: 2px solid #3498db; /* Blue border on focus */
}

textarea {
    resize: none;
    height: 100px;
}

.btn {
    display: inline-block;
    width: 100%;
    padding: 14px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    background-color: #3498db; /* Blue background for the button */
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-align: center;
}

.btn:hover {
    background-color: #2980b9; /* Darker blue on hover */
}

.alert {
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 5px;
    font-size: 14px;
    display: none;
}

.alert-success {
    background-color: #2ecc71; /* Green background for success */
}

.alert-danger {
    background-color: #e74c3c; /* Red background for error */
}

img {
    display: block; /* Make image a block-level element */
    max-width: 100%; /* Ensure the image doesn't overflow */
    height: auto; /* Maintain aspect ratio */
    margin-bottom: 15px; /* Add space below the image */
    border-radius: 4px; /* Rounded corners for the image */
}
.page-header {
    margin-bottom: 30px;
}

.page-header h2 {
    font-size: 24px;
    font-weight: 600;
    color: white;
    margin: 0;
}

.container-fluid {
    padding: 0 15px;
}
</style> 
  

    @include('admin.css')
  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h2>Update Product</h2>
          <div>
            <form action="{{url('edit_product',$data->id)}}" method="post " enctype="multipart/form-data">
              <div>
                <label>Title</label>
                <input type="text" name="title" value="{{$data->title}}">
              </div>
              <div>
                <label>Description</label>
                <textarea name="description">{{$data->description}}</textarea>
              </div>

              <div>
                <label>Price</label>
                <input type="text" name="price" value="{{$data->price}}">
              </div>

              <div>
                <label>Quantity</label>
                <input type="number" name="quantity" value="{{$data->quantity}}" >
              </div>


              <div>
                <label>Category</label>
                <select name="category">
                  <option value="{{$data->category}}">{{$data->category}}</option>
                  @foreach($category as $Category)
                  <option value="{{$Category->category_name}}">{{$Category->category_name}}</option>
                  @endforeach
                </select>
              </div>
              
              <div>
                <label>Current Image</label>
                <img width="150" src="/products/{{$data->image}}">
              </div>

              <div>
                <label> New Image </label>
                <input type="file" name="image">
              </div>
              <div>
                <input class="btn btn-success" type="submit" value="Update Product">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>
