<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\login_controller;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\problem_controller;
use App\Http\Controllers\profile_controller;
use App\Http\Controllers\lb_controller as LeaderboardController;
use App\Http\Controllers\extra_controller;


Route::get('/signup', [login_controller::class, 'signup']);
Route::post('/signup', [login_controller::class, 'store']);

Route::get('/login', [login_controller::class, 'index']);
Route::post('/login', [login_controller::class, 'login']);

Route::get('/logout', [login_controller::class, 'logout']);

Route::get('/problemset', [problem_controller::class, 'index']);
Route::get('/problemset/{level}', [problem_controller::class, 'set']);

Route::get('/problem/{slug}', [problem_controller::class, 'show']);
Route::post('/math/submit/{slug}', [problem_controller::class, 'submit']);

Route::get('/profile/{id}', [profile_controller::class, 'profile']);

Route::get('/leaderboard', [LeaderboardController::class, 'index']);


Route::get('/rules', [extra_controller::class, 'rules']);


















Route::get('/iamshuvro', [admin_controller::class, 'index']);
Route::post('/iamshuvro', [admin_controller::class, 'store']);

Route::get('/shuvrodaadmin', [admin_controller::class, 'input']);
Route::post('/shuvrodaadmininput', [admin_controller::class, 'inputstore']);




