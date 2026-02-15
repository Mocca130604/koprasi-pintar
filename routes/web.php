<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
Route::view('/login', 'admin.login')->name('login');
