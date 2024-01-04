
<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoriesController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/dash', function () {
    return view('admin.index');
})->middleware(Authenticate::class);
Route::resource('categories', CategoriesController::class)->middleware(Authenticate::class);
Route::resource('products', ProductsController::class)->middleware(Authenticate::class);
