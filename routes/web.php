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

// Route::get('/', function () {
//     return view('welcome');
// });
//Registering My Routes
Route::get('/', [ProductController::class, 'index'])->name('home');

//login user
Route::post('/login', [UserController::class, 'loginUser'])->name('login_user');

//Get login route
Route::get('/login', function(){
    return view('my_auth.login');
})->name('login');

//logout route
Route::get('logout', [UserController::class, 'logoutUser'])->name('logout');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


