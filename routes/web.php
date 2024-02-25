<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfilUserController;
use App\Http\Controllers\SalesPageController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/category/{product}', [ProductController::class, 'show']);
Route::get('/user/{id}/name/{name}', [ProfilUserController::class, 'show']);
Route::get('/transaction', [SalesPageController::class, 'show']);