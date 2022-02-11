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
// use App\Http\Controllers\MainController;
Route::get('/', 'MainController@index')->name('index');
Route::get('/category', 'MainController@category')->name('category');
Route::get('/basket', 'MainController@basket')->name('basket');
Route::get('/checkout', 'MainController@checkout')->name('checkout');
Route::get('/popular', 'MainController@popular')->name('popular');
