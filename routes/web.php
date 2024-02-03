<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [UserController::class,'index'])->name('index');
Route::get('/lk', [UserController::class,'lk'])->name('lk');
Route::get('/app', [UserController::class,'app'])->name('app');
Route::get('/signin', [UserController::class,'signin'])->name('signin');
Route::get('/signup', [UserController::class,'signup'])->name('signup');
Route::post('/signup_valid', [UserController::class,'signup_valid'])->name('signup_valid');
Route::post('/signin_valid', [UserController::class,'signin_valid'])->name('signin_valid');
Route::get('/signout', [UserController::class,'signout'])->name('signout');