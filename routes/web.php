<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', [UserController::class, 'index'])
     ->name('users.index');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [UserController::class, 'store']);