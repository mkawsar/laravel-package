<?php

use Illuminate\Support\Facades\Route;
use Pluto\Authentication\Http\Controllers\AuthenticationController;

Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/registration', [AuthenticationController::class, 'register'])->name('registration');
