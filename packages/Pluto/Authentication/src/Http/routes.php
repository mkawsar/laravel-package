<?php

use Illuminate\Support\Facades\Route;
use Pluto\Authentication\Http\Controllers\AuthenticationController;

Route::group(['middleware' => 'web'], function () {
    Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
    Route::post('/login', [AuthenticationController::class, 'postLogin'])->name('post.login');
    Route::get('/registration', [AuthenticationController::class, 'register'])->name('registration');
});
