<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('users', UserController::class)->names('users');
Route::resource('customers', CustomerController::class)->names('customers');
Route::resource('brands', BrandController::class)->names('brands');
Route::resource('products', ProductController::class)->names('products');
Route::resource('services', ServiceController::class)->names('services');
Route::resource('orders', OrderController::class)->names('orders');

Route::get('get_customers_by_id', [CustomerController::class, 'get_customers_by_id'])->name('get_customers_by_id');

Route::get('get_services', [ProductController::class, 'get_services'])->name('get_services');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
