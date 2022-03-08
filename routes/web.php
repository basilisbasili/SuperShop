<?php
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'reset'=>false,
    'confirm'=>false,
    'veryfy'=>false,
]);


Route::get('/', 'MainController@index')->name('index');

Route::get('/orders', 'OrderController@index')->name('home');


Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');


Route::get('/category', 'MainController@category')->name('category');

Route::get('/basket', 'BasketController@basket')->name('basket');

Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basketAdd');

Route::post('/basket/rem/{id}', 'BasketController@basketRemove')->name('basketRemove');

Route::get('/checkout', 'BasketController@checkout')->name('checkout');

Route::post('/shop', 'BasketController@shop')->name('shop');


Route::get('/category/{id}', 'MainController@detal')->name('detal');

Route::get('/{code}', 'MainController@selectCat')->name('selectCat');


