<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BarangController;

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
    return view('layout.app');
});

Route::get('/tempat', [TempatController::class, 'index'])->name('tempat.index');
Route::get('/tempat/create', [TempatController::class, 'create'])->name('tempat.create');
Route::post('/tempat/store', [TempatController::class, 'store'])->name('tempat.store');
Route::get('/tempat/edit/{id}', [TempatController::class, 'edit'])->name('tempat.edit');
Route::put('/tempat/edit/{id}', [TempatController::class, 'update'])->name('tempat.update');
Route::delete('/tempat/delete/{id}', [TempatController::class, 'destroy'])->name('tempat.destroy');
Route::get('/tempat/detail/{id}', [TempatController::class, 'show'])->name('tempat.show');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category/detail/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/edit/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/delete/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
Route::get('/barang/detail/{id}', [BarangController::class, 'show'])->name('barang.show');