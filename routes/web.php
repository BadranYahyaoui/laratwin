<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('category','CategoryController');
Route::resource('product','ProductController');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tasks', 'TaskController@index')->name('tasks');


Route::get('/panier', 'HomeController@panier')->name('panier');


Route::get('/add-products/{id}', 'UserController@addProduct')->name('products-user');
Route::get('/remove-from-cart/{id}', 'UserController@removeProduct')->name('remove-from-cart');