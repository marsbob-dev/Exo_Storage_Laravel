<?php

use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StoreSuccessController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/back-office', [BackOfficeController::class, 'index'])->name('backOffice');
Route::get('/store', [StoreController::class, 'index'])->name('store');
route::post('/admin-store', [StoreController::class, 'store']);
