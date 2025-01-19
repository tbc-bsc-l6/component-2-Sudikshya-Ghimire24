<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
       
        return view('home',compact('products'));
    }

    

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home'); // or redirect()->route('login') if you want to redirect to the login page
    }

    public function product_details($id)
    {
        $data = Product::find($id);

        return view('product_details',compact('data'));
    }
    

   // HomeController.php



}
