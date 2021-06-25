<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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
    public function addToCart(Request $request){
       
        //Check if a user is logged in before adding to cart
        if($request->session()->has('user')){
            
            //Add Product to cart
            $cart = new Cart;
            $cart->product_id = $request->product_id;
            $cart->user_id = $request->session()->get('user')['id'];
           
            $cart->save();


            //if product is already in cart



            //redirect
            return redirect()->back()->with('status', 'Product Added to Cart');

           
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
}
