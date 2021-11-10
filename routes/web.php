<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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
    return view('auth.login');
})->middleware('auth');

// Route::get('/admin', function () {
//     return view('admin.index');
// });
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('admin.index');
})->name('admin');
Auth::routes();

Route::get('producto', [ProductoController::class, 'index'])->name('producto.index');
Route::get('producto/create', [ProductoController::class, 'create'])->name('producto.create');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
