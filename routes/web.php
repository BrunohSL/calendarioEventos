<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/events', [EventsController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
