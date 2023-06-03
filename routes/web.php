<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/showproduct',[ProductController::class, 'index']);
Route::get('/newproduct',[ProductController::class, 'addnewproduct']);
Route::post('/newproduct', [ProductController::class, 'store'])->name('products.store');
Route::get('/deleteproduct/{id}', [ProductController::class, 'delete'])->name('products.delete');
