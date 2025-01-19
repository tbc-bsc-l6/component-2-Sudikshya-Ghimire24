<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Get all products
        $products = Product::all();

        // Return the view or data
        return view('product', compact('products'));  // Adjust as needed
    }
}
