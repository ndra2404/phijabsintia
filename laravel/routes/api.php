<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/cart/{id}', 'App\Http\Controllers\CartController@getCart');

Route::get('/getList/{id}', 'App\Http\Controllers\ChatController@getList');
Route::any('/chat', 'App\Http\Controllers\ChatController@sendchat');
