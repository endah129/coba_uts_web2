<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', [AboutController::class, 'about'])->name('about');
