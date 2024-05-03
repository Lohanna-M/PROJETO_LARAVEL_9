<?php

use App\Http\Controllers\AdminProdutoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/product/{product:slug}', [ProdutoController::class,'show'])->name('product');

//Admin

Route::get('/admin/products',[AdminProdutoController::class, 'index'])->name('admin.products');
Route::get('/admin/products/create',[AdminProdutoController::class, 'create'])->name('admin.product.create');
Route::get('/admin/products/{product}/edit',[AdminProdutoController::class, 'edit'])->name('admin.product.edit');
Route::post('/admin/products',[AdminProdutoController::class, 'store'])->name('admin.product.store');
Route::put('/admin/products/{product}',[AdminProdutoController::class, 'update'])->name('admin.product.update');

//Delete

Route::get('/admin/products/{product}/delete',[AdminProdutoController::class, 'destroy'])->name('admin.product.destroy');

Route::get('/admin/products/{product}/delete-image',[AdminProdutoController::class, 'destroyImage'])->name('admin.product.destroyImage');
