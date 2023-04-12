<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::view('register', 'auth.register')->middleware('guest');
Route::post('store', [RegisterController::class, 'store']);
Route::view('home', 'home')->middleware('auth');

Route::view('login', 'auth.login')->middleware('guest')->name('login');
Route::post('authenticate', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout']);

Route::resource('/user', UserController::class);
