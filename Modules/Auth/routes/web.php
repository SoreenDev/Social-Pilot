<?php

use Modules\Auth\Http\Controllers\AuthController;
use Modules\Plan\Http\Controllers\UserPlanController;

Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::Post('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::group(['middleware' => 'auth'], function () {
    Route::Post('/auth/login', [AuthController::class, 'login'])->name('auth.login');

    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::resource('my-plan', UserPlanController::class);


});
