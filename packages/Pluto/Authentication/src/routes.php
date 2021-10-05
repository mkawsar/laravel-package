<?php

use Illuminate\Support\Facades\Route;
use Pluto\Authentication\Controllers\AuthenticationController;

Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
