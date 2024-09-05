<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');     
});
Route::post('/auth',[UserController::class,'auth']);
Route::get('/user',[UserController::class,'user']);
Route::get('/user/shop{id}',[UserController::class,'shop'])->name('user.shop');
Route::get('/keranjang',[UserController::class,'keranjang']);
Route::get('/product',[UserController::class,'product']);
Route::get('/chekout',[UserController::class,'chekout']);
Route::get('/berhasil',[UserController::class,'berhasil']);
// Route::get('chekout',[CheckoutController::class, 'show'])->name('chekout');
// Route::get('chekout',[CheckoutController::class, 'store'])->name('chekout.store');
// Route::get('/che-kout',[CheckoutController::class, 'conformation'])->name('chek-out.confirmation');
// Route::get('/dasboard',[UserController::class,'dasboard']);


Route::get('/cart','CartController@index')->name('cart.index');
Route::get('/cart','CartController@store')->name('cart.store');
Route::get('/cart{id}','CartController@destroy')->name('cart.destory');

Route::get('/logout',[UserController::class, 'logout']);
