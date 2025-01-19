<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $category = new Category;
        $category->category_name = $request->category;
        $category->save();

        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Category not found');
        }

        $data->delete();

        return redirect()->back()->with('message', 'Category deleted successfully');
    }

    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $data = Category::find($id);
        $data->category_name = $request->category;
        $data->save();

        return redirect('/view_category');
    }

    public function add_product()
    {
        $category = Category::all();
        return view('admin.add_product', compact('category'));
    }

    public function upload_product(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category = $request->category;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function view_product()
    {
        $showproduct = Product::paginate(15);
        return view('admin.view_product', compact('showproduct'));
    }

    public function delete_product($id)
    {
        $delete = Product::find($id);

        if (!$delete) {
            return redirect()->back()->with('error', 'Product not found');
        }

        $imagePath = public_path('products/' . $delete->image);

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $delete->delete();

        return redirect()->back()->with('message', 'Product deleted successfully');
    }
    public function update_product($id)
    {
        $data = Product::find($id);
        $category = Category::all();

        return view('admin.update_page',compact('data','category'));
    }

    public function edit_product(Request $request, $id)
{
    $data = Product::find($id);

    $data->title = $request->title;
    $data->description = $request->description; // Fixed typo: `decription` to `description`
    $data->price = $request->price;
    $data->quantity = $request->quantity;
    $data->category = $request->category;

    // Check if an image file is uploaded
    if ($request->hasFile('image')) {
        $image = $request->file('image'); // Use `file()` to access the uploaded file
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        // Move the uploaded file to the 'products' directory
        $image->move(public_path('products'), $imagename);

        // Save the new image name
        $data->image = $imagename;
    }

    $data->save();

    return redirect('/view_product')->with('message', 'Product updated successfully!');
}
public function product_search(Request $request)
{
    $search = $request->search;
    
    // Check if the search input is not empty
    if (!empty($search)) {
        // Use 'LIKE' operator to match search term (case-insensitive)
        // Search both the title and the category
        $showproduct = Product::where('title', 'LIKE', '%' . $search . '%')
                              ->orWhere('category', 'LIKE', '%' . $search . '%')
                              ->paginate(15);
    } else {
        // If no search term, return all products
        $showproduct = Product::paginate(15);
    }

    return view('admin.view_product', compact('showproduct'));
}

}