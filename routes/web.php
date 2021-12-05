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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::get('/stores', [App\Http\Controllers\StoreController::class, 'index'])->name('store.index');
Route::get('/store/{id}', [App\Http\Controllers\StoreController::class, 'show'])->name('store.show');
Route::get('/warehouses', [App\Http\Controllers\WarehouseController::class, 'index'])->name('warehouse.index');
Route::get('/warehouse/{id}', [App\Http\Controllers\WarehouseController::class, 'show'])->name('warehouse.show');
