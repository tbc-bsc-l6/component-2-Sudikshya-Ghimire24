<!DOCTYPE html>
<html>
  <head>
    <style>
    html, body {
    height: 100%;  /* Ensure the body and html take full height */
    margin: 0;
    padding: 0;
}

.page-content {
    min-height: calc(100vh - 200px); /* Make sure content takes up full height minus footer */
    padding-bottom: 60px;  /* Adds space for footer */
}

footer {
    position: relative;
    width: 100%;
    padding: 20px;
    background-color: #333;
    color: white;
    text-align: center;
    margin-top: 20px;
    bottom: 0;
}

.container-fluid {
    padding: 0 15px;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    background: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: white;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

input[type="text"],
input[type="number"],
textarea,
select,
input[type="file"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box;
}

input[type="text"]:focus,
input[type="number"]:focus,
textarea:focus,
select:focus,
input[type="file"]:focus {
    outline: none;
    border: 2px solid #3498db;
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
    background-color: #3498db;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-align: center;
}

.btn:hover {
    background-color: #2980b9;
}

.alert {
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 5px;
    font-size: 14px;
    display: none;
}

.alert-success {
    background-color: #2ecc71;
}

.alert-danger {
    background-color: #e74c3c;
}

img {
    display: block;
    max-width: 100%;
    height: auto;
    margin-bottom: 15px;
    border-radius: 4px;
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
