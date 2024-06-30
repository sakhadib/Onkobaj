<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\login_controller;


Route::get('/signup', [login_controller::class, 'signup']);

Route::get('/login', [login_controller::class, 'index']);


