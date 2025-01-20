<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
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
        $user= Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id', $userid)->count();
        


        return view('product_details',compact('data','count'));
    }

    public function add_cart($id)
{
    $product_id = $id;
    $user = Auth::user();
    $user_id = $user->id;

    // Save cart item
    $data = new Cart;
    $data->user_id = $user_id;
    $data->product_id = $product_id;
    $data->save();

    // Flash success message to session
   

    return redirect()->back()->with('message', 'Added to Cart Successfully.');
}

public  function mycart()
{
    if(Auth::id())
    {
        $user = Auth::user();
        $userid = $user->id;

        $cart = Cart::where('user_id',$userid)->get();


        
    }

    return view('mycart',compact('cart'));
}


        public function confirm_order(Request $request)
        {

            $name = $request->name;

            
            $address = $request->address;

            
            $phone = $request->phone;

            $userid = Auth::user()->id;
            $cart = Cart::where('user_id',$userid)->get();

            foreach($cart as $carts)
            {
                $order = new Order;
                $order->product_id =$carts->product_id;

                $order->name = $name;
                
                $order->rec_address = $address;
                
                $order->phone = $phone;
                $order->user_id = $userid;
                
                $order->save();
              

            }


            $cart_remove = Cart::where('user_id',$userid)->get();

            foreach($cart_remove as $remove)
            {
                $data =Cart::find($remove->id); 

                $data->delete();
            }
            return redirect()->back();

           
            

        }
}
