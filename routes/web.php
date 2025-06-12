<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFactoryController;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UserController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
