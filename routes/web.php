<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

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
Route::get('/customers', [TransactionController::class, 'getCustomers']);
Route::get('/cars', [TransactionController::class, 'getCars']);
Route::get('/reservation', [TransactionController::class, 'getReservation']);
Route::get('/service', [TransactionController::class, 'getService']);

Route::get('/', function () {
    return view('welcome');
});
