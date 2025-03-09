<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', [userController::class, 'index'])->name('index');

Route::fallback(function () { return redirect()->route('index')->with('error', 'This route not exist!'); });

Route::get('/login', [userController::class, 'login'])->name('login');
Route::post('/logining', [userController::class, 'logining'])->name('logining');

Route::get('/register', [userController::class, 'register'])->name('register');
Route::post('/registering', [userController::class, 'registering'])->name('registering');

Route::get('/home', [userController::class, 'home'])->name('home');

Route::get('/logout', [userController::class, 'logout'])->name('logout');
