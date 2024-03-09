<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsListController;
use App\Http\Controllers\ProductCardController;

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

Route::get('/', [HomeController::class, 'index']) -> name('main_page');
Route::get('/products', [ProductsListController::class, 'products_list']) -> name('products_list');
Route::get('/product_card/{id}', [ProductCardController::class, 'show_product_card']) -> name('product_card');
