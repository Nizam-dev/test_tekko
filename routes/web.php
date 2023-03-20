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



Route::get('login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('login', [App\Http\Controllers\LoginController::class, 'login']);
Route::get('register', [App\Http\Controllers\RegisterController::class, 'index']);
Route::post('register', [App\Http\Controllers\RegisterController::class, 'register']);

Auth::routes(['login'=>false,'register'=>false]);

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/tambah', [App\Http\Controllers\DashboardController::class, 'tambah']);
Route::post('/tambah', [App\Http\Controllers\DashboardController::class, 'post']);
Route::get('/edit/{id}', [App\Http\Controllers\DashboardController::class, 'edit']);
Route::post('/update/{id}', [App\Http\Controllers\DashboardController::class, 'update']);
Route::get('/hapus/{id}', [App\Http\Controllers\DashboardController::class, 'hapus']);
Route::get('logout', [App\Http\Controllers\LoginController::class, 'logout']);
