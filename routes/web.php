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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\CustomerController::class, 'index'])->name('index');
Route::get('/add-customer', [App\Http\Controllers\CustomerController::class, 'customer'])->name('add-customer');
Route::get('/customer-list', [App\Http\Controllers\CustomerController::class, 'customer_list'])->name('customer-list');
Route::get('/customer-detail/{id}', [App\Http\Controllers\CustomerController::class, 'customer_detail'])->name('customer-detail');
Route::get('/money-transfer/{id}', [App\Http\Controllers\CustomerController::class, 'money_transfer_index'])->name('money-transfer');
Route::post('/pay', [App\Http\Controllers\CustomerController::class, 'money_transfer'])->name('pay');
Route::get('/transaction-history', [App\Http\Controllers\CustomerController::class, 'transaction_history'])->name('transaction-history');