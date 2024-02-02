<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/', [ServiceController::class, 'welcome'])->name('welcome');
Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');

Route::post('/service', [ServiceController::class, 'store'])->name('service.store');