<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});


Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/muro',[PostController::class, 'index'])-> name('post.index');
Route::get('/login',[LoginController::class, 'index'])-> name('login.index');
Route::post('/login',[LoginController::class, 'store'])-> name('login.index');
//Route::get('/logout',[LogoutController::class, 'index'])-> name('logout');
Route::post('/logout',[LogoutController::class, 'store'])-> name('logout');

