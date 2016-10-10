<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('products','ProductsController');
Route::resource('shopping_cart','InShopppingCartsController',[
	'only' => ['store', 'destroy']
	]);

Route::get('/', 'MainController@home');
Route::get('/carrito', 'ShoppingCartsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
