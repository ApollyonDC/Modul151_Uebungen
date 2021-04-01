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
    return redirect('/products');
});

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'list']);
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'detail']);
Route::get('/orderProduct/{id}', [\App\Http\Controllers\OrderItemController::class, 'addItem']);
Route::get('/removeProduct/{id}', [\App\Http\Controllers\OrderController::class, 'removeItem']);
Route::get('/incrementProduct/{id}', [\App\Http\Controllers\OrderController::class, 'incrementItem']);
Route::get('/decrementProduct/{id}', [\App\Http\Controllers\OrderController::class, 'decrementItem']);
Route::get('/order', [\App\Http\Controllers\OrderController::class, 'cart']);
Route::get('/orderInfo', [\App\Http\Controllers\OrderController::class, 'orderInfo']);
Route::post('/finishOrder', [\App\Http\Controllers\OrderController::class, 'finishOrder']);
Route::get('/register', [\App\Http\Controllers\UserController::class, 'registration']);
Route::post('/registerUser', [\App\Http\Controllers\UserController::class, 'createUser']);
Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginLoader']);
Route::post('/loginUser', [\App\Http\Controllers\UserController::class, 'login']);
Route::get('/profile', [\App\Http\Controllers\UserController::class, 'orders']);
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout']);