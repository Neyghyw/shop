<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index'])->name('main_page');


Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products_list');
    Route::get('/{product}/detail', [ProductController::class, 'detail'])->name('product_card');
});
