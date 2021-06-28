<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //index function
    public function index(){
        $products = Product::all();
            return view('pages.index', 
        [
            'products' => $products
        ]);
    }

    //Add to cart
    public function addToCart(Request $request, Cart $cart){
       
        //Check if a user is logged in before adding to cart
        if($request->session()->has('user')){
            

             
            //Check if product is already in cart
           if(Cart::where('product_id', $request->product_id)->exists()){
                return redirect()->route('home')->with('error', 'Products already in cart');

            }

            //Add Product to cart
            $cart = new Cart;
            $cart->product_id = $request->product_id;
            $cart->user_id = $request->session()->get('user')['id'];
           
            $cart->save();


            //redirect
            return redirect()->route('home')->with('status', 'Product Added to Cart');

           
        }else{
            return redirect()->route('login');
        }

    }
    

    // Count Number of Items in Cart
    static function cartCount(){
        //Get session user ID
        $userId = Session::get('user')->id;


        //get count where user id matches $userid
       return  Cart::where('user_id', $userId)->count();

    }

    //Get all Items in cart
    public function cartItems(){

        //Get Session user id
        $userId = Session::get('user')['id'];

        if(Session::has('user')){
             //Get data from database using join
            $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*')
            ->get();
        }else{
            return 'hello';
        }
       
        return view('pages.cart', [
            'products' => $products
        ]);
        
    }

    //Remove Item from Cart
    public function removeItem($id){
        // dd($id);

        $product = Cart::where('product_id', $id)->first();
        // dd($product);
        $product->delete();

        return redirect()->back()->with('status', 'Producted Successfully Deleted from Cart');
    }

    //Order Now
    public function orderNow(){

        $userId = Session::get('user')['id'];


         //Get data from database using join
         $products = DB::table('cart')
         ->join('products', 'cart.product_id', '=', 'products.id')
         ->where('cart.user_id', $userId)
         ->select('products.*')
         ->sum('products.price');

         return view('pages.order' , [
             'products' => $products
         ]);

    }

    //Place Order
    public function placeOrder(Request $request){
        
        //Get Session ID
        $userId = Session::get('user')['id'];

        $allItems = Cart::where('user_id', $userId)->get();
      
        //Validate Form
        $request->validate([
            'address' => 'required',
            'payment_method' => 'required'
        ]);

        //Store Order in order Table
        foreach($allItems as $orderItem){
          $order = new Order;
          $order->product_id = $orderItem->product_id;
          $order->user_id = $orderItem->user_id;
          $order->status = 'Pending';
          $order->payment_method = $request->payment_method;
          $order->payment_status = 'Pending';
          $order->address = $request->address;

          $order->save();


          //delete items from cart
          $allItems = Cart::where('user_id', $userId)->delete();
      
        }

        return redirect(route('home'))->with('status', 'Order Successfully Created');
    }

    //Track your Order
    public function trackOrder(){
        
        //Get session id
        $userId = Session::get('user')['id'];
        $orderedItems = DB::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->where('orders.user_id', $userId)
        ->get();

        return view('pages.track_order', [
            'orderedItems' => $orderedItems
        ]);
    }
}
