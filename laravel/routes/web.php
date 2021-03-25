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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'list']);
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'detail']);
Route::get('/orderProduct/{id}', [\App\Http\Controllers\OrderItemController::class, 'addItem']);
Route::get('/order', [\App\Http\Controllers\OrderController::class, 'cart']);
Route::post('/finishOrder', [\App\Http\Controllers\OrderController::class, 'finishOrder']);
Route::get('/confirmOrder', [\App\Http\Controllers\OrderController::class, 'confirmOrder']);
Route::post('/placeOrder', [\App\Http\Controllers\OrderController::class, 'placeOrder']);
Route::get('/register', [\App\Http\Controllers\UserController::class, 'registration']);
Route::post('/registerUser', [\App\Http\Controllers\UserController::class, 'createUser']);
Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginLoader']);
Route::post('/loginUser', [\App\Http\Controllers\UserController::class, 'login']);