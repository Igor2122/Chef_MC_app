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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', ['uses' => 'Admin\DashboardController@index', 'as' => 'admin']);

Route::resource('categories', 'Admin\CategoriesController');
Route::resource('tags', 'Admin\TagsController');
Route::resource('product', 'Admin\ProductController');

Route::get('api/product', function() {
    $results = \App\Product::all();
    return $results;
});
Route::get('/product', function() {
    return view('product');
});

Route::get('/api/news', function () {
    $results =  \App\Product::all();
    return $results;
});

Route::get('/news', function () {
    return view('news');
});

