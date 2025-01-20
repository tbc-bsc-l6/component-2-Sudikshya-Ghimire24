<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index()
    {
        // Get all products
        $items = Product::all();
        
        // Get the authenticated user
        $user = Auth::user();
        
        // If the user is authenticated, proceed with logic
        
    
        // Return the view with products (without cart count logic)
        return view('product', compact('items'));
    }
    
    
}