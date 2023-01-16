<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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
// home page
Route::get('/', [ProductsController::class,'index']);
Route::get("/about", function(){
    return view('about');
});
// register form
Route::get('/register',[AuthController::class,'register']);

// store registered user
Route::post('/users', [AuthController::class, 'store']);

// login form
Route::get('/login', [AuthController::class, 'login']);
// login authenticate
Route::post('/authenticate',[AuthController::class,'authenticate']);

// logout
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');

// Products
Route::get('/shop',[ProductsController::class, 'view'] );
// single product
Route::get('/shop/more/{product}',[ProductsController::class,'more']);
// Create product form 
Route::get('/products/create',[ProductsController::class,'create']);
// Store Products
Route::post('/product',[ProductsController::class,'store']);

// show edit form
Route::get('/products/{product}/edit',[ProductsController::class,'edit']);
// update the form
Route::put('/products/{product}',[ProductsController::class,'update']);
// Delete a product
Route::delete('/products/{product}',[ProductsController::class,'destroy' ]);

// Route::resource([ProductsController::class]);

// admin dashboard
Route::get('/admin/dashboard',[ProductsController::class,'dashboard']);
