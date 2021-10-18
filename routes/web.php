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
Auth::routes();
Route::group(['namespace'=>'Back'],function(){
    Route::get('/admin/product-add', 'ProductController@index');

});


Route::group(['namespace'=>'Front'],function(){
    Route::get('/', 'ProductController@index')->name('hompage');
    Route::get('/shop', 'ProductController@AllProductList')->name('shop');
    Route::get('/shop/category/{id}', 'ProductController@categoryProductList')->name('categoryList');
    Route::get('/shop/product/{slug?}', 'ProductController@productDetails')->name('productDetails');
    Route::get('/cart', 'CartController@List')->name('cartList');
    Route::delete('/cart/destroy/{id}', 'CartController@destroy')->name('cartDelete');
    Route::post('/cart/cartadd/{id}', 'CartController@CartAdd')->name('CartAdd');
   

});




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
