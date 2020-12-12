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

Route::get('/home', 'HomeController@index');
Route::get('/welcome', 'HomeController@welcome');
Route::get('/shop', 'HomeController@shop');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/blog', 'HomeController@blog');
Route::get('/blog_details', 'HomeController@blog_details');
Route::get('/product_details', 'HomeController@product_details');
Route::get('/product_details_thumbnail', 'HomeController@product_details_thumbnail');
