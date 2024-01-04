<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoriesWeb;
use App\Http\Controllers\prodectcontrol;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [CategoriesWeb::class, 'index']);
Route::resource('/category', CategoriesWeb::class);
Route::get('/log', function () {
    return view('auth.login');
});
Route::post('/log', [LoginController::class, 'login'])->name('log');


Route::get('/cart', [prodectcontrol::class, 'index']);
Route::get('/shopping-cart', [prodectcontrol::class, 'productCart'])->name('shopping.cart');
Route::get('/product/{id}', [prodectcontrol::class, 'addProducttoCart'])->name('addProduct.to.cart');
Route::patch('/update-shopping-cart', [prodectcontrol::class, 'updateCart'])->name('update.sopping.cart');
Route::delete('/delete-cart-product', [prodectcontrol::class, 'deleteProduct'])->name('delete.cart.product');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
require __DIR__ . '/admin.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
