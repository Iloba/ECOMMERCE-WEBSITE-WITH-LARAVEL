<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Registering My Routes
Route::get('/', [ProductController::class, 'index'])->name('home');


//Add to cart
Route::post('/add_to_cart', [ProductController::class, 'addToCart'])->name('add_to_cart');

//login user
Route::post('login', [UserController::class, 'loginUser'])->name('login_user');

//Show Cart Items
Route::get('cart', [ProductController::class, 'cartItems'])->name('cart_items');

//Remove item from cart
Route::post('remove/{id}', [ProductController::class, 'removeItem'])->name('remove_item');


//Order Now
Route::get('orderNow', [ProductController::class, 'orderNow'])->name('make_order');

//Place Order
Route::post('placeOrder', [ProductController::class, 'placeOrder'])->name('place_order');

//Track your Orders
Route::get('myOrders', [ProductController::class, 'trackOrder'])->name('track_order');

//Get login route
Route::get('/login', function(){
    return view('my_auth.login');
})->name('login');

//Register user page
Route::get('/register', function(){
    return view('my_auth.register');
})->name('register_page');

//Register User
Route::post('/register', [UserController::class, 'registerUser'])->name('register');

//logout route
Route::post('logout', [UserController::class, 'logoutUser'])->name('logout');



