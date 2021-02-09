<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route Superadmin
Route::group(['middleware' => ['auth', 'superadmin'], 'prefix' => 'superadmin'], function () {
    Route::get('admin', [AdminController::class, 'index'])->name('superadmin.admin.render');
});

//Route Admin
Route::group(['middleware' => 'auth', 'prefix' => 'management'], function() {
    Route::get('product', [ProductController::class, 'index'])->name('management.product.index');
});