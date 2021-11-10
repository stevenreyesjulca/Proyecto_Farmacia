<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\VentaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('auth.login');
})->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('admin.index');
})->name('admin');
Auth::routes();



Route::get('producto', [ProductoController::class, 'index'])->name('producto.index');
Route::get('producto/create', [ProductoController::class, 'create'])->name('producto.create');


Route::get('venta', [VentaController::class, 'index'])->name('venta.index');
Route::get('venta/create', [VentaController::class, 'create'])->name('venta.create');

Route::get('compra', [CompraController::class, 'index'])->name('compra.index');
Route::get('compra/create', [CompraController::class, 'create'])->name('compra.create');

