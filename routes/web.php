<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/barang/index', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang/create', [BarangController::class, 'store']);
Route::get('/barang/{barang}/edit', [BarangController::class, 'edit'])->name(name: 'barang.edit');
Route::patch('/barang/{barang}', [BarangController::class, 'update'])->name(name: 'barang.update');
Route::delete('/barang/{barang}', [BarangController::class, 'destroy'])->name(name: 'barang.delete');
Auth::routes();
