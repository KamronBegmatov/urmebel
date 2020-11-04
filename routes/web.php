<?php

use App\Models\Product;
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

Route::get('/', function () {
    return view('template.index', ['categories' => \App\Models\Category::all()], ['products' => \App\Models\Product::take(12)->latest()->get()]);
})->name('home');

Route::get('/search', '\App\Http\Controllers\ProductController@search')->name('search');

Route::get('/category/{category}', '\App\Http\Controllers\CategoryController@show')->name('category');


Route::get('/category/{category}/product/{product}', '\App\Http\Controllers\ProductController@show')->name('product');


Route::get('/checkout', function (){
    return view('template.checkout');})->name('checkout');



Route::get('/contact', function(){
    return view ('template.contact', ['categories' => \App\Models\Category::all()]);})->name('contact');


Route::get('/about', function(){
    return view('template.about', ['categories' => \App\Models\Category::all()]);})->name('about');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard', ['categories' => \App\Models\Category::all()], ['products' => \App\Models\Product::all()]);})->name('dashboard');


Route::post('/dashboard/add_new_category', '\App\Http\Controllers\CategoryController@store')->name('add_new_category');

Route::post('/dashboard/delete_category', '\App\Http\Controllers\CategoryController@destroy')->name('delete_category');

Route::post('/dashboard/add_new_product', '\App\Http\Controllers\ProductController@store')->name('add_new_product');

Route::post('/dashboard/delete_product', '\App\Http\Controllers\ProductController@destroy')->name('delete_product');

Route::post('/dashboard/edit', '\App\Http\Controllers\ProductController@edit')->name('edit_product');

Route::put('/dashboard/update', '\App\Http\Controllers\ProductController@update')->name('update_product');

