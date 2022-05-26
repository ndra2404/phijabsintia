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
Route::any('/logout', 'App\Http\Controllers\HomeController@logout');

//product admin
Route::get('/products', 'App\Http\Controllers\HomeController@products');
Route::any('/products/add', 'App\Http\Controllers\ProductController@add');
Route::get('/products/delete/{id}', 'App\Http\Controllers\ProductController@delete');
Route::any('/products/update/{id}', 'App\Http\Controllers\ProductController@update');
