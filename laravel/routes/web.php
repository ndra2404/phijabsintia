<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/product', 'App\Http\Controllers\HomeController@product');
Route::any('/login', 'App\Http\Controllers\HomeController@login');
Route::any('/doregister', 'App\Http\Controllers\HomeController@doregister');
Route::any('/logout', 'App\Http\Controllers\HomeController@logout');
Route::any('/cart/{id}', 'App\Http\Controllers\CartController@cart');
Route::any('/checkout', 'App\Http\Controllers\CartController@checkout');
Route::any('/checkout/doprocess', 'App\Http\Controllers\CartController@doProcess');
Route::any('/account', 'App\Http\Controllers\HomeController@account');
Route::any('/account/confirmation/{id}', 'App\Http\Controllers\HomeController@confirmation');
Route::any('/account/selesai/{id}', 'App\Http\Controllers\HomeController@selesai');

Route::any('/chat', 'App\Http\Controllers\ChatController@index');
Route::any('/chat/send/{id}', 'App\Http\Controllers\ChatController@send');

//product admin
Route::get('/products', 'App\Http\Controllers\HomeController@products');
Route::any('/products/add', 'App\Http\Controllers\ProductController@add');
Route::get('/products/delete/{id}', 'App\Http\Controllers\ProductController@delete');
Route::any('/products/update/{id}', 'App\Http\Controllers\ProductController@update');

//product admin
Route::get('/products/type', 'App\Http\Controllers\ProductTypeController@index');
Route::any('/products/type/add', 'App\Http\Controllers\ProductTypeController@add');
Route::get('/products/type/delete/{id}', 'App\Http\Controllers\ProductTypeController@delete');
Route::any('/products/type/update/{id}', 'App\Http\Controllers\ProductTypeController@update');

//pesanan
Route::get('/pesanan', 'App\Http\Controllers\PesananController@index');
Route::any('/pesanan/ubah/{id}', 'App\Http\Controllers\PesananController@detail');
Route::any('/pesanan/confirm/{id}', 'App\Http\Controllers\PesananController@confirm');
