<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class,'index'])->name('index');
// Route::get('/', [UserController::class,'index'])->name('index');
Route::get('/service', [HomeController::class,'service'])->name('service');
Route::get('/shop', [ProductController::class,'shop'])->name('shop');
Route::get('/doctors', [HomeController::class,'doctors'])->name('doctors');
Route::get('/departments', [HomeController::class,'departments'])->name('departments');
Route::get('/about', [HomeController::class,'about'])->name('about');
