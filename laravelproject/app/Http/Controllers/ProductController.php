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
        $products = Product::all();

        $user= Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id', $userid);


        // Return the view or data
        return view('product', compact('products'));  // Adjust as needed
    }

    
}
