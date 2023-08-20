<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\deliveryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegstrationController;



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
route::get('/',[HomeController::class,'index']);

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',
function(){
    return view('dashboard');
})->name('dashboard');
route::get('/redirect',[HomeController::class,'redirect']);
route::get('/bmi','App\Http\Controllers\HomeController@bmi');
route::get('/bot','App\Http\Controllers\HomeController@bot');

route::get('/db','App\Http\Controllers\HomeController@db');
route::get('/dbcatagory','App\Http\Controllers\HomeController@dbcatagory');

Route::post('/dbadd_catagory', 'App\Http\Controllers\AddToCatagory@store');





Route::resource('admin/products', 'ProductController');



route::get('/congo','App\Http\Controllers\HomeController@congo');
route::get('/card','App\Http\Controllers\HomeController@card');


route::get('/adminlogin','App\Http\Controllers\HomeController@adminlogin');

route::get('/plan','App\Http\Controllers\HomeController@plan');
route::get('/abs','App\Http\Controllers\HomeController@abs');
route::get('/arms','App\Http\Controllers\HomeController@arms');
route::get('/glutes','App\Http\Controllers\HomeController@glutes');
route::get('/legs','App\Http\Controllers\HomeController@legs');

route::get('/contact','App\Http\Controllers\HomeController@contact');
route::get('/buy','App\Http\Controllers\HomeController@buy');
route::get('/login','App\Http\Controllers\HomeController@login');
route::get('/reg','App\Http\Controllers\HomeController@reg');
route::get('/payment','App\Http\Controllers\HomeController@payment');
route::get('/forgetpassword','App\Http\Controllers\HomeController@forgetpassword');
// route::get('/addtocart','App\Http\Controllers\HomeController@addtocart');
route::get('/delivery','App\Http\Controllers\HomeController@delivery');
// Route for adding items to the cart
Route::post('/addtocart', 'App\Http\Controllers\CartController@store')->name('home.addtocart');
Route::post('/reg', [RegstrationController::class, 'store'])->name('submit-reg');
// Route::get('/reg', 'App\Http\Controllers\RegstrationController@store')->name('');
Route::post('/buy', 'App\Http\Controllers\CartController@store');
// route::post('/addtocart','App\Http\Controllers\HomeController@addtocart');

// Route for displaying the cart view
Route::get('/cart', 'App\Http\Controllers\CartController@showCart')->name('home.show');
Route::delete('/cart/{id}', 'App\Http\Controllers\CartController@deleteCartItem')->name('cart.delete');

route::get('/order','App\Http\Controllers\HomeController@order');

route::get('/blog','App\Http\Controllers\HomeController@blog');
route::get('/blogp1','App\Http\Controllers\HomeController@blogp1');
route::get('/blogp2','App\Http\Controllers\HomeController@blogp2');
route::get('/blogp3','App\Http\Controllers\HomeController@blogp3');
route::get('/reg','App\Http\Controllers\HomeController@reg');
route::get('/motivation','App\Http\Controllers\HomeController@motivation');
route::get('/quote','App\Http\Controllers\HomeController@quote');
route::get('/glowup','App\Http\Controllers\HomeController@glowup');
route::get('/creview','App\Http\Controllers\HomeController@creview');
route::get('/gymreviews','App\Http\Controllers\HomeController@gymreviews');

//route 
Route::post('/submit-form', [deliveryController::class, 'store'])->name('submit-form');

// routes/web.php
Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login.post');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');





