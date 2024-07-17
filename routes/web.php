<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UsersController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route admin(Backend)
// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
//     Route::get('/', function(){
//         return view('admin.index');
//     });
// });

// Route::get('tes', function () {
//     return view('layouts.front');
// });


Route::get('/', [FrontController::class, 'index']);
Route::get('contact', [FrontController::class, 'contact']);
Route::get('shop', [FrontController::class, 'shop']);
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::get('checkout', [FrontController::class, 'checkout']);
Route::get('track', [FrontController::class, 'track']);
Route::get('shop_details/{id}', [FrontController::class, 'shop_details']);
Route::get('about', [FrontController::class, 'about']);







use App\Http\Middleware\IsAdmin;
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // untuk Route Backend Lainnya
    Route::resource('user', \App\Http\Controllers\UsersController::class);
    Route::resource('kategori', \App\Http\Controllers\KategoriController::class);
    Route::resource('product', \App\Http\Controllers\ProductController::class);

});

Route::group(['prefix' => 'admin'], function(){
    Route::resource('users', UsersController::class);
});
