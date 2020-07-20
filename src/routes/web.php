<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::any('products/search', 'ProductController@search')->name('products.search')->middleware('auth');
Route::resource('products', 'ProductController')->middleware(['auth', 'check.is.admin']);

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');