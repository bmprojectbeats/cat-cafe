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